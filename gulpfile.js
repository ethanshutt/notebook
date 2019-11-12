'use strict'

// directory locations

var dir = {
    src: 'src/',
    dist: 'dist/',
}

// modules
var gulp = require('gulp');
var autoprefixer = require('gulp-autoprefixer');
var cleanCSS = require('gulp-clean-css');
var sourcemaps = require('gulp-sourcemaps');

function css(done) {
    gulp.src(dir.src + '**/*.css')
        .pipe(sourcemaps.init())
        .pipe(autoprefixer())
        .pipe(cleanCSS({ debug: true }, (details) => {
            console.log(`${details.name}: ${details.stats.originalSize}`);
            console.log(`${details.name}: ${details.stats.minifiedSize}`);
        }))
        .pipe(sourcemaps.write('.'))
        .pipe(gulp.dest(dir.dist))
        done();
}

exports.default = (done) => {
    gulp.watch(dir.src + '**/*.css', css);
    done();
};