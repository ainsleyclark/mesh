// Require Gulp & Plugins
const   gulp = require('gulp'),
        sass = require('gulp-sass'),
        autoprefixer = require('gulp-autoprefixer'),
        prettier = require('gulp-prettier'),
        prettierconfig = require("./config/prettier.config.js"),
        cleanCSS = require('gulp-clean-css'),
        rename = require('gulp-rename');
        merge = require('merge-stream');

gulp.task('test', function(){
    console.log(prettierconfig);
    // Other watchers
});


const inputFile = process.argv[2];
const outputFile = process.argv[3];

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

//Build
let scssFiles = ['mesh.scss', 'mesh-grid.scss'];

gulp.task('build', function() {

    let tasks = scssFiles.map(function(element){
        return gulp.src('src/' + element)
            .pipe(sass({outputStyle: 'expanded'}))
            .pipe(gulp.dest('dist/css'))
            .pipe(autoprefixer())
            .pipe(prettier(prettierconfig))
    });

    return merge(tasks);

});

//Minify
let minfiyFiles = ['mesh.css', 'mesh-grid.css'];

gulp.task('minify', function() {

    let tasks = minfiyFiles.map(function(element){
        return gulp.src('dist/css/' + element)
            .pipe(cleanCSS())
            .pipe(rename({
                suffix: '.min'
            }))
            .pipe(gulp.dest('dist/css/'))
    });

    return merge(tasks);
});

//Prod
gulp.task('prod', gulp.series('build', 'minify'))


gulp.task('watch', function(){
    gulp.watch("./assets/scss/**/*", css);
    //gulp.watch('src/**/*.scss', ['sass']); 
    // Other watchers
})