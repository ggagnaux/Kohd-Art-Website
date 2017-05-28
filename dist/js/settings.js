/*
    File: settings.js
    Description: Configurable settings for Kohd & Art website
    Author: Kohd and Art (G. Gagnaux)
    Date: July 6, 2016
    Revision: 1
*/


var g_version = "V1.0.0";
var g_companyname = "Kohd &amp; Art";
var g_lastupdated = "July 6, 2016";
var g_address = "Suite 307 - 1675 West 12th Ave., Vancouver, BC, Canada V6J2E3";
var g_phone = "604-877-7757";
var g_email = "hello@kohd.co";
var g_copyright = "Copyright &copy; 2016 - Kohd &amp; Art";
var g_aboutcompany = g_companyname + " is a full service software development and creative services company.  Core competencies include Microsoft .NET development, SQL Server development, product and portraiture photography and graphic design.";



var g_socialMediaLinks = [
    {
        "name": "Facebook",
        "icon": "img/icons/facebook.png",
        "url": "https://www.facebook.com/kohdandart"
    },
    {
        "name": "Twitter",
        "icon": "img/icons/twitter.png",
        "url": "https://twitter.com/ggagnaux"
    },
    {
        "name": "LinkedIn",
        "icon": "img/icons/linkedin.png",
        "url": "https://www.linkedin.com/in/ggagnaux"
    },
    {
        "name": "Instagram",
        "icon": "img/icons/instagram.png",
        "url": "https://www.instagram.com/ggagnaux"
    },
    {
        "name": "Behance",
        "icon": "img/icons/behance.png",
        "url": "https://www.behance.net/vgfoto"
    }
];


var g_CarouselDelay = 2000;
var g_SliderSettings = [
    {
        "heading" : "Welcome to Kohd &amp; Art",
        "content" : "Software Development &amp; Creative Services",
        "displaybutton" : "true",
        "buttontext" : "Learn More...",
        "buttonlink" : "#",
        "backgroundimage": "img/slides/1.jpg"
    },
    {
        "heading": "Software Development",
        "content": "Our developers have over twenty years experience developing desktop and web applications!",
        "displaybutton": "true",
        "buttontext": "Learn More...",
        "buttonlink": "#",
        "backgroundimage": "img/slides/2.jpg"
    },
    {
        "heading": "Database Design and Development",
        "content": "We are also Microsoft Certified Professionals for SQL Server!",
        "displaybutton": "true",
        "buttontext": "Learn More...",
        "buttonlink": "#",
        "backgroundimage": "img/slides/3.jpg"
    },
    {
        "heading": "Photography",
        "content": "We have over five years of professional photographic experience, specializing in portraiture and product photography!",
        "displaybutton": "true",
        "buttontext": "Learn More...",
        "buttonlink": "#",
        "backgroundimage": "img/slides/4.jpg"
    },
    {
        "heading": "Retouching/Post-Production",
        "content": "In addition to our photographic experience, we are also adept a retouching and other post-production!",
        "displaybutton": "true",
        "buttontext": "Learn More...",
        "buttonlink": "#",
        "backgroundimage": "img/slides/5.jpg"
    },
    {
        "heading": "Illustrative work",
        "content": "Sometimes we have to create images out of thin air!",
        "displaybutton": "true",
        "buttontext": "Learn More...",
        "buttonlink": "#",
        "backgroundimage": "img/slides/6.jpg"
    },
    {
        "heading": "Well, what are you waiting for?",
        "content": "Contact us today for a quote on your next project!",
        "displaybutton": "true",
        "buttontext": "Contact Us!",
        "buttonlink": "contact-us.php#contactform",
        "backgroundimage": "img/slides/7.jpg"
    }
];




var g_menuItems = [
    {
        "name": "index",
        "type": "pagelink",
        "label": "Home",
        "url": "index.php"
    },
    {
        "name": "services",
        "type": "pagelink",
        "label": "Services",
        "url": "services.php"
    },
    {
        "name": "portfolio",
        "type": "pagelink",
        "label": "Portfolio",
        "url": "portfolio.php"
    },
    {
        "name": "about-us",
        "type": "pagelink",
        "label": "About",
        "url": "about-us.php"
    },
    {
        "name": "blog",
        "type": "pagelink",
        "label": "Blog",
        "url": "blog.php"
    },
    {
        "name": "links",
        "type": "submenu",
        "label": "Links",
        "items": [
            {
                "type": "pagelink",
                "label": "Vincent Gagnaux Photography",
                "url": "http://www.vgfoto.com"
            }
            /*,
            {
                "type": "pagelink",
                "label": "Vincent Gagnaux Photography",
                "url": "http://www.vgfoto.com"
            }*/
            ]
    },
    {
        "name": "contact-us",
        "type": "pagelink",
        "label": "Contact",
        "url": "contact-us.php"
    }];







