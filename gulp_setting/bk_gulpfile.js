'use strict';
const gulp = require('gulp');
const sass = require('gulp-sass');
const postcss = require('gulp-postcss');
const autoprefixer = require('autoprefixer');
const plumber = require('gulp-plumber');
const notify = require("gulp-notify");
const browserSync = require('browser-sync').create();


/***********
 * sass
 ***********/
 const postcssOption = [
   autoprefixer()
 ]

 gulp.task('sass', () => {
   return gulp.src('./sass/*.scss')
     .pipe(plumber({
       errorHandler: notify.onError({
         title: "Sassコンパイル失敗",
         message: "<%= error.message %>"
       })
     }))
     .pipe(sass({outputStyle: 'expanded'}))
     .pipe(postcss(postcssOption))
     .pipe(gulp.dest('./css'))
 });

/***********
 * browser-sync
 ***********/
 const browserSyncOption = {
   reloadOnRestart: true,
   reloadDelay: 1000,
   port: 8000,
   server: ''
 }

 gulp.task('serve', (done) => {
   browserSync.init(browserSyncOption)
   done()
 });

/***********
 * watch
 ***********/
 gulp.task('watch', (done) => {
   const browserReload = () => {
     browserSync.reload()
     done()
   }

   gulp.watch('./sass/*.scss').on('change', gulp.series('sass', browserReload));
 })

/***********
 * default
 ***********/
gulp.task('default', gulp.series('serve', 'watch'));
