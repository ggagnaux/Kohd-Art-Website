/*
    Usage Examples:
    
    // Build Release version and put into dist folder
    grunt release
    grunt default
    grunt
    
    // Copy updated node_modules to the appropriate location in the src/js/lib and src/css folders
    grunt updatemodules
    
    // Concatenate and minify css files during development
    grunt watch:development
    
    // Push the dist site to the live ftp server.  
    // Use this AFTER running 'grunt release'
    grunt deploy
	
	
	// *** NOTE ***
	// Look for TODO's to disable/revert debugging/development code before doing releases or deployments
*/


module.exports = function (grunt) {  
    require("matchdep").filterDev("grunt-*").forEach(grunt.loadNpmTasks);  
    
    // Project configuration.  
    grunt.initConfig({  
        dirs: {
            nodemodules: 'node_modules',
            source: 	 'src',
            output: 	 'dist'
        },
    
        pkg: grunt.file.readJSON('package.json'),  

        
        //
        // Task: setPHPConstant
        //
        // Purpose: Edit files based on build type.
        //
        setPHPConstant: {
            release1: {
                constant    : 'RELEASE',
                value       : true,
                file        : '<%= dirs.output%>/config/_config.php'
            },
            release2: {
                constant    : 'BUILDNUMBER',
                //value       : 'stage-<%= grunt.template.today("yyyy-mm-dd") %>',
                value       : '<%= grunt.template.today("yyyymmddHHMMss") %>',
                file        : '<%= dirs.output%>/config/_config.php'
            }
        },
        
		
		
		touch: {
			options: {
				time: Date.now() + 5000, // Set time to 5 seconds in the future 
				match: true,
			},
			target: ['<%= dirs.source%>/sass/base/*.scss', 
					 '<%= dirs.source%>/sass/framework/*.scss',
					 '<%= dirs.source%>/sass/modules/*.scss',
					 '<%= dirs.source%>/sass/*.scss'],
		},
		
        //
        // Task: clean
        //
        clean: {
            folder: '<%= dirs.output%>/'
            /*
            release: {
                folder: '<%= dirs.output%>/'
            }
            */
        },

        //
        // Task: sass
        //
        sass: {
            release: {
                files: [{
                    expand: true,
                    cwd: '<%= dirs.source%>/sass', 
                    src: ['*.scss'],
                    dest: '<%= dirs.source%>/css',
                    ext: '.css'
                }]
            }
        },
        
        //
        // Task: concat
        //
        // Purpose: Concatenate the sites CSS files into a single file.
        //
        concat: {
            all: {
              src: [
                //
                // Ordering is very important!
                //
                '<%= dirs.source%>/css/reset.css', 
                '<%= dirs.source%>/css/bootstrap.min.css', 
                '<%= dirs.source%>/css/font-awesome.min.css', 
                '<%= dirs.source%>/css/typography.css', 
                '<%= dirs.source%>/css/main.css', 
                '<%= dirs.source%>/css/custom.css', 
                '<%= dirs.source%>/css/portfolio-styles.css'
              ],
              dest: '<%= dirs.source%>/css/all.css',
            }
        },
        
        //
        // Task: cssmin
        //
        // Purpose: Minify the CSS
        //
        cssmin: {  
            release: {  
                options: {  
                    banner: '/* My minified css file */'  
                },  
                files: {  
                        '<%= dirs.source%>/css/all.min.css': ['<%= dirs.source%>/css/all.css']
                }  
            }  
        },  

        /*
        uglify: {  
            options: {  
                compress: true  
            },  
            applib: {  
                src: [  
                'js/googleanalytics.js',
                'js/scrolling-nav.js',  
                'js/settings.js',
                'js/custom.js',  
                'js/backtotop.js',
                'js/greyscaleimages.js',
                'js/aboutboxmodal.js'
                ],  
                dest: 'js/kohd.min.js'  
            }  
        },
        */
        
        //imagemin: {
        //    dynamic: {
        //        files: [{
        //            expand: true,
        //            cwd: 'img/',
        //            src: ['**/*.{png,jpg,gif}'],
        //            dest: 'img/build/'
        //        }]
        //    }
        //},

//			main: {
//				src: ['**/*',  '!**/psd/**'],
//				expand: true,
//				cwd: '',
//				dest: 'deploy',
//			}
//		}


        //
        // Task: copy
        //
        // Purpose:
        //
        copy: {
            
            // Use this whenever node_modules have been updated with new versions
            // Copy third-party css and js library files from 
            // node_modules folder to source development directories
            updatemodules: {
                files: [
                
                    // CSS Files
                
                    { expand: true, cwd: '<%= dirs.nodemodules%>', src: 'bootstrap/dist/css/bootstrap.min.css', dest: '<%= dirs.source%>/css/', flatten: true},
                    
                    // Javascript Files
                    
                    { expand: true, cwd: '<%= dirs.nodemodules%>', 	  src: 'jquery/jquery.min.js', 				    dest: '<%= dirs.source%>/js/libs/', flatten: true},
                    { expand: true, cwd: '<%= dirs.nodemodules%>', 	  src: 'jquery/jquery.min.map', 				dest: '<%= dirs.source%>/js/libs/', flatten: true},
                    { expand: true, cwd: '<%= dirs.nodemodules%>', 	  src: 'jquery.easing/jquery.easing.min.js', 	dest: '<%= dirs.source%>/js/libs/', flatten: true},
                    { expand: true, cwd: '<%= dirs.nodemodules%>', 	  src: 'bootstrap/dist/js/bootstrap.min.js', 	dest: '<%= dirs.source%>/js/libs/', flatten: true},
                ]
            },

            
            // Use this whenever were building a release version of the site
            // Copy all relevant development files into the final distribution folder
            release: {
                files: [
                    // Root Folder
                    { expand: true, cwd: '<%= dirs.source%>', src: '*.php', dest: '<%= dirs.output%>/' },

                    // Config Folder
                    { expand: true, cwd: '<%= dirs.source%>', src: 'config/*.*', dest: '<%= dirs.output%>/' },

                    // Utility Folder
                    { expand: true, cwd: '<%= dirs.source%>', src: 'utility/*.*', dest: '<%= dirs.output%>/' },
                    
                    // CSS Folder
                    { expand: true, cwd: '<%= dirs.source%>', src: 'css/all.min.css', dest: '<%= dirs.output%>/' },
                    { expand: true, cwd: '<%= dirs.source%>', src: 'css/intro.custom.css', dest: '<%= dirs.output%>/' },
                    { expand: true, cwd: '<%= dirs.source%>', src: 'css/intro.default.css', dest: '<%= dirs.output%>/' },

                    //
                    // JS Folder - Third-party javascripts go into 'libs' folder, others into 'js' folder
                    //
                    { expand: true, cwd: '<%= dirs.source%>', 	  src: 'js/libs/jquery.min.js', 		dest: '<%= dirs.output%>'},
                    { expand: true, cwd: '<%= dirs.source%>', 	  src: 'js/libs/jquery.min.map', 		dest: '<%= dirs.output%>'},
                    { expand: true, cwd: '<%= dirs.source%>', 	  src: 'js/libs/jquery.easing.min.js', 	dest: '<%= dirs.output%>'},
                    { expand: true, cwd: '<%= dirs.source%>', 	  src: 'js/libs/jquery.cookie.js', 	    dest: '<%= dirs.output%>'},
                    { expand: true, cwd: '<%= dirs.source%>', 	  src: 'js/libs/bootstrap.min.js', 		dest: '<%= dirs.output%>'},
                    { expand: true, cwd: '<%= dirs.source%>', 	  src: 'js/libs/modernizr.js', 			dest: '<%= dirs.output%>/' },
                    //{ expand: true, cwd: '<%= dirs.source%>', src: 'js/modernizr-2.6.2-respond-1.1.0.min.js', dest: '<%= dirs.output%>/' },
                    /*{ src: 'js/koh.min.js', dest: '<%= dirs.output%>/' },*/

                    
                    { expand: true, cwd: '<%= dirs.source%>', src: 'js/googleanalytics.js', dest: '<%= dirs.output%>/' },
                    { expand: true, cwd: '<%= dirs.source%>', src: 'js/scrolling-nav.js', dest: '<%= dirs.output%>/' },
                    { expand: true, cwd: '<%= dirs.source%>', src: 'js/settings.js', dest: '<%= dirs.output%>/' },
                    { expand: true, cwd: '<%= dirs.source%>', src: 'js/custom.js', dest: '<%= dirs.output%>/' },
                    { expand: true, cwd: '<%= dirs.source%>', src: 'js/backtotop.js', dest: '<%= dirs.output%>/' },
                    { expand: true, cwd: '<%= dirs.source%>', src: 'js/greyscaleimages.js', dest: '<%= dirs.output%>/' },
                    { expand: true, cwd: '<%= dirs.source%>', src: 'js/aboutboxmodal.js', dest: '<%= dirs.output%>/' },
                    { expand: true, cwd: '<%= dirs.source%>', src: 'js/touch.js', dest: '<%= dirs.output%>/' },

                    // Fonts Folder
                    { expand: true, cwd: '<%= dirs.source%>', src: 'fonts/*', dest: '<%= dirs.output%>/' },

                    // Img Folder(s)
                    { expand: true, cwd: '<%= dirs.source%>', src: 'img/*.png', dest: '<%= dirs.output%>/' },
                    { expand: true, cwd: '<%= dirs.source%>', src: 'img/*.gif', dest: '<%= dirs.output%>/' },
                    { expand: true, cwd: '<%= dirs.source%>', src: 'img/*.jpg', dest: '<%= dirs.output%>/' },
                    { expand: true, cwd: '<%= dirs.source%>', src: 'img/portfolio/*.jpg', dest: '<%= dirs.output%>/' },
                    { expand: true, cwd: '<%= dirs.source%>', src: 'img/slides/*.jpg', dest: '<%= dirs.output%>/' },
                    { expand: true, cwd: '<%= dirs.source%>', src: 'img/team/*', dest: '<%= dirs.output%>/' },
                    { expand: true, cwd: '<%= dirs.source%>', src: 'img/technologies/*.png', dest: '<%= dirs.output%>/' },
                    
                    // PHPMailer Folder and subfolders
                    { expand: true, cwd: '<%= dirs.source%>', src: 'PHPMailer/*', dest: '<%= dirs.output%>/' },

                    // _blog folder and subfolders
                    { expand: true, cwd: '<%= dirs.source%>', src: '_blog/**', dest: '<%= dirs.output%>/' },
                ]
            }, 

            // Use this whenever were building a deployment version of the site
            // It's basically the same as 'release' but DOES NOT copy the _blog folder.
            // We don't want to upload the '_blog' folder to the hosting server.
            deploy: {
                files: [
                    // Root Folder
                    { expand: true, cwd: '<%= dirs.source%>', src: '*.php', dest: '<%= dirs.output%>/' },

                    // Config Folder
                    { expand: true, cwd: '<%= dirs.source%>', src: 'config/*.*', dest: '<%= dirs.output%>/' },

                    // Utility Folder
                    { expand: true, cwd: '<%= dirs.source%>', src: 'utility/*.*', dest: '<%= dirs.output%>/' },
                    
                    // CSS Folder
                    { expand: true, cwd: '<%= dirs.source%>', src: 'css/all.min.css', dest: '<%= dirs.output%>/' },
                    { expand: true, cwd: '<%= dirs.source%>', src: 'css/intro.custom.css', dest: '<%= dirs.output%>/' },
                    { expand: true, cwd: '<%= dirs.source%>', src: 'css/intro.default.css', dest: '<%= dirs.output%>/' },

                    //
                    // JS Folder - Third-party javascripts go into 'libs' folder, others into 'js' folder
                    //
                    { expand: true, cwd: '<%= dirs.source%>', 	  src: 'js/libs/jquery.min.js', 		dest: '<%= dirs.output%>'},
                    { expand: true, cwd: '<%= dirs.source%>', 	  src: 'js/libs/jquery.min.map', 		dest: '<%= dirs.output%>'},
                    { expand: true, cwd: '<%= dirs.source%>', 	  src: 'js/libs/jquery.easing.min.js', 	dest: '<%= dirs.output%>'},
                    { expand: true, cwd: '<%= dirs.source%>', 	  src: 'js/libs/jquery.cookie.js', 		dest: '<%= dirs.output%>' },
                    { expand: true, cwd: '<%= dirs.source%>', 	  src: 'js/libs/bootstrap.min.js', 		dest: '<%= dirs.output%>'},
                    { expand: true, cwd: '<%= dirs.source%>', 	  src: 'js/libs/modernizr.js', 			dest: '<%= dirs.output%>' },
                    //{ expand: true, cwd: '<%= dirs.source%>', src: 'js/modernizr-2.6s2-respond-1.1.0.min.js', dest: '<%= dirs.output%>/' },
                    /*{ src: 'js/koh.min.js', dest: '<%= dirs.output%>/' },*/

                    
                    { expand: true, cwd: '<%= dirs.source%>', src: 'js/googleanalytics.js', dest: '<%= dirs.output%>/' },
                    { expand: true, cwd: '<%= dirs.source%>', src: 'js/scrolling-nav.js', dest: '<%= dirs.output%>/' },
                    { expand: true, cwd: '<%= dirs.source%>', src: 'js/settings.js', dest: '<%= dirs.output%>/' },
                    { expand: true, cwd: '<%= dirs.source%>', src: 'js/custom.js', dest: '<%= dirs.output%>/' },
                    { expand: true, cwd: '<%= dirs.source%>', src: 'js/backtotop.js', dest: '<%= dirs.output%>/' },
                    { expand: true, cwd: '<%= dirs.source%>', src: 'js/greyscaleimages.js', dest: '<%= dirs.output%>/' },
                    { expand: true, cwd: '<%= dirs.source%>', src: 'js/aboutboxmodal.js', dest: '<%= dirs.output%>/' },
                    { expand: true, cwd: '<%= dirs.source%>', src: 'js/touch.js', dest: '<%= dirs.output%>/' },

                    // Fonts Folder
                    { expand: true, cwd: '<%= dirs.source%>', src: 'fonts/*', dest: '<%= dirs.output%>/' },

                    // Img Folder(s)
                    { expand: true, cwd: '<%= dirs.source%>', src: 'img/*.png', dest: '<%= dirs.output%>/' },
                    { expand: true, cwd: '<%= dirs.source%>', src: 'img/*.gif', dest: '<%= dirs.output%>/' },
                    { expand: true, cwd: '<%= dirs.source%>', src: 'img/*.jpg', dest: '<%= dirs.output%>/' },
                    { expand: true, cwd: '<%= dirs.source%>', src: 'img/portfolio/*.jpg', dest: '<%= dirs.output%>/' },
                    { expand: true, cwd: '<%= dirs.source%>', src: 'img/slides/*.jpg', dest: '<%= dirs.output%>/' },
                    { expand: true, cwd: '<%= dirs.source%>', src: 'img/team/*', dest: '<%= dirs.output%>/' },
                    { expand: true, cwd: '<%= dirs.source%>', src: 'img/technologies/*.png', dest: '<%= dirs.output%>/' },
                    
                    // PHPMailer Folder and subfolders
                    { expand: true, cwd: '<%= dirs.source%>', src: 'PHPMailer/*', dest: '<%= dirs.output%>/' },

                    // _blog folder and subfolders
                    //{ expand: true, cwd: '<%= dirs.source%>', src: '_blog/**', dest: '<%= dirs.output%>/' },
                ]
            }
        },
        

        //
        // Task: ftpush
        //
        ftpush: {
            deploy: {
                simple: true,
                auth: {
                    host: 'server118.web-hosting.com',
                    port: 21,
                    authKey: 'key'
                },
                src: '<%= dirs.output%>',
                dest: '/public_html/kohd.co',
                keep: ['/art', '/cgi-bin', '/blog', '/_blog']
            }
        },
        
        //
        // Task: watch
        //
        watch: {
            development: {
                files: [
                        '<%= dirs.source%>/sass/*.scss', 
                        '<%= dirs.source%>/sass/base/*.scss', 
                        '<%= dirs.source%>/sass/framework/*.scss', 
                        '<%= dirs.source%>/sass/modules/*.scss'],
				
                //tasks: ['touch', 'sass:release', 'concat:all', 'cssmin:release'],	
				tasks: ['touch', 'sass:release'],
				
                options: {
                    spawn: false,
                },
            },
        }
    });  
    
    // Default and release versions are the same
    grunt.registerTask('default', ['clean', 'sass:release', 'concat:all', 'cssmin:release', 'copy:release', 'setPHPConstant:release1', 'setPHPConstant:release2']);
    grunt.registerTask('release', ['clean', 'sass:release', 'concat:all', 'cssmin:release', 'copy:release', 'setPHPConstant:release1', 'setPHPConstant:release2']);
    
    // Variations
    grunt.registerTask('updatemodules', ['copy:updatemodules']);
    
    // Push to ftp server
    grunt.registerTask('deploy', ['clean', 'sass:release', 'concat:all', 'cssmin:release', 'copy:deploy', 'setPHPConstant:release1', 'setPHPConstant:release2', 'ftpush:deploy']);
};


