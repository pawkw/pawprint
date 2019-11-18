// var gulp = require('gulp');

// gulp.task('default', defaultTask);

// function defaultTask(done) {
//     console.log("Hello world.");
//     done();
// }

// gulp.task('hello', hello);

// function hello(done) {
//     console.log("Hello again.");
//     done();
// }

import gulp from 'gulp';

export const hello = (done) => {
    console.log("Hello again.");
    done();
}

export default hello;