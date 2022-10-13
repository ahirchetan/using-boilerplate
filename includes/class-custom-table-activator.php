<?php

/**
 * Fired during plugin activation
 *
 * @link       https://github.com/ahirchetan/custom-table.git
 * @since      1.0.0
 *
 * @package    Custom_Table
 * @subpackage Custom_Table/includes
 */

/**
 * Fired during plugin activation.
 *
 * This class defines all code necessary to run during the plugin's activation.
 *
 * @since      1.0.0
 * @package    Custom_Table
 * @subpackage Custom_Table/includes
 * @author     Chetan <cvbahir@gmail.com>
 */
class Custom_Table_Activator {

	/**
	 * Short Description. (use period)
	 *
	 * Long Description.
	 *
	 * @since    1.0.0
	 */
	public static function activate() {

    // Trigger our function that default collumn options add in database.

            if (empty(get_option('show_columns'))) {
            $default_options=array(
                 'ID'=>'ID',
                 'post_title'=>'Post Title',
                 'post_thumbnail'=>'Post Thumbnail',
                 'post_excerpt'=>'Post Excerpt'
             );
            $show_options = array(
                 'user_email'=>'email',
                 'display_name'=>'author'
             );
            $hide_options= array();
             add_option('default_columns',serialize($default_options));
             add_option('show_columns',serialize($show_options));
             add_option('hide_columns',serialize($hide_options));
             }

                flush_rewrite_rules(); 
	} 

}
