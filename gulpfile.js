// Require Gulp & Plugins
const   gulp = require('gulp'),
        sass = require('gulp-sass'),
        autoprefixer = require('gulp-autoprefixer'),
        prettier = require('gulp-prettier');
        prettierconfig = require("./config/prettier.config.js");



gulp.task('test', function(){
    console.log(prettierconfig);
    // Other watchers
});



const inputFile = process.argv[2];
const outputFile = process.argv[3];

//Browser support
const browserSupport = [
    "last 2 versions",
    "Chrome >= 35",
    "Firefox >= 31",
    "not ie 10",
    "not ie_mob 10",
    "Safari >= 9"
];

// Fetch command line arguments
const arg = (argList => {

    let arg = {}, a, opt, thisOpt, curOpt;
    for (a = 0; a < argList.length; a++) {

        thisOpt = argList[a].trim();
        opt = thisOpt.replace(/^\-+/, '');

        if (opt === thisOpt) {

        // argument value
        if (curOpt) arg[curOpt] = opt;
        curOpt = null;

    } else {

        // argument name
        curOpt = opt;
        arg[curOpt] = true;

    }

    }

    return arg;

})(process.argv);


gulp.task('build', function() {
    return gulp.src('src/mesh.scss')
        .pipe(sass({outputStyle: 'expanded'})) // Converts Sass to CSS with gulp-sass
        .pipe(gulp.dest('dist/css'))
        .pipe(autoprefixer({
            browsers: browserSupport,
            cascade: false
        }))
        .pipe(prettier(prettierconfig))
        .pipe(gulp.src('src/mesh-grid.scss', {passthrough:true})) 
        .pipe(sass({outputStyle: 'expanded'})) // Converts Sass to CSS with gulp-sass
        .pipe(autoprefixer({
            browsers: browserSupport,
            cascade: false
        }))
        .pipe(prettier(prettierconfig))
        .pipe(gulp.dest('dist/css'))
});

gulp.task('prod', function() {
    console.log('nowwwwwwww');
})

gulp.task('test', gulp.series('build', 'prod'))


// gulp.task('watch', function(){
//     gulp.watch('src/**/*.scss', ['sass']); 
//     // Other watchers
// })