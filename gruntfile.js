/**
 * Grunt options
 *
 * For beginners trying to understand this, this is a great article:
 * http://24ways.org/2013/grunt-is-not-weird-and-hard/
 *
 * Otherwise, you can search for on each module's name and read its documentation.
 * 
 * Simple version for getting started:
 * 
 * - run "npm install"
 * - run "grunt"
 * - develop! :)
 *
 * @since 0.5.0
 */

module.exports = function(grunt) {

	require('load-grunt-tasks')(grunt);

	grunt.initConfig({

		pkg: grunt.file.readJSON('package.json'),
        
        /**
         * Minify CSS files
         */
        cssmin: {
            options: {
              mergeIntoShorthands: false,
              roundingPrecision: -1
            },
            target: {
              files: {
                'resources/css/sticky-admin-menu.min.css': 'css/style.css',
                'resources/css/sticky-admin-menu-lightbox.min.css': 'css/lightbox.css',
              }
            }
          },

	    /**
		 * Auto-prefix the CSS based on the conditions in the `browserslist` file
		 *
		 * @since 2.0.0
		 */
		postcss: {
			options: {

				map: {
		          inline: false, // save all sourcemaps as separate files...
		          annotation: 'resources/css/' // ...to the specified directory
		      	},

				processors: [
					require('autoprefixer')({ remove: false }), // add vendor prefixes, don't remove any existing prefixes
				]

			},
			dist: {
				src: 'resources/css/*.css'
			}
		},


		/**
		 * Minify Javascript
		 *
		 * @since 2.0.0
		 */
		uglify: {
			options: {
				banner: '/*! <%= pkg.name %> - v<%= pkg.version %>*/\n'
    		},
			scripts: {
				files: {
                    'resources/js/sticky-admin-menu.js': 'js/scripts.js',
                    'resources/js/sticky-admin-menu-lightbox.js': 'js/lightbox.js',
				  }
		    }
		},

	}); // end grunt.initConfig

	/**
	 * Set up different Watch configurations depending on the environment
	 *
	 * @since 2.0.0
	 */
	var gruntWatch = {
		css: {
			files: 'css/*.css',
			tasks: [ 'cssmin', 'postcss' ],
			options: {
			},
		},
		scripts: {
			files: 'js/*.js',
			tasks: [ 'uglify' ],
			options: {
			}
		}
	};

	// Set up watch
	grunt.loadNpmTasks('grunt-contrib-watch');
	grunt.config( 'watch', gruntWatch );


	/**
	 * Run
	 */

	grunt.loadNpmTasks('grunt-contrib-uglify');
	grunt.loadNpmTasks('grunt-postcss');
    grunt.loadNpmTasks('grunt-contrib-cssmin');

	// Register tasks
	grunt.registerTask( 'default', [ 'cssmin', 'postcss', 'uglify', 'watch' ]);


}; // end module.exports = function(grunt)
