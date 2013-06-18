// The wrapper function
module.exports = function(grunt) {
	
	// Project and task configuration
	grunt.initConfig({
		less: {
			app: {
				options: {
					compress: true,
					yuicompress: true,
					optimization: 2
				},
				files: {
					"web/css/main.css": "app/less/main.less",
					"web/css/responsive.css": "app/less/responsive.less"
				}
			}
		},
		watch: {
			styles: {
				files: [
					'app/less/**/*.less'
				],
				tasks: ['less'],
				options: {
					nospawn: true
				}
			}
		}
	});

	// Load plugins
	grunt.loadNpmTasks('grunt-contrib-less');
	grunt.loadNpmTasks('grunt-contrib-watch');

	// Define tasks
	grunt.registerTask('default', ['watch']);

};