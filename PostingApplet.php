<?php
/*
 * PostingApplet.php - Interface for a posting-applet
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

interface PostingApplet {
    /**
     * returns some HTML do be displayed when a posting is presented
     * 
     * @param string $title the posting-title
     * @param string $content the posting-content
     * @param string $url url to the posting
     * @param string $owner_id user_id of the post-owner
     */
    public static function getHTML($name, $content, $url, $owner_id);
}
