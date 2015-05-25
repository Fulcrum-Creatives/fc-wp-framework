module.exports = function(grunt) {

	var constant 	 = 'YOURCONST',
		prefix       = 'yourprefix',
		themeName    = 'yourthemename',
		themeURI     = 'yourthemeuri',
		authorName   = 'yourauthorname',
		authorURI    = 'yourauthoruri',
		description  = 'yourdescription',
		tags         = 'yourtags',
		taxDomain    = 'yourtaxdomain',
		githubUser   = 'yourgithubuser',
		repoName     = 'yourreponame',
		repoBranch   = 'yourrepobranch';

	// Project configuration.
	grunt.initConfig({
		pkg: grunt.file.readJSON('package.json'),

		// Autoprefexer
		autoprefixer: {
	        dist: {
				src: 'style.css',
				dest: 'style.css'
			},
			dev: {
				src: 'css/dev.style.css',
				dest: 'css/dev.style.css'
			},
		},

		// Concat JS
	    concat: {
	        dist: {
	            src: [
	                'js/lib/no-conflict/no-conflict.js',
	                'js/lib/skip-navigation/skip-navigation.js',
	                'js/lib/menu/dropdown.js',
	                'js/lib/menu/accessibility.js',
	                'js/lib/menu/menu-init.js',
	            ],
	            dest: 'js/lib/dev.scripts.js',
	        }
	    },

	    // CSSmin
	    cssmin: {
			target: {
				files: {
					'style.css': 'style.css'
				}
			}
        },

	    // Jshint
	    jshint: {
	        files: ['Gruntfile.js', 'js/lib/dev.scripts.js'],
			options: {
				globals: {
					jQuery: true
				}
			}
	    },

	    // JSValidate
	    jsvalidate: {
			options:{
				globals: {},
				esprimaOptions: {},
				verbose: false
			},
			dist:{
				files:{
					src: 'js/lib/dev.scripts.js'
				}
			}
		},

	    // Sass
		sass: {
			dist: {
				options: {
					style: 'expanded',
					require: ['susy', 'normalize-scss'],
					sourcemap: 'none'
				},
				files: {
					'style.css': 'sass/global.scss',
					'css/quickfix.css': 'sass/quickfix.scss',
					'css/dev.style.css': 'sass/global.scss',
					'css/ie8.style.css': 'sass/ie8.scss',
					'css/ie9.style.css': 'sass/ie9.scss',
				}
			}
		},

		// Uglify
        uglify: {
            options: {
                mangle: false,
                compress: true,
            },
            dist: {
                files: {
                    'js/scripts.min.js': ['js/lib/dev.scripts.js']
                }
            }
        },

	    // Watch
	    watch: {
            livereload: {
                options: {livereload: true},
				files: ['*.css', 'js/*.js', '*.html', '*.php', 'images/*'],
            },
            scripts: {
                files: ['js/**/*.js'],
                tasks: ['jshint', 'jsvalidate', 'concat', 'uglify'],
                options: {
                    spawn: false,
                },
            },
            css: {
              files: ['sass/**/*.scss'],
              tasks: ['sass', 'autoprefixer', 'cssmin']
            }
        },

        // Clean
        clean: {
            build: {
                src: [ '_build' ]
            }
        },

        // Copy
        copy: {
            build: {
                src: [
                    '**',
                    '!**/node_modules/**',
                    '!**/.sass-cache/**',
                    '!**/assets/**'
                ],
                dot: [
                    '.htaccess'
                ],
                dest: '_build',
                expand: true
            }
        },

        // String Replace
        'string-replace': {
		  	dist: {
			    files: [{
					expand: true,
					cwd: '_build/',
					src: '**/*',
					dest: '_build/'
				}],
			    options: {
					replacements: [{
						pattern: /CONST/ig,
						replacement: constant
					}, {
						pattern: /prefix/ig,
						replacement: prefix
					}, {
						pattern: /custom-framework-name/ig,
						replacement: themeName
					}, {
						pattern: /custom-theme-uri/ig,
						replacement: themeURI
					}, {
						pattern: /custom-author-name/ig,
						replacement: authorName
					}, {
						pattern: /custom-author-uri/ig,
						replacement: authorURI
					}, {
						pattern: /custom-description/ig,
						replacement: description
					}, {
						pattern: /custom-tags/ig,
						replacement: tags
					}, {
						pattern: /custom-tax-domain/ig,
						replacement: taxDomain
					}, {
						pattern: /github-user/ig,
						replacement: githubUser
					}, {
						pattern: /repo-name/ig,
						replacement: repoName
					}, {
						pattern: /repo-branch/ig,
						replacement: repoBranch
					}]
				}
			}
		}

	});
	
	// Autoprefixer
	grunt.loadNpmTasks('grunt-autoprefixer');
    // Concat
    grunt.loadNpmTasks('grunt-contrib-concat');
    // CSSmin
    grunt.loadNpmTasks('grunt-contrib-cssmin');
    // Jshint
    grunt.loadNpmTasks('grunt-contrib-jshint');
    // JSValidate
    grunt.loadNpmTasks('grunt-jsvalidate');
    // Uglify
    grunt.loadNpmTasks('grunt-contrib-uglify');
    // Watch
    grunt.loadNpmTasks('grunt-contrib-watch');
    // Sass
    grunt.loadNpmTasks('grunt-contrib-sass');
    // Clean
    grunt.loadNpmTasks('grunt-contrib-clean');
    // Copy
    grunt.loadNpmTasks('grunt-contrib-copy');
    // String Replace
    grunt.loadNpmTasks('grunt-string-replace');

    // Watch Task
    grunt.registerTask('default', ['watch']);
    // Build Task
    grunt.registerTask('build', ['clean', 'copy', 'string-replace']);

};