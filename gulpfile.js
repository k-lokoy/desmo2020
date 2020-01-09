const gulp     = require("gulp")
const plumber  = require("gulp-plumber")
const sass     = require("gulp-sass")
const sassVars = require("gulp-sass-variables")
const prefix   = require("gulp-autoprefixer")
const wpPot    = require("gulp-wp-pot")
const sort     = require("gulp-sort")
const zip      = require("gulp-zip")
const pkg      = require("./package.json")

function css() {
  return gulp.src("./scss/**/*.scss")
    .pipe(plumber())
    .pipe(sassVars({
      $name:          pkg.name,
      $themeURI:      pkg.wordpress.themeURI,
      $author:        pkg.author,
      $authorURI:     pkg.wordpress.authorURI,
      $description:   pkg.description,
      $requires:      pkg.wordpress.requires,
      $version:       pkg.version,
      $licenseFull:   pkg.wordpress.licenseFull,
      $licenseURI:    pkg.wordpress.licenseURI,
      $tags:          pkg.wordpress.tags.join(", "),
      $textDomain:    pkg.wordpress.textDomain,
      $copyrightYear: pkg.wordpress.copyrightYear,
      $license:       pkg.license
    }))
    .pipe(sass({outputStyle: "expanded", includePaths: ["scss"]}))
    .pipe(prefix(["last 30 versions", "> 1%", "ie 8", "ie 7"], {cascade: true}))
    .pipe(gulp.dest("./"))
}

function pot() {
  return gulp.src("./**/*.php")
    .pipe(plumber())
    .pipe(sort())
    .pipe(wpPot({
        domain:         pkg.name,
        package:        pkg.name,
        bugReport:      pkg.bugs.url,
        lastTranslator: pkg.author,
        team:           pkg.author
    }))
    .pipe(gulp.dest(`./languages/${pkg.name}.pot`))
}

function distribute() {
  return gulp.src([
    "./**/*.*",
    "!./.git",
    "!./.gitignore",
    "!./dist/**/*.*",
    "!./gulpfile.js",
    "!./node_modules/**/*.*",
    "!./package-lock.json",
    "!./package.json",    
    "!./scss/**/*.*",
  ], {
    base: ".."
  }).pipe(zip(`${pkg.name}_${pkg.version}.zip`))
    .pipe(gulp.dest("./dist"))
}

function watch(done) {
  gulp.watch("scss/**/*.scss", {cwd: "./", usePolling: true}, css)
  gulp.watch("**/*.php",       {cwd: "./", usePolling: true}, pot)

  return done()
}

module.exports.css        = css
module.exports.pot        = pot
module.exports.distribute = distribute
module.exports.watch      = watch

module.exports.default = gulp.series(css, pot, watch)