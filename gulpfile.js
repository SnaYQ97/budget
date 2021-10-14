/* var gulp = require('gulp'),
    sass = require('gulp-sass')(require('sass')),
    cleanCSS = require("gulp-clean-css"),
    autoprefixer = require("gulp-autoprefixer"),
    plumber = require("gulp-plumber"),
    rename = require("gulp-rename"),
    uglify = require("gulp-uglify");
 
gulp.task('mincss', function() {
    gulp
        .src([
            "public/development/scss/*.scss",
        ])
        .pipe(plumber())
        .pipe(sass({
            outputStyle: "expanded",
            includePaths: "node_modules",
        }))
        .on("error", sass.logError)
        .pipe(autoprefixer({
            cascade: false
        }))
        .pipe(gulp.dest("public/assets/css"))
        .pipe(rename({
            suffix: ".min"
        }))
        .pipe(cleanCSS())
        .pipe(gulp.dest("public/assets/css"));
        //.pipe(livereload());
});

gulp.task('js', function() {
    gulp
        .src([
            'public/development/js/*.js',
            '!public/development/js/*.min.js',
        ])
        .pipe(gulp.dest("public/assets/js"))
        .pipe(uglify())
        .pipe(rename({
            suffix: '.min'
        }))
        .pipe(gulp.dest('public/assets/js'));
        //.pipe(livereload());
});

gulp.task('img', function() {
    gulp
        .src([
            'public/development/img/*',
        ])
        .pipe(gulp.dest("public/assets/img/"));
        //.pipe(livereload());
});

 
gulp.task('watch', function() {
  //livereload.listen();
  gulp.watch('public/development/scss/*.scsss', mincss);
  gulp.watch('public/development/js/*.js', js);
  gulp.watch('public/development/img/*', img);
}); */

const gulp = require('gulp');
const sass = require('gulp-sass')(require('sass'));
const merge = require("merge-stream");
const cleanCSS = require("gulp-clean-css");
const autoprefixer = require("gulp-autoprefixer");
//const header = require("gulp-header");
const plumber = require("gulp-plumber");
const rename = require("gulp-rename");
const uglify = require("gulp-uglify");
const browserSync = require('browser-sync').create();




// Load package.json for banner
//const pkg = require('./package.json');

// Set the banner content
//const banner = ['/*!\n',
//    ' * Start Bootstrap - <%= pkg.title %> v<%= pkg.version %> (<%= pkg.homepage %>)\n',
//    ' * Copyright 2013-' + (new Date()).getFullYear(), ' <%= pkg.author %>\n',
//    ' * Licensed under <%= pkg.license %> (https://github.com/BlackrockDigital/<%= pkg.name %>/blob/master/LICENSE)\n',
//    ' */\n',
//    '\n'
//].join('');


/*  function modules() { */
    // Bootstrap JS
    //var bootstrapJS = gulp.src('node_modules/bootstrap/dist/js/*')
        //.pipe(gulp.dest('app/assets/scripts/bootstrap/js'));
    // Bootstrap SCSS
    //var bootstrapSCSS = gulp.src('node_modules/bootstrap/scss/**/*')
        //.pipe(gulp.dest('assets/styles/bootstrap/scss'))
    //jQuerry    
    /* var jquery = gulp.src([
        'node_modules/jquery/dist/*',
        '!node_modules/jquery/dist/core.js'
        ])
        .pipe(gulp.dest('public/assets/scripts/jquery/js')) */
    //return merge(bootstrapJS, bootstrapSCSS, jquery);
   /*  return merge(jquery);
}  */

//function css() {
    //return gulp
    //    .src([
    //        "node_modules/bootstrap/scss/**/*.scss",
    //    ])
    //    .pipe(plumber())
    //    .pipe(sass({
    //        outputStyle: "expanded",
    //        includePaths: "./node_modules",
    //    }))
    //    .on("error", sass.logError)
    //    .pipe(autoprefixer({
    //        cascade: false
    //    }))
    //    .pipe(header(banner, {
    //        pkg: pkg
    //    }))
    //    .pipe(gulp.dest("assets/styles/css/bootstrap"))
    //    .pipe(rename({
    //        suffix: ".min"
    //    }))
    //    .pipe(cleanCSS())
    //    .pipe(gulp.dest("assets/styles/css/bootstrap"))
//}

function maincss() {
    return gulp
        .src([
            "public/development/scss/*.scss",
        ])
        .pipe(plumber())
        .pipe(sass({
            outputStyle: "expanded",
            includePaths: "node_modules",
        }))
        .on("error", sass.logError)
        .pipe(autoprefixer({
            cascade: false
        }))
        .pipe(gulp.dest("public/assets/css"))
        .pipe(rename({
            suffix: ".min"
        }))
        .pipe(cleanCSS())
        .pipe(gulp.dest("public/assets/css"))
}

 function js() {
    return gulp
        .src([
            'public/development/js/*.js',
            '!public/development/js/*.min.js',
        ])
        .pipe(gulp.dest("public/assets/js"))
        .pipe(uglify())
        .pipe(rename({
            suffix: '.min'
        }))
        .pipe(gulp.dest('public/assets/js'))
}

function images() {
    return gulp
        .src([
            'public/development/img/*',
        ])
        .pipe(gulp.dest("public/assets/img/"))
}


function watch() {
   
    gulp.watch("public/development/scss/*", maincss);
    gulp.watch("public/development/img/*", images);
    gulp.watch("public/development/js/*.js", js);

}

exports.maincss = maincss;
exports.js = js;
exports.watch = watch;
exports.images = images;
