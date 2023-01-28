var gulp = require('gulp');
var cssmin = require('gulp-cssmin');
var rename = require('gulp-rename');
var pngSprite = require('coveo-png-sprite');
var concat = require('gulp-concat');
var cleanCss = require('gulp-clean-css');


gulp.task("default", (done) => {
    console.log("Comenzando la magia de GULPjs bebeshito");   
    done();
});


gulp.task("minconcat-sections", (done) => {
    gulp.src("srcSectionsCss/*.css")
    .pipe(concat("style.css"))
    .pipe( cssmin() )
    .pipe(rename( {suffix: '.min'}) )
    .pipe(gulp.dest("./../css/"))
    done();
});

gulp.task("minconcat-critical", (done) => {
    gulp.src("srcCriticalCss/*.css")
    .pipe(concat("critical.css"))
    .pipe( cssmin() )
    .pipe(rename( {suffix: '.min'}) )
    .pipe(gulp.dest("./../css/"))
    done();
});


gulp.task('minboots', function (done) {
    gulp.src('./../vendor/bootstrap/css/bootstrap.css')
        .pipe( cssmin() )
        .pipe(rename( {suffix: '.min'}) )
        .pipe( gulp.dest('./../vendor/bootstrap/css/') );
        done();
});







/* gulp.task('default', function (done) {
    console.log("cacarocolas")
    gulp.src('./../vendor/venobox/venobox.css')
        .pipe( cssmin() )
        .pipe(rename( {suffix: '.min'}) )
        .pipe( gulp.dest('./../vendor/venobox/') );
        done();
}); */

/* gulp.task('cssmin-style', function (done) {
    gulp.src('./../css/style.css')
        .pipe( cssmin() )
        .pipe(rename( {suffix: '.min'}) )
        .pipe( gulp.dest('./../css/') );
        done();
}); */

gulp.task('cssmin', (done) => {
    const stylesNames = ["style", "critical"];
        stylesNames.forEach( ( style ) => {
          gulp.src(`./../css/${style}.css`)
            .pipe(cssmin())
            .pipe(rename({basename: `${style}.min`}))
            .pipe( gulp.dest('./../css/'));
        })
    done();
});

gulp.task('sprite', (done) => {
    gulp.src('pngs-to-sprite/*.png')
            .pipe(pngSprite.gulp({
                                   cssPath: 'sprites.scss',
                                   pngPath: 'sprites.png',
                                   namespace: 'sprites'
                                }))
            .pipe(gulp.dest('pngs-to-sprite/'))
    done();
});


//Función genérica
/* gulp.task('cssmin', (done) => {
  
    done();
}); */

//Para enlazar todas las funciones
gulp.task('default', gulp.parallel('default', 'minconcat-sections', 'minconcat-critical'));