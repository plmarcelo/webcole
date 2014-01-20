/**
 * Created by uplm3a on 27/12/13.
 */
module.exports = function(grunt) {

	grunt.initConfig({
		// Package
		pkg: grunt.file.readJSON('package.json'),

		// Uglify
		watch: {
			scripts: {
				files: '**/src/*.js',
				tasks: ['uglify']
			},
			less_files: {
				files: '**/*.less',
				tasks: ['less']
			}
		},

		// Uglify
		uglify: {
			options: {
				banner: '/*! <%= pkg.name %> <%= grunt.template.today("yyyy-mm-dd") %> */\n'
			},
			build: {
				files: {
					'public/js/front.min.js': '**/src/front.js'
				}
			}
		},

		// Less
		less: {
			options: {
				cleancss: true
			},
			files: {
				'public/css/<%= pkg.name %>.min.css' : 'public/less/<%= pkg.name %>.less'
			}
		}
	});

	grunt.loadNpmTasks('grunt-contrib-watch');
	grunt.loadNpmTasks('grunt-contrib-uglify');
	grunt.loadNpmTasks('grunt-contrib-less');

	grunt.registerTask('default', ['uglify', 'less']);
};