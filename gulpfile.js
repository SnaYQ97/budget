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
function fonts() {
    
    var fonts = gulp.src('public/development/fonts/**')
      .pipe(gulp.dest('public/assets/fonts'));

    return merge(fonts);
  }

function modules() {
    // Bootstrap JS
    /* var bootstrapJS = gulp.src('node_modules/bootstrap/dist/js/*')
      .pipe(gulp.dest('public/vendor/bootstrap/js')); // to chane
    // Bootstrap SCSS */
    //var bootstrapSCSS = gulp.src('node_modules/bootstrap/scss/**/*')
      //.pipe(gulp.dest('public/vendor/bootstrap/scss')); /
    var bootstrap = gulp.src('node_modules/bootstrap/**')
      .pipe(gulp.dest('public/vendor/bootstrap/'));
    // ChartJS
    //var chartJS = gulp.src('node_modules/chart.js/dist/*.js')
      //.pipe(gulp.dest('public/vendor/chart.js'));
    // dataTables
    
    var datatables = gulp.src('node_modules/datatables.net/**').pipe(gulp.dest('public/vendor/datatables/datatables.net'));
    var dt = gulp.src('node_modules/datatables.net-dt/**').pipe(gulp.dest('public/vendor/datatables/datatables.net-dt'));
    var bs5 = gulp.src('node_modules/datatables.net-bs5/**').pipe(gulp.dest('public/vendor/datatables/datatables.net-bs5'));
    var autofill = gulp.src('node_modules/datatables.net-autofill-bs5/**').pipe(gulp.dest('public/vendor/datatables/datatables.net-autofill-bs5'));
    var bs5_buttons = gulp.src('node_modules/datatables.net-buttons-bs5/**').pipe(gulp.dest('public/vendor/datatables/datatables.net-buttons-bs5'));
    var buttons = gulp.src('node_modules/datatables.net-buttons/**').pipe(gulp.dest('public/vendor/datatables/datatables.net-buttons'));
    var colreorder = gulp.src('node_modules/datatables.net-colreorder-bs5/**').pipe(gulp.dest('public/vendor/datatables/datatables.net-colreorder-bs5'));
    var datetime = gulp.src('node_modules/datatables.net-datetime/**').pipe(gulp.dest('public/vendor/datatables/datatables.net-datetime'));
    var responisve = gulp.src('node_modules/datatables.net-responsive-bs5/**').pipe(gulp.dest('public/vendor/datatables/datatables.net-responsive-bs5'));
    var rowgroup = gulp.src('node_modules/datatables.net-rowgroup-bs5/**').pipe(gulp.dest('public/vendor/datatables/datatables.net-rowgroup-bs5'));
    var rowreorder = gulp.src('node_modules/datatables.net-rowreorder-bs5/**').pipe(gulp.dest('public/vendor/datatables/datatables.net-rowreorder-bs5'));
    var searchbuilder = gulp.src('node_modules/datatables.net-searchbuilder-bs5/**').pipe(gulp.dest('public/vendor/datatables/datatables.net-searchbuilder-bs5'));
    var searchpanes = gulp.src('node_modules/datatables.net-searchpanes-bs5/**').pipe(gulp.dest('public/vendor/datatables/datatables.net-searchpanes-bs5'));
    var select = gulp.src('node_modules/datatables.net-select-bs5/**').pipe(gulp.dest('public/vendor/datatables/datatables.net-select-bs5'));
   
    //.pipe(gulp.dest('public/vendor/datatables'));
  

    // Font Awesome
    // var fontAwesome = gulp.src('node_modules/@fortawesome/**/*')
      //.pipe(gulp.dest('public/vendor'));
    // jQuery Easing
    // var jqueryEasing = gulp.src('node_modules/jquery.easing/*.js')
    //   .pipe(gulp.dest('public/vendor/jquery-easing'));
    // jQuery
    var jquery = gulp.src([
        'node_modules/jquery/dist/*',
        '!node_modules/jquery/dist/core.js'
      ])
      .pipe(gulp.dest('public/vendor/jquery'));
    return merge(bootstrap, datatables, dt, bs5, autofill, bs5_buttons, buttons, colreorder, datetime, responisve, rowgroup, rowreorder, searchbuilder, searchpanes, select ,jquery); //,fontAwesome , chartJS, jqueryEasing, bootstrapJS, bootstrapSCSS
  }

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
        .pipe(gulp.dest("public/development/css"))
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
exports.modules = modules;
exports.fonts = fonts;