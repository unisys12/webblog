module.exports = function(grunt){

	'use strict';

	grunt.initConfig({
		pkg: grunt.file.readJSON('package.json'),
		sass: {
			dist: {
				files: [{
			    expand: true,
			    cwd: 'scss',
			    src: ['*.scss'],
			    dest: 'public/css',
			    ext: '.css',
			  }],
			  options: {
			  	style: 'compact'
			  },
			}
		},
		html: {
			all: 'public/*.html'
		},
		watch: {
			sass: {
				files: 'scss/*.scss',
				tasks: ['sass'],
				options: {
					livereload: true
				}
			},
			html: {
				files: 'public/*.html',
				task: 'html',
				options: {
					livereload: true,
				}
			}
		},
		copy: {
			main: {
				files: [
					{
						expand: true,
						cwd: 'app/bower_components/normalize.css/',
						src: ['normalize.css'],
						dest: 'scss/'
					}
				]
			}
		}
	});

	grunt.loadNpmTasks('grunt-contrib-sass');
	grunt.loadNpmTasks('grunt-html');
	grunt.loadNpmTasks('grunt-contrib-watch');
	grunt.loadNpmTasks('grunt-contrib-copy');

	grunt.registerTask('default', ['watch']);

};
