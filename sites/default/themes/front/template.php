<?php

    function frontend_links__locale_block(&$vars)
    {
        foreach($vars['links'] as $language => $langInfo)
        {
            $vars['links'][$language]['title'] = $vars['links'][$language]['language']->language;
        }
        $content = theme_links($vars);
        return $content;
    }


 	function front_preprocess_html(&$variables, $hook)
 	{
        drupal_add_js(drupal_get_path('theme', 'front').'/js/launcher.js');
        drupal_add_js(drupal_get_path('theme', 'front').'/js/jquery.cycle2.min.js');
 	}

 	function front_preprocess_page(&$variables)
 	{
 		if(!empty($variables['node']))
 		{
 			$variables['theme_hook_suggestions'][] ='node--'.$variables['node']->type;
 		}
 	}
?>