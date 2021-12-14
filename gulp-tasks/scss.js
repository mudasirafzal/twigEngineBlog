const autoprefixer = require('autoprefixer');
const sass = require('gulp-sass');
const sassGlob = require('gulp-sass-glob');

module.exports = (gulp, config) => {
  gulp.task('scss', () =>
    gulp
      .src(...config.scss.source)
      .pipe(sassGlob())
      .pipe(sass(config.scss.options).on('error', sass.logError))
      .pipe(gulp.dest(config.scss.destination)),
  );
};
