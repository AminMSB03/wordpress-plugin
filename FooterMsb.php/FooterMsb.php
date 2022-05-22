<?php
/*
    Plugin Name: Mesbahi Footer
    Plugin URI: http://localhost:3000/
    Description: Permet de créer un footer pour votre site !
    Version: 0.1
    Author: Mesbahi Amine 
    Author URI: http://woredpress.com 
    */
    
    
if ( ! defined( 'ABSPATH' ) ) 
exit;
    
wp_enqueue_style( 'style', plugins_url( '/css/style.css', __FILE__ ), false, '1.0', 'all' ); 





add_action('wp_footer','footer');
function footer()
{
    echo '
    <div class="footer">
        <div class="footer-logo">
            <h1>WebSite Title</h1>
        </div>
        <div class="middle">
            <div>
                <h5>ABOUT</h5>
                <p>About</p>
                <p>Submit on issue</p>
                <p>GitHub Repo</p>
                <p>Slack</p>
            </div>
            <div>
                <h5>GETTING STARTED</h5>
                    <p>Introduction</p>
                    <p>Documentation</p>
                    <p>Usage</p>
                    <p>Globals</p>
                    <p>Elements</p>
                    <p>Collections</p>
                    <p>Themes</p>
                </div>
            <div>
                <h5>RESOURCES</h5>
                <p>API</p>
                <p>Lorem ipsum dolor sit </p>
                <p>Lorem ipsum </p>
                <p>Lorem ipsum dolor </p>
                <p>Lorem ipsum dolor </p>
                <p>Lorem ipsum dolor sit </p>
            </div>
            <div class="social-media">
                <div class="text">
                    <h5>SOCIAL MEDIA</h5>
                    <p>Lorem ipsum dolor sit Lorem ipsum dolor sit Lorem ipsum dolor sit Lorem ipsum dolor sit </p>
                </div>
                <div class="logo">
                    <img src="https://img.icons8.com/material-rounded/24/000000/twitter-squared.png"/>
                    <img src="https://img.icons8.com/ios-filled/50/000000/facebook-new.png"/>
                    <img src="https://img.icons8.com/ios-filled/50/000000/linkedin-2--v1.png"/>
                </div>
            </div>
        </div>
        <div class="footer-underside">
            <p>2020 All rights reserved</p>
            <p>Terms of services </p>
            <p>Privacy Policy</p>
            <p>Security</p>
            <p>Sitemap</p>
        </div>
    </div>
    ';
}

