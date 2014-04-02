<?php
$all_pages = get_pages();
$page_options = array();
$page_list = array();
$page_list_footer = array();
$checked_options = array();

foreach ($all_pages as $page){
    $page_list[] = "acera_nav_header_".$page->ID;
    $page_list_footer[] = "acera_nav_footer_".$page->ID;
    $page_title = get_page($page->ID);
    $page_options[] = $page_title->post_title;
    $checked_options[] = "not";
}



$options = array(    
    
    /*
     * 
     * General Settings Section
     * 
     */
	
    array(
        "type" => "section",
        "icon" => "acera-icon-home",
        "title" => "General Settings",
        "id" => "general",
        "expanded" => "true"
    ),
    
    
    
    
    
    
    array(
        "section" => "general",
        "type" => "heading",
        "title" => "Visual (logo, favicon)",
        "id" => "general-visual"
    ),
    
    array(
        "under_section" => "general-visual",
        "type" => "image",
        "placeholder" => "http://example.com/logo.png",
        "name" => "Logo",
        "id" => "acera_logo",
        "desc" => "Paste the URL to your logo, or upload it here.",
        "default" => ""),
    
    array(
        "under_section" => "general-visual",
        "type" => "image",
        "placeholder" => "http://example.com/favicon.png",
        "name" => "Favicon",
        "id" => "acera_favicon",
        "desc" => "Paste the URL to your favicon, or upload it here (resolution of 32x32 or 16x16)",
        "default" => ""),
    
    array(
        "under_section" => "general-visual",
        "type" => "text",
        "name" => "Title separator",
        "id" => "acera_title_sep",
        "desc" => "Type a separator to be used in titles (eg. '-' => Home - Page Name )",
        "default" => "|"),
    
    array(
        "under_section" => "general-visual",
	"type" => "checkbox",
	"name" => "<strong>Enable Custom Navigation</strong>",
	"id" => array( "acera_custom_menu" ),				
	"options" => array("Enable"),
        "desc" => "Enables custom menu for mobile theme.",
	"default" => array("not")),
    
    array(
        "type" => "toggle_div_start",
        "display_checkbox_id" => "acera_custom_menu",
        "under_section" => "general-visual",
    ), 
    
    
    array(
        "under_section" => "general-visual",
	"type" => "checkbox",
	"name" => "Custom header navigation",
	"id" => $page_list,			
	"options" => $page_options,
        "desc" => "Choose which pages you <strong>don't</strong> want to show in the top navigation.",
	"default" => $checked_options),
    
    
    
    array(
        "under_section" => "general-visual",
	"type" => "checkbox",
	"name" => "Custom footer navigation",
	"id" => $page_list_footer,			
	"options" => $page_options,
        "desc" => "Choose which pages you <strong>don't</strong> want to show in the bottom navigation.",
	"default" => $checked_options),
    
    
    array(
        "type" => "toggle_div_end",
        "under_section" => "general-visual",
    ), 
    
    
    array(
        "section" => "general",
        "type" => "heading",
        "title" => "Code integration",
        "id" => "general-general"
    ),
    
    array(
        "under_section" => "general-general",
	"type" => "checkbox",
	"name" => "<strong>Allow these integrations</strong>",
	"id" => array( "acera_code_allow_google", "acera_code_allow_css", "acera_code_allow_jquery", "acera_code_allow_childcss"),				
	"options" => array("Google analytics", "Custom css", "Custom jQuery", "Child Stylesheet"),
        "desc" => "Choose which code integrations (below) you want to use.",
	"default" => array("checked", "not", "not", "not")),
    
    array(
        "under_section" => "general-general",
        "type" => "textarea",
        "name" => "Google analytics",
        "display_checkbox_id" => "acera_code_allow_google",
        "placeholder" => "<script>... </script>",
        "id" => "acera_analytics",
        "desc" => "Paste here your google analytics code.",),
    
    array(
        "under_section" => "general-general",
        "type" => "textarea",
        "name" => "Custom css",
        "display_checkbox_id" => "acera_code_allow_css",
        "placeholder" => "h1 { color: white; }",
        "id" => "acera_custom_css",
        "desc" => "Write here your custom css.",),
    
    array(
        "under_section" => "general-general",
        "type" => "textarea",
        "display_checkbox_id" => "acera_code_allow_jquery",
        "name" => "Custom jQuery Code",
        "placeholder" => "$('h1').hide();",
        "id" => "acera_custom_jquery",
        "desc" => "This code is executed after document is ready.",),
    
    array(
        "under_section" => "general-general",
        "type" => "text",
        "display_checkbox_id" => "acera_code_allow_childcss",
        "name" => "Child stylesheet",
        "id" => "acera_code_childcss",
        "desc" => "Enter the URL of a child stylesheet to display.",
        "placeholder" => "http://www.stylesheet.com/stylesheet.css"),
    
    
    
    
    
    array(
        "section" => "general",
        "type" => "heading",
        "title" => "Contact form",
        "id" => "general-contact"
    ),
    
    
    array(
        "under_section" => "general-contact",
	"type" => "checkbox",
	"name" => "Show contact form",
	"id" => array( "acera_contact_show" ),				
	"options" => array("Show contact form"),
        "desc" => "Choose whether you want to show contact form in contact page template.",
	"default" => array("checked")),
    
    array(
        "under_section" => "general-contact",
        "type" => "text",
        "name" => "Your e-mail",
        "display_checkbox_id" => "acera_contact_show",
        "default" => get_option('admin_email'),
        "id" => "acera_contact_mail",
        "desc" => "Enter your e-mail, for use in the contact form",),
    
    array(
        "under_section" => "general-contact",
        "type" => "text",
        "name" => "E-mail subject",
        "display_checkbox_id" => "acera_contact_show",
        "default" => "Breathe template - theme",
        "id" => "acera_contact_subject",
        "desc" => "Write a subject for received e-mails.",),
    
    array(
        "under_section" => "general-contact",
        "type" => "text",
        "name" => "E-mail name",
        "display_checkbox_id" => "acera_contact_show",
        "default" => "Your Name",
        "id" => "acera_contact_name",
        "desc" => "Enter your name. Will be used in the e-mail subject.",),
    
    array(
        "under_section" => "general-contact",
        "type" => "textarea",
        "display_checkbox_id" => "acera_contact_show",
        "name" => "E-mail message",
        "default" => "Your message was sent sucessfully",
        "id" => "acera_contact_message",
        "desc" => "Write a message that will be shown when user sends an e-mail.",),
    
    
    /*
     * 
     *  = General Settings Section
     * 
     */
    
    
    
    
    
    
    
    
    
    /*
     * 
     * Layout Settings Section
     * 
     */
	
    array(
        "type" => "section",
        "icon" => "acera-icon-window",
        "title" => "Layout Settings",
        "id" => "layout",
        "expanded" => "true"
    ),
    
    array(
        "section" => "layout",
        "type" => "heading",
        "title" => "404 page",
        "id" => "layout-404"
    ),
    
    array(
        "under_section" => "layout-404",
        "type" => "image",
        "placeholder" => "http://example.com/404_error_image.png",
        "name" => "404 featured image",
        "id" => "acera_404_image",
        "desc" => "Paste the URL to your image, or upload it here.",
        "default" => ""),    
    
    
    array(
        "under_section" => "layout-404",
        "type" => "text",
        "default" => "404 page",
        "name" => "404 page title",
        "id" => "acera_404_title",
        "desc" => "Enter 404 page title."),
    
    array(
        "under_section" => "layout-404",
        "type" => "textarea",
        "name" => "404 error message",
        "default" => "<p>Oops... Something went wrong.</p>",
        "id" => "acera_404",
        "desc" => "Enter a message to display on your 404 (page not found) error pages.",),
    
    
    
    
    
    
    
    array(
        "section" => "layout",
        "type" => "heading",
        "title" => "Home page",
        "id" => "layout-home"
    ),
    
    
    array(        
        "under_section" => "layout-home",
	"type" => "select",
	"name" => "<strong>Homepage layout</strong>",
	"id" => "acera_home_layout",
	"options" => array( "Home page", "Blog page", "Portfolio page"),					
	"desc" => "Choose which of these layouts you want to show on home page.",
	"default" => "Home page" ),  
    
    array(
        "under_section" => "layout-home",
        "type" => "text",
        "name" => "Latest news count",
        "id" => "acera_home_latestnews",
        "desc" => "Type how many latest news you want to show on home page (3 by default).",
        "placeholder" => "3"),
    
    array(
        "type" => "small_heading",
        "title" => "Featured Image Details",
        "under_section" => "layout-home",
    ), 
    
    array(
        "under_section" => "layout-home",
        "type" => "image",
        "placeholder" => "http://example.com/about_us_image.png",
        "name" => "Featured article image",
        "id" => "acera_home_featured_img",
        "desc" => "Paste the URL to your image, or upload it here.",
        "default" => ""),
    
    array(
        "under_section" => "layout-home",
        "type" => "text",
        "name" => "Featured article heading",
        "id" => "acera_home_heading",
        "desc" => "Type heading for homepage featured article (eg. ,,About us'')",
        "placeholder" => "About us"),
    
    array(
        "under_section" => "layout-home",
        "type" => "textarea",
        "name" => "Featured article content",
        "placeholder" => "<p>Just an example, <strong>you can also use html tags.</strong></p>",
        "id" => "acera_home_text",
        "desc" => "Type content for homepage featured article (you can use html tags)."),
    
    
    
    
    
    array(
        "section" => "layout",
        "type" => "heading",
        "title" => "Blog page",
        "id" => "layout-blog"
    ),
    
    array(
        "under_section" => "layout-blog",
        "type" => "text",
        "name" => "Posts per page",
        "id" => "acera_blog_perpage",
        "placeholder" => "5 by default",
        "desc" => "Type how many posts you want to show per page on blog page template.",),
    
    array(
        "under_section" => "layout-blog",
	"type" => "checkbox",
	"name" => "Hide comments",
	"id" => array( "acera_blog_comments" ),				
	"options" => array("Hide comments"),
        "desc" => "Choose whether you want to show hide comments in blog page template.",
	"default" => array("not")),
    
    array(
        "under_section" => "layout-blog",
	"type" => "checkbox_image",
	"show_labels" => "false",
        "name" => "Share buttons",
	"id" => array( "acera_share_twitter", 
            "acera_share_google", 
            "acera_share_fb"),
        
	"options" => array( "acera_share_twitter", 
            "acera_share_google", 
            "acera_share_fb"),
        
        "image_src" => array(get_stylesheet_directory_uri()."/acera-options/"."assets/share_twitter.png",
            get_stylesheet_directory_uri()."/acera-options/"."assets/share_google.png",
            get_stylesheet_directory_uri()."/acera-options/"."assets/share_fb.png",),
        
	"desc" => "Choose which share buttons you want to show at bottom of blog posts.",
        "image_size" => array( "96"),
	"default" => array("checked", "checked", "checked")),
   
    
    
    array(
        "title" => "Testimonials settings",
        "type" => "small_heading",
        "under_section" => "layout-blog",
    ),
    
    array(
        "under_section" => "layout-blog",
	"type" => "checkbox",
	"name" => "<strong>Show testimonials</strong>",
	"id" => array( "acera_blog_testim" ),				
	"options" => array("Show testimonials"),
        "desc" => "Choose whether you want to show testimonials in blog page template.",
	"default" => array("checked")),
    
    array(        
        "under_section" => "layout-blog",
	"show_labels" => "false",
        "display_checkbox_id" => "acera_blog_testim",
        "type" => "radio_image",
	"image_src" => array(get_stylesheet_directory_uri()."/acera-options/"."assets/test_2.png"
            , get_stylesheet_directory_uri()."/acera-options/"."assets/test_1.png"),
	"image_size" => array( "100"),
	"name" => "Testimonials position",
	"id" => "acera_blog_testim_pos",
	"options" => array( "testm_top", "testm_bottom"),					
	"desc" => "Choose displaying position for your testimonials.",
	"default" => "testm_top" ),
    
    
    array(
        "under_section" => "layout-blog",
        "type" => "textarea",
        "display_checkbox_id" => "acera_blog_testim",
        "name" => "Testimonials text",
        "id" => "acera_blog_testim_text",
        "desc" => "Write your testimonials here.",),
    
    
    
    
    
    
    array(
        "section" => "layout",
        "type" => "heading",
        "title" => "Portfolio page",
        "id" => "layout-portfolio"
    ),
    
    array(
        "under_section" => "layout-portfolio",
        "type" => "text",
        "name" => "Posts per page",
        "id" => "acera_portfolio_perpage",
        "placeholder" => "3 by default",
        "desc" => "Type how many posts you want to show per page on portfolio page template.",),
    
    array(
        "under_section" => "layout-portfolio",
	"type" => "checkbox",
	"name" => "Show date in portfolio posts",
	"id" => array( "acera_show_portfolio_date" ),				
	"options" => array("Show date"),
        "desc" => "Choose whether you want to show date in portfolio posts.",
	"default" => array("checked")),
    
    array(
        "under_section" => "layout-portfolio",
	"type" => "checkbox_image",
	"show_labels" => "false",
        "name" => "Share buttons",
	"id" => array( "acera_share_twitter_portfolio", 
            "acera_share_google_portfolio", 
            "acera_share_fb_portfolio"),
        
	"options" => array( "acera_share_twitter_portfolio", 
            "acera_share_google_portfolio", 
            "acera_share_fb_portfolio"),
        
        "image_src" => array(get_stylesheet_directory_uri()."/acera-options/"."assets/share_twitter.png",
            get_stylesheet_directory_uri()."/acera-options/"."assets/share_google.png",
            get_stylesheet_directory_uri()."/acera-options/"."assets/share_fb.png",),
        
	"desc" => "Choose which share buttons you want to show at bottom of portfolio posts.",
        "image_size" => array( "96"),
	"default" => array("checked", "checked", "checked")),
   
    
    array(
        "under_section" => "layout-portfolio",
	"type" => "checkbox",
	"name" => "Show back button in posts",
	"id" => array( "acera_show_portfolio_back" ),				
	"options" => array("Show back button"),
        "desc" => "Choose whether you want to show back button in portfolio posts.",
	"default" => array("checked")),
    
    
    
    
    
    
    
    
    
    
    
    
    array(
        "section" => "layout",
        "type" => "heading",
        "title" => "Footer",
        "id" => "layout-footer"
    ),
    
    array(
        "under_section" => "layout-footer",
	"type" => "checkbox",
	"name" => "Show footer widget area",
	"id" => array( "acera_show_footerwidgets" ),				
	"options" => array("Show widgets"),
        "desc" => "Choose whether you want to show footer widget area.",
	"default" => array("checked")),
    
    array(
        "under_section" => "layout-footer",
	"type" => "checkbox",
	"name" => "Show footer navigation",
	"id" => array( "acera_show_footernav" ),				
	"options" => array("Show navigation"),
        "desc" => "Choose whether you want to show footer navigation.",
	"default" => array("checked")),
    
    array(
        "under_section" => "layout-footer",
	"type" => "checkbox",
	"name" => "Show social media",
	"id" => array( "acera_show_social" ),				
	"options" => array("Show social media."),
        "desc" => "Choose whether you want to show social media icons in the footer.",
	"default" => array("checked")),
    
    array(
        "type" => "toggle_div_start",
        "display_checkbox_id" => "acera_show_social",
        "under_section" => "layout-footer",
    ), 
    
    array(
        "under_section" => "layout-footer",
	"type" => "checkbox_image",
	"show_labels" => "false",
        "name" => "Social media",
	"id" => array( "acera_social_devian", 
            "acera_social_dribble", 
            "acera_social_fb", 
            "acera_social_flickr", 
            "acera_social_google", 
            "acera_social_link", 
            "acera_social_twitter", 
            "acera_social_vimeo", 
            "acera_social_yahoo", 
            "acera_social_youtube"),
        
	"options" => array( "acera_social_devian", 
            "acera_social_dribble", 
            "acera_social_fb", 
            "acera_social_flickr", 
            "acera_social_google", 
            "acera_social_link", 
            "acera_social_twitter", 
            "acera_social_vimeo", 
            "acera_social_yahoo", 
            "acera_social_youtube"),
        
        "image_src" => array(get_stylesheet_directory_uri()."/acera-options/"."assets"."/social_devian.png",
            get_stylesheet_directory_uri()."/acera-options/"."assets"."/social_dribble.png",
            get_stylesheet_directory_uri()."/acera-options/"."assets"."/social_fb.png",
            get_stylesheet_directory_uri()."/acera-options/"."assets"."/social_flickr.png",
            get_stylesheet_directory_uri()."/acera-options/"."assets"."/social_google.png",
            get_stylesheet_directory_uri()."/acera-options/"."assets"."/social_link.png",
            get_stylesheet_directory_uri()."/acera-options/"."assets"."/social_twitter.png",
            get_stylesheet_directory_uri()."/acera-options/"."assets"."/social_vimeo.png",
            get_stylesheet_directory_uri()."/acera-options/"."assets"."/social_yahoo.png",
            get_stylesheet_directory_uri()."/acera-options/"."assets"."/social_youtube.png"),
        
	"desc" => "Choose which social icons you want to display in footer.",
        "image_size" => array( "65"),
	"default" => array("not", "not", "checked", "not", "checked", "not", "checked", "not", "not", "checked")),
   
    
    array(
        "type" => "small_heading",
        "title" => "Social media links",
        "under_section" => "layout-footer",
    ), 
    
    array(
        "under_section" => "layout-footer",
        "type" => "text",
        "name" => "Devian art",
        "display_checkbox_id" => "acera_social_devian",
        "id" => "acera_social_devian_url",
        "placeholder" => "Devian art url",
        "desc" => "Paste url to your devian art profile (eg.: http://johndoe.deviantart.com/)",),
    
    array(
        "under_section" => "layout-footer",
        "type" => "text",
        "name" => "Dribbble",
        "display_checkbox_id" => "acera_social_dribble",
        "id" => "acera_social_dribble_url",
        "placeholder" => "Dribbble url",
        "desc" => "Paste url to your dribbble profile (eg.: http://dribbble.com/xRicrdx)",),
    
    array(
        "under_section" => "layout-footer",
        "type" => "text",
        "name" => "Facebook",
        "display_checkbox_id" => "acera_social_fb",
        "id" => "acera_social_fb_url",
        "placeholder" => "Facebook url",
        "desc" => "Paste url to your facebook profile (eg.: https://www.facebook.com/honza.r.simecek)",),
    
    array(
        "under_section" => "layout-footer",
        "type" => "text",
        "display_checkbox_id" => "acera_social_flickr",
        "name" => "Flickr",
        "id" => "acera_social_flickr_url",
        "placeholder" => "Flickr url",
        "desc" => "Paste url to your flickr profile (eg.: http://www.flickr.com/photos/johndoe/)",),
    array(
        "under_section" => "layout-footer",
        "type" => "text",
        "name" => "Google+",
        "display_checkbox_id" => "acera_social_google",
        "id" => "acera_social_google_url",
        "placeholder" => "Google+ url",
        "desc" => "Paste url to your google+ profile (eg.: https://plus.google.com/u/0/112775099723209247114/posts)",),
    array(
        "under_section" => "layout-footer",
        "type" => "text",
        "name" => "Link in",
        "display_checkbox_id" => "acera_social_link",
        "id" => "acera_social_link_url",
        "placeholder" => "Link in url",
        "desc" => "Paste url to your link in profile",),
    array(
        "under_section" => "layout-footer",
        "type" => "text",
        "name" => "Twitter",
        "display_checkbox_id" => "acera_social_twitter",
        "id" => "acera_social_twitter_url",
        "placeholder" => "Twitter url",
        "desc" => "Paste url to your twitter profile (eg.: https://twitter.com/#!/simecekjann)",),
    array(
        "under_section" => "layout-footer",
        "type" => "text",
        "name" => "Vimeo",
        "id" => "acera_social_vimeo_url",
        "display_checkbox_id" => "acera_social_vimeo",
        "placeholder" => "Vimeo url",
        "desc" => "Paste url to your vimeo profile (eg.: http://vimeo.com/johndoe)",),
    array(
        "under_section" => "layout-footer",
        "type" => "text",
        "name" => "Yahoo",
        "id" => "acera_social_yahoo_url",
        "display_checkbox_id" => "acera_social_yahoo",
        "placeholder" => "Yahoo url",
        "desc" => "Paste url to your yahoo profile",),
    array(
        "under_section" => "layout-footer",
        "type" => "text",
        "name" => "Youtube",
        "display_checkbox_id" => "acera_social_youtube",
        "id" => "acera_social_youtube_url",
        "placeholder" => "Youtube url",
        "desc" => "Paste url to your youtube profile (eg.: http://www.youtube.com/user/johndoe)",),
    
    array(
        "type" => "toggle_div_end",
        "under_section" => "layout-footer"
    ),
    
    /*
     * 
     *  = Layout Settings Section
     * 
     */
    
    
    
    
    
    
    
    
    
    
    /*
     * 
     * Appearance Section
     * 
     */
	
    array(
        "type" => "section",
        "icon" => "acera-icon-font",
        "title" => "Appearance",
        "id" => "appearance",
        "expanded" => "false"
    ),
    
    array(
        "section" => "appearance",
        "type" => "heading",
        "title" => "Theme settings",
        "id" => "appearance-settings"
    ),    
    
    array(        
        "under_section" => "appearance-settings",
	"show_labels" => "false",
        "type" => "radio_image",
	"image_src" => array(get_stylesheet_directory_uri()."/acera-options/"."assets/orange.png",
            get_stylesheet_directory_uri()."/acera-options/"."assets/blue.png",
            get_stylesheet_directory_uri()."/acera-options/"."assets/gray.png",
            get_stylesheet_directory_uri()."/acera-options/"."assets/green.png",
            get_stylesheet_directory_uri()."/acera-options/"."assets/purple.png",
            get_stylesheet_directory_uri()."/acera-options/"."assets/red.png"),
	"image_size" => array( "50"),
	"name" => "<strong>Main theme</strong>",
	"id" => "acera_main_themecolor",
	"options" => array( "lightOrange", "lightBlue", "lightGrey", "lightGreen", "lightPurple", "lightRed"),					
	"desc" => "Main theme color.",
	"default" => "lightOrange" ),
    
    
    array(        
        "under_section" => "appearance-settings",
	"type" => "select",
	"name" => "Transition animation",
	"id" => "acera_appearance_anim",
	"options" => array( "fade", "pop", "flip", "slide", "slideup", "slidedown", "none"),					
	"desc" => "Choose one of these transition animations.",
	"default" => "fade" ),  
    
    
    array(
        "title" => "Custom Backgrounds",
        "under_section" => "appearance-settings",
        "type" => "small_heading",
    ),
    
    
    array(
        "under_section" => "appearance-settings",
        "type" => "image",
        "placeholder" => "http://example.com/headerbg.png",
        "name" => "Custom Header background",
        "id" => "acera_appearance_headerbg",
        "desc" => "Paste the URL to your image, or upload it here.",
        "default" => ""),
    
    array(
        "under_section" => "appearance-settings",
        "type" => "image",
        "placeholder" => "http://example.com/contentbg.png",
        "name" => "Custom Content background",
        "id" => "acera_appearance_contentbg",
        "desc" => "Paste the URL to your image, or upload it here.",
        "default" => ""),
    
    array(
        "under_section" => "appearance-settings",
        "type" => "image",
        "placeholder" => "http://example.com/stripebg.png",
        "name" => "Custom Stripe background",
        "id" => "acera_appearance_stripebg",
        "desc" => "Background for stripe that separates footer and header from content (paste the URL to your image, or upload it here).",
        "default" => ""),
    
    array(
        "section" => "appearance",
        "type" => "heading",
        "title" => "Fonts",
        "id" => "appearance-fonts"
    ),
    
    
    array(        
        "under_section" => "appearance-fonts",
	"show_labels" => "false",
        "type" => "radio_image",
	"image_src" => array(get_stylesheet_directory_uri()."/acera-options/"."assets/lobster.png"
            , get_stylesheet_directory_uri()."/acera-options/"."assets/oswald.png"
            , get_stylesheet_directory_uri()."/acera-options/"."assets/quicksand.png"
            , get_stylesheet_directory_uri()."/acera-options/"."assets/six_caps.png"
            , get_stylesheet_directory_uri()."/acera-options/"."assets/rokkit.png"
            , get_stylesheet_directory_uri()."/acera-options/"."assets/arial.png"
            , get_stylesheet_directory_uri()."/acera-options/"."assets/times.png"
            , get_stylesheet_directory_uri()."/acera-options/"."assets/droid_sans.png"
            , get_stylesheet_directory_uri()."/acera-options/"."assets/droid_serif.png"),
	"image_size" => array( "198"),
	"name" => "Main Headline font",
	"id" => "acera_blog_fonts_headline",
	"options" => array("lobster", "oswald", "quicksand", "sixcaps", "rokkitt", "arial", "times", "droidsans", "droidserif"),					
	"desc" => "Choose which font you want to use for main heading (h1).",
	"default" => "lobster" ),
    
    
    array(        
        "under_section" => "appearance-fonts",
	"show_labels" => "false",
        "type" => "radio_image",
	"image_src" => array(get_stylesheet_directory_uri()."/acera-options/"."assets/lobster.png"
            , get_stylesheet_directory_uri()."/acera-options/"."assets/oswald.png"
            , get_stylesheet_directory_uri()."/acera-options/"."assets/quicksand.png"
            , get_stylesheet_directory_uri()."/acera-options/"."assets/six_caps.png"
            , get_stylesheet_directory_uri()."/acera-options/"."assets/rokkit.png"
            , get_stylesheet_directory_uri()."/acera-options/"."assets/arial.png"
            , get_stylesheet_directory_uri()."/acera-options/"."assets/times.png"
            , get_stylesheet_directory_uri()."/acera-options/"."assets/droid_sans.png"
            , get_stylesheet_directory_uri()."/acera-options/"."assets/droid_serif.png"),
	"image_size" => array( "198"),
	"name" => "Content font",
	"id" => "acera_blog_fonts_content",
	"options" => array("lobster", "oswald", "quicksand", "sixcaps", "rokkitt", "arial", "times", "droidsans", "droidserif"),					
	"desc" => "Choose which font you want to use for content.",
	"default" => "arial" ),
    
    
    
    array(        
        "under_section" => "appearance-fonts",
	"show_labels" => "false",
        "type" => "radio_image",
	"image_src" => array(get_stylesheet_directory_uri()."/acera-options/"."assets/lobster.png"
            , get_stylesheet_directory_uri()."/acera-options/"."assets/oswald.png"
            , get_stylesheet_directory_uri()."/acera-options/"."assets/quicksand.png"
            , get_stylesheet_directory_uri()."/acera-options/"."assets/six_caps.png"
            , get_stylesheet_directory_uri()."/acera-options/"."assets/rokkit.png"
            , get_stylesheet_directory_uri()."/acera-options/"."assets/arial.png"
            , get_stylesheet_directory_uri()."/acera-options/"."assets/times.png"
            , get_stylesheet_directory_uri()."/acera-options/"."assets/droid_sans.png"
            , get_stylesheet_directory_uri()."/acera-options/"."assets/droid_serif.png"),
	"image_size" => array( "198"),
	"name" => "Blockquote font",
	"id" => "acera_blog_fonts_blockquote",
	"options" => array("lobster", "oswald", "quicksand", "sixcaps", "rokkitt", "arial", "times", "droidsans", "droidserif"),					
	"desc" => "Choose which font you want to use for blockquote.",
	"default" => "times" ),
    
    
    
    array(
        "type" => "small_heading",
        "title" => "Custom fonts",
        "under_section" => "appearance-fonts",
    ),
    
    array(
        "under_section" => "appearance-fonts",
	"type" => "checkbox",
	"name" => "<strong>Headline font - enable</strong>",
	"id" => array( "acera_fonts_1" ),				
	"options" => array("Enable"),
        "desc" => "Enables custom font for main headline(h1).",
	"default" => array("not")),
    
    array(
        "type" => "toggle_div_start",
        "display_checkbox_id" => "acera_fonts_1",
        "under_section" => "appearance-fonts",
    ),
    
    array(
        "under_section" => "appearance-fonts",
        "type" => "text",
        "name" => "Headline font - link",
        "id" => "acera_fonts_1_link",
        "desc" => "Paste link from google webfonts for your font.",
        "placeholder" => "<link href='Google font' rel='stylesheet' type='text/css'>"),
    
    
    array(
        "under_section" => "appearance-fonts",
        "type" => "textarea",
        "name" => "Headline font - font-family",
        "placeholder" => "font-family: 'Arial', sans-serif",
        "id" => "acera_fonts_1_css",
        "desc" => "Paste here your font's font-family CSS attribute.",),
    
    array(
        "type" => "toggle_div_end",
        "under_section" => "appearance-fonts",
    ),
    
    array(
        "under_section" => "appearance-fonts",
	"type" => "checkbox",
	"name" => "<strong>Content font - enable</strong>",
	"id" => array( "acera_fonts_2" ),				
	"options" => array("Enable"),
        "desc" => "Enables custom font for content.",
	"default" => array("not")),
    
    
    array(
        "type" => "toggle_div_start",
        "display_checkbox_id" => "acera_fonts_2",
        "under_section" => "appearance-fonts",
    ),
    
    array(
        "under_section" => "appearance-fonts",
        "type" => "text",
        "name" => "Content font - link",
        "id" => "acera_fonts_2_link",
        "desc" => "Paste link from google webfonts for your font.",
        "placeholder" => "<link href='Google font' rel='stylesheet' type='text/css'>"),

    array(
        "under_section" => "appearance-fonts",
        "type" => "textarea",
        "name" => "Content font - font-family",
        "placeholder" => "font-family: 'Arial', sans-serif",
        "id" => "acera_fonts_2_css",
        "desc" => "Paste here your font's font-family CSS attribute.",),

    array(
        "type" => "toggle_div_end",
        "under_section" => "appearance-fonts",
    ),
    
    array(
        "under_section" => "appearance-fonts",
	"type" => "checkbox",
	"name" => "<strong>Blockquote font - enable</strong>",
	"id" => array( "acera_fonts_3" ),				
	"options" => array("Enable"),
        "desc" => "Enable custom font for blockquotes.",
	"default" => array("not")),
    
    
    array(
        "type" => "toggle_div_start",
        "display_checkbox_id" => "acera_fonts_3",
        "under_section" => "appearance-fonts",
    ),
    
    array(
        "under_section" => "appearance-fonts",
        "type" => "text",
        "name" => "Content font - link",
        "id" => "acera_fonts_3_link",
        "desc" => "Paste link from google webfonts for your font.",
        "placeholder" => "<link href='Google font' rel='stylesheet' type='text/css'>"),
    
    
    array(
        "under_section" => "appearance-fonts",
        "type" => "textarea",
        "name" => "Content font - font-family",
        "placeholder" => "font-family: 'Arial', sans-serif",
        "id" => "acera_fonts_3_css",
        "desc" => "Paste here your font's font-family CSS attribute.",),
   
    array(
        "type" => "toggle_div_end",
        "under_section" => "appearance-fonts",
    ),
    
    
    
    /*
     * 
     *  = Appearance Section
     * 
     */ 
);
?>
