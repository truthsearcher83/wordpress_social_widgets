<?php
/**
 * @package  AlecadddPlugin
 */
namespace Inc\Base;

class RegisterSocialLinksWidget 
    {
        public function register() 
	{
		add_action('widgets_init', array($this ,'register_social_links'));
	}
        
        public function register_social_links()
        {
                
                register_widget('Inc\Base\Social_Links_Widget');
        
        }
    }
