<?php

if (!class_exists('JPWEB_Theme_Options')) {

    class JPWEB_Theme_Options
    {

        public $args = array();
        public $sections = array();
        public $theme;
        public $ReduxFramework;

        /* Load Redux Framework */
        public function __construct()
        {

            if (!class_exists('ReduxFramework')) {
                return;
            }

            // This is needed. Bah WordPress bugs.  <img class="emoji" draggable="false" alt="😉" src="http://s.w.org/images/core/emoji/72x72/1f609.png">
            if (true == Redux_Helpers::isTheme(__FILE__)) {
                $this->initSettings();
            } else {
                add_action('plugins_loaded', array($this, 'initSettings'), 10);
            }

        }


        public function initSettings()
        {

            // Set the default arguments
            $this->setArguments();

            // Set a few help tabs so you can see how it's done
            $this->setHelpTabs();

            // Create the sections and fields
            $this->setSections();

            if (!isset($this->args['opt_name'])) { // No errors please
                return;
            }

            $this->ReduxFramework = new ReduxFramework($this->sections, $this->args);
        }


        public function setArguments()
        {
            $theme = wp_get_theme();
            $this->args = array(
                'opt_name' => 'tp_options',
                'display_name' => $theme->get('Name'),
                'menu_type' => 'menu',
                'allow_sub_menu' => true,
                'menu_title' => __('Themes Option', 'theme_option'),
                'page_title' => __('Themes Option', 'theme_option'),
                'dev_mode' => false,
                'customizer' => true,
                'menu_icon' => '',
                'hints' => array(
                    'icon' => 'icon-question-sign',
                    'icon_position' => 'right',
                    'icon_color' => 'lightgray',
                    'icon_size' => 'normal',
                    'tip_style' => array(
                        'color' => 'light',
                        'shadow' => true,
                        'rounded' => false,
                        'style' => '',
                    ),
                    'tip_position' => array(
                        'my' => 'top left',
                        'at' => 'bottom right',
                    ),
                    'tip_effect' => array(
                        'show' => array(
                            'effect' => 'slide',
                            'duration' => '500',
                            'event' => 'mouseover',
                        ),
                        'hide' => array(
                            'effect' => 'slide',
                            'duration' => '500',
                            'event' => 'click mouseleave',
                        ),
                    ),
                ) // end Hints
            );


        }


        public function setHelpTabs()
        {

            // Custom page help tabs, displayed using the help API. Tabs are shown in order of definition.
            $this->args['help_tabs'][] = array(
                'id' => 'redux-help-tab-1',
                'title' => __('Theme Information 1', 'theme_option'),
                'content' => __('<p>This is the tab content, HTML is allowed.</p>', 'theme_option')
            );

            $this->args['help_tabs'][] = array(
                'id' => 'redux-help-tab-2',
                'title' => __('Theme Information 2', 'theme_option'),
                'content' => __('<p>This is the tab content, HTML is allowed.</p>', 'theme_option')
            );

            // Set the help sidebar
            $this->args['help_sidebar'] = __('<p>This is the sidebar content, HTML is allowed.</p>', 'theme_option');
        }


        public function setSections()
        {

            // Home Section
            $this->sections[] = array(
                'title' => __('Header', 'theme_option'),
                'desc' => __('All of settings for header on this theme.', 'theme_option'),
                'icon' => 'el-icon-home',
                'fields' => array(

                    array(
                        'id' => 'white-logo',
                        'type' => 'media',
                        'title' => __('White Logo Image', 'theme_option'),
                        'desc' => __('Image that you want to use as logo', 'theme_option'),
                    ),
                    array(
                        'id' => 'black-logo',
                        'type' => 'media',
                        'title' => __('Black Logo Image', 'theme_option'),
                        'desc' => __('Image that you want to use as logo', 'theme_option'),
                    ),
                    array(
                        'id' => 'favicon-image',
                        'type' => 'media',
                        'title' => __('Favicon Image', 'theme_option'),
                        'desc' => __('Image that you want to use as favicon', 'theme_option'),
                    )
                )
            ); // end section

        }
    }


    global $reduxConfig;
    $reduxConfig = new JPWEB_Theme_Options();
}


