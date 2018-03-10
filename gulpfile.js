//Instanciando o Gulp e plugins
var gulp = require('gulp');
var sass = require('gulp-sass');
var rename = require('gulp-rename');

//Variáveis
//Arquivos Sass
var scssFiles = 'sass/*.scss';

//Diretório de destino do CSS
var cssMinDest = 'assets/css/';
var cssDevDest = './css-dev';

//Opções para homologação
var sassDevOptions = {
    outputStyle: 'expanded'
}

//Opções para produção
var sassProdOptions = {
    outputStyle: 'compressed'
}

//Funções de Automatização
//Task 'sassdev'
gulp.task('sassdev', function () {
    return gulp.src(scssFiles)
        .pipe(sass(sassDevOptions)).on('error', sass.logError)
        .pipe(gulp.dest(cssDevDest));
});

//Task 'sassprod'
gulp.task('sassprod', function () {
    return gulp.src(scssFiles)
        .pipe(sass(sassProdOptions).on('error', sass.logError))
        .pipe(rename({
            suffix: '.min'
        }))
        .pipe(gulp.dest(cssMinDest));
});

//Task 'watch'
gulp.task('watch', function () {
    gulp.watch(scssFiles, ['sassdev', 'sassprod']);
});

// Task 'default'
gulp.task('default', ['sassdev', 'sassprod', 'watch']);