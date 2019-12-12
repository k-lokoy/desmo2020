const gulp    = require("gulp")
const plumber = require("gulp-plumber")
const sass    = require("gulp-sass")
const prefix  = require("gulp-autoprefixer")
const wpPot   = require("gulp-wp-pot")
const sort    = require("gulp-sort")
const zip     = require("gulp-zip")
const pkg     = require("./package.json")

const info = {
  name:      "desmo2020",
  slug:      "desmo2020",
  version:   pkg.version,
  author:    "Lokøy Design",
  email:     "kennethlokoy@gmail.com",
  bugReport: "https://github.com/lokoydesign/desmo2020/issues"
}

function css() {
  return gulp.src("./scss/**/*.scss")
    .pipe(plumber())
    .pipe(sass({outputStyle: "expanded", includePaths: ["scss"]}))
    .pipe(prefix(["last 30 versions", "> 1%", "ie 8", "ie 7"], {cascade: true}))
    .pipe(gulp.dest("./"))
}

function pot() {
  return gulp.src("./**/*.php")
    .pipe(plumber())
    .pipe(sort())
    .pipe(wpPot({
        domain:         info.slug,
        package:        info.slug,
        bugReport:      info.bugReport,
        lastTranslator: `${info.author} <${info.email}>`,
        team:           `${info.author} <${info.email}>`
    }))
    .pipe(gulp.dest(`./languages/${info.slug}.pot`))
}

function distribute() {
  return gulp.src([
    "./**/*.*",
    "!./.git",
    "!./node_modules/**/*.*",
    "!./dist/**/*.*",
    "!./scss/**/*.*",
    "!./.gitignore",
    "!./gulpfile.js",
    "!./package.json",
    "!./package-lock.json",
  ], {
    base: ".."
  }).pipe(zip(`${info.slug}_${info.version}.zip`))
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