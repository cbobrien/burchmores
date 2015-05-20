var gulp = require('gulp');
var sass = require('gulp-sass');
var plumber = require('gulp-plumber');
var sourcemaps = require('gulp-sourcemaps');
 
var config = {
     sassPath: './sass',
	bowerDir: './public/bower/' 
}

gulp.task('css', function() { 
    return gulp.src([config.sassPath + '/style.scss', config.bowerDir + '/bootstrap-sass/assets/stylesheets/**/*.scss'])
    	.pipe(plumber())
    	.pipe(sourcemaps.init())
         .pipe(sass({
             style: 'compressed',
             loadPath: [
                 './sass',
                 config.bowerDir + '/bootstrap-sass/assets/stylesheets'
             ]
         }) ) 
		.pipe(sourcemaps.write())
         .pipe(gulp.dest('./public/css')); 
});

 gulp.task('watch', function() {
     gulp.watch([config.sassPath + '/**/*.scss', config.bowerDir + '/bootstrap-sass/assets/stylesheets/**/*.scss'], ['css']); 
});

  gulp.task('default', ['css']);