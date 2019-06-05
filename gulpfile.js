"use strict";

// Require Gulp & Plugins
const gulp = require('gulp');
const sass = require('gulp-sass');
const autoprefixer = require('gulp-autoprefixer');
const prettier = require("@bdchauvette/gulp-prettier");
const prettierconfig = require("./config/prettier.config.js");
const cleanCSS = require('gulp-clean-css');
const rename = require('gulp-rename');
const merge = require('merge-stream');
const sassLint = require('gulp-sass-lint');
const filter = require("gulp-filter");

//File paths for build
let filePath = {
    build_dir: './dist/css',
    scss: {
        src: ['./src/mesh.scss', './src/mesh-grid.scss']
    },
    css: {
        src: ['./dist/css/mesh.css', './dist/css/mesh-grid.css']
    },
    clean: {
        scss_src: 'src/**/*.scss',
        css_src: 'dist/**/*.css'
    },
    watch: {
        scss_src: 'src/**/*.scss'
    },
    lint: {
        scss_src: 'src/**/*.scss'
    }
}

gulp.task('test', () => {
    // console.log(process.argv[]);
})

//Build CSS
gulp.task('build', () => {
    let tasks = filePath.scss.src.map(function(element){
        return gulp.src(element)
            .pipe(sass({outputStyle: 'expanded'}))
            .pipe(gulp.dest(filePath.build_dir))
    });
    return merge(tasks);
});

//Minify
gulp.task('minify', () => {
    let tasks = filePath.css.src.map(function(element){
        return gulp.src(element)
            .pipe(cleanCSS())
            .pipe(rename({
                suffix: '.min'
            }))
            .pipe(gulp.dest(filePath.build_dir))
    });
    return merge(tasks);
});

//Clean SCSS
gulp.task('clean-scss', () => {
    return gulp.src(filePath.clean.scss_src)
        .pipe(prettier(prettierconfig))
        .pipe(filter(file => file.didPrettierFormat))
        .pipe(gulp.dest(file => file.base))
});

//Clean CSS
gulp.task('clean-css', () => {
    return gulp.src(filePath.clean.css_src)
        .pipe(prettier(prettierconfig))
        .pipe(filter(file => file.didPrettierFormat))
        .pipe(gulp.dest(file => file.base))

});

//Prefix
gulp.task('prefix', () => {
    let tasks = filePath.css.src.map(function(element){
        return gulp.src(element)
            .pipe(autoprefixer())
            .pipe(gulp.dest(filePath.build_dir))
    });
    return merge(tasks);
});

//Lint
gulp.task('lint', function () {
    return gulp.src(filePath.lint.scss_src)
        .pipe(sassLint())
        .pipe(sassLint.format())
        .pipe(sassLint.failOnError())
});

//Watch
gulp.task('watch-scss', () => {
    gulp.watch(filePath.watch.scss_src, gulp.series('lint'));
    gulp.watch(filePath.watch.scss_src, gulp.series('build'));
})

//Scripts
gulp.task('prod', gulp.series('lint', 'clean-scss', 'build', 'prefix', 'clean-css', 'minify'));
gulp.task('dev', gulp.series('watch-scss'));
gulp.task('website', gulp.series('build', 'prefix', 'clean-css', 'minify'));



