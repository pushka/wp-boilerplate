<?php
/**
 * The General specific functionality.
 *
 * @since   1.0.0
 * @package theme_name
 */

namespace Inf_Theme\Theme;

/**
 * Class General
 */
class General {

  /**
   * Global theme name
   *
   * @var string
   */
  protected $theme_name;

  /**
   * Global theme version
   *
   * @var string
   */
  protected $theme_version;

  /**
   * Global assets version
   *
   * @var string
   */
  protected $assets_version;

  /**
   * Initialize class
   *
   * @param array $theme_info Load global theme info.
   *
   * @since 1.0.0
   */
  public function __construct( $theme_info = null ) {
    $this->theme_name = $theme_info['theme_name'];
    $this->theme_version = $theme_info['theme_version'];
    $this->assets_version = $theme_info['assets_version'];
  }

  /**
   * Enable theme support
   *
   * @since 1.0.0
   */
  public function add_theme_support() {
    add_theme_support( 'title-tag', 'html5' );
  }

}
