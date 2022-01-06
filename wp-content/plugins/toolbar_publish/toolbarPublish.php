<?php

/**
 *  @package Toolbar Publish
 * Plugin Name: Toolbar Publish
 * Description: Adds a "Publish" or "Update" button to the toolbar for easy access while working on long posts.
 * Version: 1.0.2
 * Author: Dalton McGee
 * Twitter: DaltonMcGee16
 * License: MIT
 * Text Domain: toolbar_publish
 */


add_action('admin_bar_menu', function ($wp_admin_bar) {
  global $post;
  global $pagenow;
  if (!!$post && $pagenow !== "edit.php") {
    $label = $post->post_status === "publish" ? "Update" : "Publish";
    $args = [
      'title' => "<label for='publish'>$label</label>",
      'id' => 'publish'
    ];
    $wp_admin_bar->add_menu($args);
  }
  return $wp_admin_bar;
},999);

wp_enqueue_style('toolbar_publish_styles', plugins_url('/toolbar_publish/styles.css'));
wp_enqueue_script('toolbar_publish_scripts', plugins_url('/toolbar_publish/scripts.js'));
