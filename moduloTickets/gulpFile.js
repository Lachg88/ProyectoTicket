import {src,dest,watch,series} from 'gulp'
import * as dartSass from 'sass'
import gulpSass from 'gulp-sass'
import terser from 'gulp-terser'


const sass = gulpSass(dartSass)

export function js ( done ){
    src("src/js/tickets.js")
    //.pipe(terser())
    .pipe( dest('build/js'))
    done();
}

export function css ( done ){
    src('src/scss/app.scss', {sourcemaps: true})
    .pipe( sass({
        outputStyle:'compressed'
    }).on('error', sass.logError) )
    .pipe( dest('build/css', {sourcemaps: '.'}) )
    done()
}

export function dev(){
    watch('src/scss/**/*.scss', css)
    watch('src/js/**/app.js', js)
} 

export default series (js , css , dev)