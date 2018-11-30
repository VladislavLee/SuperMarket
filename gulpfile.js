const gulp = require('gulp');

const sass = require('gulp-sass');

gulp.task('sass', function() {
    gulp.src('SuperMarket/*.scss')
        .pipe(sass())
        .pipe(gulp.dest('SuperMarket'));
});

gulp.task('sass:watch', function () {
    gulp.watch('SuperMarket/*.scss',['sass']);
});


gulp.task('default', ['sass']);
