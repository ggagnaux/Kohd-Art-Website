module.exports = function (grunt) {  
    require("matchdep").filterDev("grunt-*").forEach(grunt.loadNpmTasks);  
    
    // Project configuration.  
    grunt.initConfig(
    {  
        // Output path for all final deployment assets
        //outputPath: 'dist/',
        outputPath: '../dist/',

        pkg: grunt.file.readJSON('package.json'),  

        // Clear the Deploy folder
        clean: {
            folder: '<%= outputPath%>',
        },

        
        touch: ['config/_builddate.txt'],

        // Minify the CSS
        cssmin: {  
            sitecss: {  
                options: {  
                    banner: '/* My minified css file */'  
                },  
                files: {  
                        'css/kohd.min.css': [
                        'css/reset.css',  
                        'css/custom.css',  
                        'css/main.css',
                        'css/portfolio-styles.css',
                        'css/typography.css']
                }  
            }  
        },  


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
        
        
        imagemin: {
            dynamic: {
                files: [{
                    expand: true,
                    cwd: 'img/',
                    src: ['**/*.{png,jpg,gif}'],
                    dest: 'img/build/'
                }]
            }
        },

//			main: {
//				src: ['**/*',  '!**/psd/**'],
//				expand: true,
//				cwd: '',
//				dest: 'deploy',
//			}
//		}

/*
        phpmin: {
            options: {
                singleline: true,
                multiline: true,
                tabs: true,
                newline: true
            },
            your_target: {
                'dest': ['src/testing', 'src/123'], 
            },
        },
*/

        // Copy files to final output folder
        copy: {
            html: {
                files: [
                    // Root Folder
                    { src: 'index.php', dest: '<%= outputPath%>' },
                    { src: 'services.php', dest: '<%= outputPath%>' },
                    { src: 'portfolio.php', dest: '<%= outputPath%>' },
                    { src: 'portfolio-item.php', dest: '<%= outputPath%>' },
                    { src: 'about-us.php', dest: '<%= outputPath%>' },
                    { src: 'contact-us.php', dest: '<%= outputPath%>' },
                    
                    // Config Folder
                    { src: 'config/_config.php', dest: '<%= outputPath%>' },
                    { src: 'config/_builddate.txt', dest: '<%= outputPath%>' },

                    // Utility Folder
                    { src: 'utility/_carouselitem.php', dest: '<%= outputPath%>' },
                    { src: 'utility/_kohd.php', dest: '<%= outputPath%>' },
                    { src: 'utility/_kohdutilities.php', dest: '<%= outputPath%>' },
                    { src: 'utility/_menuitem.php', dest: '<%= outputPath%>' },
                    { src: 'utility/_projectitem.php', dest: '<%= outputPath%>' },
                    
                    // CSS Folder
                    { src: 'css/reset.css', dest: '<%= outputPath%>' },
                    { src: 'css/kohd.min.css', dest: '<%= outputPath%>' },
                    { src: 'css/custom.css', dest: '<%= outputPath%>' },
                    { src: 'css/main.css', dest: '<%= outputPath%>' },
                    { src: 'css/font-awesome.min.css', dest: '<%= outputPath%>' },
                    { src: 'css/bootstrap.css', dest: '<%= outputPath%>' },
                    { src: 'css/bootstrap.min.css', dest: '<%= outputPath%>' },
                    { src: 'css/icomoon-social.css', dest: '<%= outputPath%>' },
                    { src: 'css/portfolio-styles.css', dest: '<%= outputPath%>' },
                    { src: 'css/typography.css', dest: '<%= outputPath%>' },

                    // JS Folder
                    { src: 'node_modules/jquery/jquery.min.js', dest: '<%= outputPath%>' },
                    { src: 'node_modules/jquery.easing/jquery.easing.min.js', dest: '<%= outputPath%>' },
                    { src: 'node_modules/bootstrap/dist/js/bootstrap.min.js', dest: '<%= outputPath%>' },

                    { src: 'js/modernizr-2.6.2-respond-1.1.0.min.js', dest: '<%= outputPath%>' },
                    { src: 'js/modernizr.js', dest: '<%= outputPath%>' },
                    /*{ src: 'js/koh.min.js', dest: '<%= outputPath%>' },*/

                    
                    { src: 'js/googleanalytics.js', dest: '<%= outputPath%>' },
                    { src: 'js/scrolling-nav.js', dest: '<%= outputPath%>' },
                    { src: 'js/settings.js', dest: '<%= outputPath%>' },
                    { src: 'js/custom.js', dest: '<%= outputPath%>' },
                    { src: 'js/backtotop.js', dest: '<%= outputPath%>' },
                    { src: 'js/greyscaleimages.js', dest: '<%= outputPath%>' },
                    { src: 'js/aboutboxmodal.js', dest: '<%= outputPath%>' },
                    { src: 'js/touch.js', dest: '<%= outputPath%>' },

                    // Fonts Folder
                    { src: 'fonts/*', dest: '<%= outputPath%>' },

                    // Img Folder(s)
                    { src: 'img/*.png', dest: '<%= outputPath%>' },
                    { src: 'img/*.gif', dest: '<%= outputPath%>' },
                    { src: 'img/*.jpg', dest: '<%= outputPath%>' },
                    { src: 'img/portfolio/*.jpg', dest: '<%= outputPath%>' },
                    { src: 'img/slides/*.jpg', dest: '<%= outputPath%>' },
                    { src: 'img/team/*', dest: '<%= outputPath%>' },
                    { src: 'img/technologies/*.png', dest: '<%= outputPath%>' },
                    
                    // PHPMailer Folder and subfolders
                    { src: 'PHPMailer/*', dest: '<%= outputPath%>' },
                    
                    
                ]
            }
        }
    });  
    // Default task.  
    //grunt.registerTask('default', ['uglify', 'cssmin', 'clean', 'copy']);  
    grunt.registerTask('default', ['clean', 'touch', 'cssmin', 'copy']);
};


