var livereload = require('gulp-livereload')
var { watch, src, pipe } = require('gulp');

function defaultTask(cb) {
    // place code for your default task here
    cb();
}

// Watches for css files.
function reloadcss(cb) {

    return src('css/*.css')
        .pipe(livereload())

    cb();
}

livereload({
    host: '0.0.0.0',
    start: true,
    port: '5000'
});

watch('css/*.css', reloadcss);

exports.default = defaultTask
exports.reloadcss = reloadcss;