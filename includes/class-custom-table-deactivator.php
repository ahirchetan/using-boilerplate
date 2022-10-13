<?php

/**
 * Fired during plugin deactivation
 *
 * @link       https://github.com/ahirchetan/custom-table.git
 * @since      1.0.0
 *
 * @package    Custom_Table
 * @subpackage Custom_Table/includes
 */
 
/**
 * Fired during plugin deactivation.
 *
 * This class defines all code necessary to run during the plugin's deactivation.
 *
 * @since      1.0.0
 * @package    Custom_Table
 * @subpackage Custom_Table/includes
 * @author     Chetan <cvbahir@gmail.com>
 */
class Custom_Table_Deactivator {

	/**
	 * Short Description. (use period)
	 *
	 * Long Description
	 *
	 * @since    1.0.0
	 */
	public static function deactivate() {
       // remove all options into database, so the rules are no longer in memory.
        delete_option('default_columns');
        delete_option('show_columns');
        delete_option('hide_columns');

        // Clear the permalinks after deactive the plugin.
        flush_rewrite_rules();
	}

}
