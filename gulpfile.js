"use strict";

const FRONT_PATH = "./app/frontend/";
const browserify = require("browserify");
const gulp = require("gulp");
const source = require("vinyl-source-stream");
const buffer = require("vinyl-buffer");
const uglify = require("gulp-uglify");
const sourcemaps = require("gulp-sourcemaps");
const gutil = require("gulp-util");
const babel = require("gulp-babel");
const babelify = require("babelify");

const less = require("gulp-less");
const postcss = require("gulp-postcss");
const autoprefixer = require("autoprefixer");
const path = require("path");
const cssnano = require("cssnano");
const concat = require("gulp-concat");

const imagemin   = require("gulp-imagemin");
const imageminJpegoptim = require('imagemin-jpegoptim');


gulp.task("styles", function () {
    let processors = [
        autoprefixer,cssnano({safe:true})
    ];

    gulp.src([FRONT_PATH+'styles/fonts/**/*'])
        .pipe(gulp.dest(FRONT_PATH+"../build/css/fonts"));

    return gulp.src([FRONT_PATH+"styles/main.less"])
        .pipe(less({
            paths: [ path.join(__dirname, "less", "includes") ]
        }))
        .pipe(postcss(processors))
        .pipe(sourcemaps.init())
        .pipe(concat("merged.css"))
        .pipe(sourcemaps.write("."))
        .pipe(gulp.dest(FRONT_PATH+"../build/css"));
});

gulp.task("timepad_styles", function () {
    let processors = [
        autoprefixer,cssnano({safe:true})
    ];

    return gulp.src([FRONT_PATH+"timepad/style.less"])
        .pipe(less({
            paths: [ path.join(__dirname, "less", "includes") ]
        }))
        .pipe(postcss(processors))
        .pipe(sourcemaps.init())
        .pipe(concat("timepad.css"))
        .pipe(sourcemaps.write("."))
        .pipe(gulp.dest(FRONT_PATH+"../build/css"));
});

gulp.task("scripts", function () {
    browserify(FRONT_PATH+"scripts/app.js", { debug: true })
        .transform(babelify.configure(
            {
                presets: ["es2015-ie"],
                compact: true
            }
        ))
        .bundle()
        .on("error", gutil.log)
        .pipe(source("app.js"))
        .pipe(buffer())
        .pipe(sourcemaps.init({loadMaps: true}))
        .pipe(uglify())
        .pipe(sourcemaps.write("./"))
        .pipe(gulp.dest(FRONT_PATH+"../build/scripts"));
});
gulp.task("assets", function () {
    return gulp.src(FRONT_PATH+"**/*.{jpg,gif,png,jpeg,svg}")
        .pipe(
            imagemin([
                imagemin.gifsicle(),
                imagemin.jpegtran({
                    progressive: true
                }),
                imagemin.optipng({
                    optimizationLevel: 7
                }),
                imagemin.svgo(),
                imageminJpegoptim({max: 80})
            ], {
            verbose: true
        }))
        .pipe(gulp.dest(FRONT_PATH+"../build/"));
});

gulp.task("build",["scripts", "styles", "assets"]);

gulp.task("default", ["build"]);