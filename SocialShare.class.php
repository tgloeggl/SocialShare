<?php
/*
 * SocialShare.class.php - SocialShare
 *
 * This program is free software; you can redistribute it and/or
 * modify it under the terms of the GNU General Public License as
 * published by the Free Software Foundation; either version 3 of
 * the License, or (at your option) any later version.
 *
 * @author      Till Glöggler <till.gloeggler@elan-ev.de>
 * @copyright   2012 Till Glöggler <till.gloeggler@elan-ev.de>
 * @license     http://www.gnu.org/licenses/gpl-3.0.html GPL version 3
 * @category    Stud.IP
 */

require_once 'PostingApplet.php';

class SocialShare extends StudipPlugin implements SystemPlugin, PostingApplet
{
    static $PLUGIN_PATH;
    /**
     * Initialize a new instance of the plugin.
     */
    function __construct()
    {
        parent::__construct();
        PageLayout::addScript($this->getPluginURL() . '/javascript/jquery.socialshareprivacy.min.js');
        PageLayout::addStylesheet($this->getPluginURL() . '/javascript/socialshareprivacy/socialshareprivacy.css');

        self::$PLUGIN_PATH = $this->getPluginURL();
    }

    public static function getHTML($name, $content, $url, $owner_id)
    {
        $id = md5($url);
        $image_path = self::$PLUGIN_PATH .'/javascript/socialshareprivacy/images';
        return  '<div id="'. $id .'"></div>
        <script type="text/javascript">
            jQuery("#'. $id .'").socialSharePrivacy({
                services: {
                    facebook: {
                        dummy_img : "'. $image_path .'/dummy_facebook.png",
                        uri: "'. $url .'",
                        perma_option: "off"
                    },
                    twitter: {
                        dummy_img : "'. $image_path .'/dummy_twitter.png",
                        uri: "'. $url .'",
                        perma_option: "off"
                    },
                    gplus: {
                        dummy_img : "'. $image_path .'/dummy_gplus.png",
                        uri: "'. $url .'",
                        perma_option: "off"
                    }
            }
        });
        </script>';
    }
}
