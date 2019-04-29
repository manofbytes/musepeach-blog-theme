/* eslint-env es6 */
'use strict';

import gulp from 'gulp';
import sass from 'gulp-sass';
import postcss from 'gulp-postcss';
import cssnano from 'gulp-cssnano';
import sourcemaps from 'gulp-sourcemaps';
import partialImport from 'postcss-partial-import';
import webpack from 'webpack-stream';
import autoprefixer from 'autoprefixer';

// Define paths
const paths = {
	styles: {
		src: 'src/scss/**/*.scss',
		main: 'src/scss/main.scss',
		dest: 'assets/css/'
	},
	scripts: {
		src: 'src/js/**/*.js',
		main: 'src/js/main.js',
		dest: 'assets/js/'
	}
}

/**
 * Take care of sass
 */
export function styles() {
	return gulp.src(paths.styles.main)
	.pipe(sourcemaps.init())
	.pipe(sass().on('error', sass.logError))
	.pipe(postcss([ partialImport(), autoprefixer() ]))
	.pipe(cssnano())
	.pipe(sourcemaps.write('./maps'))
	.pipe(gulp.dest(paths.styles.dest));
}

/**
 * Take care of js
 *
 * TO DO: eslint
 */
export function scripts() {
	return gulp.src(paths.scripts.main)
	.pipe(webpack({
		output: {
			filename: '[name].js'
		},
		devtool: 'source-map',
		mode: 'production'
	}))
	.pipe(gulp.dest(paths.scripts.dest));
}

/**
 * Build task
 */
export const build = gulp.series(styles, scripts);

/**
 * Watch everything
 */
export default function watch() {
	gulp.watch(paths.styles.src, styles);
	gulp.watch(paths.scripts.src, scripts);
}
