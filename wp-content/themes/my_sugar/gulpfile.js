var lr = require('tiny-lr'), // Минивебсервер для livereload
    gulp = require('gulp'), // Сообственно Gulp JS
    jade = require('gulp-jade'), // Плагин для Jade
    stylus = require('gulp-stylus'), // Плагин для Stylus
    livereload = require('gulp-livereload'), // Livereload для Gulp
    myth = require('gulp-myth'), // Плагин для Myth - http://www.myth.io/
    csso = require('gulp-csso'), // Минификация CSS
    uglify = require('gulp-uglify'), // Минификация JS
    concat = require('gulp-concat'), // Склейка файлов
    connect = require('connect'), // Webserver
    server = lr(),
    purge = require('gulp-css-purge'),
    minify = require('gulp-minify-css'),
    pump = require('pump'),
    sass = require('gulp-sass'),
    autoprefixer = require('gulp-autoprefixer'),
    browserSync = require('browser-sync').create();


// Собираем JS
gulp.task('js', function() {
    gulp.src(['./src/js/**/*.js', '!./assets/js/vendor/**/*.js'])
        .pipe(concat('main.js')) // Собираем все JS, кроме тех которые находятся в ./assets/js/vendor/**
        .pipe(gulp.dest('./build/js'))
        .pipe(livereload(server)); // даем команду на перезагрузку страницы
});

gulp.task('compress', function (cb) {
    pump([
            gulp.src('./build/js/*.js'),
            uglify(),
            gulp.dest('./build/js')
        ],
        cb
    );
});


gulp.task('sass', function () {
    gulp.src('./src/scss/**/*.scss')
        .pipe(sass())
        // .pipe(sass({outputStyle: 'compressed'}))
        .pipe(concat('style.css'))
        .pipe(minify())
        .pipe(autoprefixer({
            browsers: ['last 5 versions'],
            cascade: false
        }))
        // .pipe(purge())
        .pipe(gulp.dest('./build/css/'));
});

gulp.task('build', function () {
    gulp.run('js');
    gulp.run('compress');
    gulp.run('sass');
});

gulp.task('watch', function() {
     gulp.run('js');
     // gulp.run('compress');
     gulp.run('sass');

    server.listen(35711, function(err) {
        if (err) return console.log(err);

        gulp.watch('./src/js/**/*.js', function() {
            gulp.run('js');
        });

        gulp.watch('./src/scss/**/*.scss', function() {
            gulp.run('sass');
        });
    });
});
