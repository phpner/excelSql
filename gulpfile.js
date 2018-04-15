var gulp        = require('gulp');
var browserSync = require('browser-sync').create();

// Static Server + watching scss/html files
gulp.task('serve', function() {

    browserSync.init({
         proxy: "http://back.ru"
    });

    
    gulp.watch(["js/*.js",'css/*.css','*.php','**/*.js']).on('change', browserSync.reload);
});