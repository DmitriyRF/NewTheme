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
        Author: DmitriyRF
        Description: The 2017 inctanse theme for WordPress takes us back to <br> the blog, featuring a full range of post formats, each displayed beautifully in their own unique way.
        Version: 1.0
        License:   Apache License version 2.0, January 2004
        License URI:  http://www.apache.org/licenses/
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
<h3>Creating Headers and Footers</h3>
<p>Separate header and footer in different files, where some page start in header.php  and some page end in footer.php</p>
<h3>Creating Widget Areas</h3>
<p>We register and show sidebar in site. Important note that id of sidebar must lowercase and do not step in list of forbidden or reserved IDs</p>
<h3>Formatting the sidebars</h3>
<p>Add some classes and ids before and after every widgets and inner title</p>
<h3>Formatting the Search Form</h3>
<p>Use searchform.php to format the searchform </p>
<h3>Loop and Template tags inside the Loop</h3>
<p>The Loop is PHP code used by WordPress to display posts. Also for add thumbnail image i add theme support — ( 'post-thumbnails' ) For template i add post section in index.php, check have_posts() and start loop. In post loop i add thumbnail, time and date, post text for it i use Template Tags </p>
<h3>Pagination</h3>
<p>WordPress offers built-in functionality for navigating through posts. Theme developers can use simple links or numbered pagination to indicate the previous page or the next page in a given sequence.</p>
<h3>Single Posts</h3>
<p>I add new php template for single post content, also go throught theme development advice. single.php — the single post template. Used when a single post is queried. I copy and modify code from index.php</p>
<h3>Comments Template</h3>
<p>How show, leave and to comment comments in single post page by comments.php template</p>
<h3>Page Template</h3>
<p>page.php — the page template. Used when an individual Page is queried. Display page title, page content, comment list, comment form. Metadata such as tags, categories, date and author should NOT be displayed. Display an "Edit" link. I copy and modify code from single.php</p>
<h3>404 Template</h3>
<p>The 404 Not Found template. Used when WordPress cannot find a post or page that matches the query. I copy and modify code from page.php</p>
<h3>Category Template</h3>
<p>category.php — the category template. Used when a category is queried. I copy and modify code from index.php, I use same code, because i will look same, but it help me in future customization.</p>
<h3>Search Template</h3>
<p>search.php - search results template. Used when a search is performed. The search results page shows the search term which generated the results. Also a good practice to include the search form again on the results page.</p>
<h3>Custom Templates</h3>
<p>The custom templates uses in page attribute and for each page necessary set Template. In this instance I create full-width-page.php add comment in top of file as "Template Name: Full Width Page". Wordpress automaticly define this template</p>
<h3>Finishing Up</h3>
<hr>
<h2>Customize theme</h2>
<p>I use WordPress APIs for theme customizing</p>
<h3>Creating Default Settings Upon Activation</h3>
<p>When user activate theme the options add in wordpress database. I added activate.php file, and included it by function.php</p>
<h3>Adding a menu page to WordPress Admin</h3>
<p>Add admin folder and two files below, menus.php and options-page.php. I use function is included page in the menu. Also I determine function for inside content in options-page.php</p>
<h3>Enqueueing Styles  Scripts in the Admin</h3>
<p>I get add init.php whether add action for admin enqueue list by inlclude enqueue.php file. Also i set restrictions for enqueue css and js connections.</p>
<h3>Adding a submenu page to admin page</h3>
<p>Just create first web subpage for admin page which coincides with it as well</p>


 
