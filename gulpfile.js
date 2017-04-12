var gulp = require('gulp');
var sass = require('gulp-sass');
var watch = require('gulp-watch');
var imagemin = require('gulp-imagemin');

// task para o sass
gulp.task('sass', function () {
    return gulp.src('sass/**/*.sass')
        .pipe(sass().on('error', sass.logError))
        .pipe(sass({ outputStyle: 'compressed' }).on('error', sass.logError))
        .pipe(gulp.dest('css'));
});

// task watch
gulp.task('watch', function () {
    gulp.watch('sass/**/*.sass', ['sass']);
});

// task imagemin
gulp.task('imagemin', function () {
    return gulp.src('images/normal/**/**')
        .pipe(imagemin({
            progressive: true
        }))
        .pipe(gulp.dest('images/imagemin'));
});

// task default que vai inciar as task que eu escolher
gulp.task('default', ['sass','watch']);
