# NewTheme
Create new wordpress theme from scratch

<h1>Theme Basics</h1>
<h3>Theme File Headers</h3>
The new wordress theme have to minimum three files [see Codex](https://codex.wordpress.org/Theme_Development)
<ul>
    <li>Theme stylesheet called style.css, where have this code</li>
    <li>Picture screenshot.png, recommended image size is 1200px wide by 900px tall. </li>
    <li>Main one template file, called index.php </li>
</ul>
<p>style.css</p> 
```css
        /*
        Theme Name: New Theme
        Theme URI: http://
        Author: DmitriyRF
        Author URI: http://
        Description: The 2017 inctanse theme for WordPress takes us back to the blog, 
        featuring a full range of post formats, each displayed beautifully in their own unique way.
        Version: 1.0
        License:   Apache License version 2.0, January 2004
        License URI:  http://www.apache.org/licenses/
        Tags: black, brown, orange, tan
        Text Domain: newtheme
        */
```
<p>At first need to install Wordpress on your server or localserver by [OpenServer](https://ospanel.io) or [WampServer](http://www.wampserver.com). After go to Dashboard Permalink and set the structure the "Post name" </p>
<hr>
<h3>Functions file</h3>
<p>File will use for <br>
Enqueue theme stylesheets and scripts. <br> 
Enable Theme Features such as Sidebars, Navigation Menus, Post Thumbnails, Post Formats, Custom Headers, Custom Backgrounds and others. <br>
Define functions used in several template files of your theme. <br>
Set up an options menu, giving site owners options for colors, styles, and other aspects of your theme.</p>
<h3>Action Hooks</h3>
<p>Hooks are provided by WordPress to allow your plugin to 'hook into' the rest of WordPress; that is, to call functions in your plugin at specific times, and thereby set your plugin in motion.</p>
<h3>Adding Styles through Hooks</h3>
<p>The way to register a CSS style files</p>
<h3>Adding Scripts through Hooks</h3>
<p>Registers a script in footer of pages. And jQuery include before</p>
<h3>Adding Dummy Content</h3>
<p>Use FakerPress plugin for template of content</p>
<h3>Adding Menu Support and displaying Menus</h3> 
<p>Registers theme support for menu. Registers a navigation menu location for a theme.</p>
<h3>Display menu in theme</h3>
<p>Displays a navigation menu and set menu arguments as parametrs</p>