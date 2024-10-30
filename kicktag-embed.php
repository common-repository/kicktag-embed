<?php
/*
Plugin Name: Kicktag Embed
Plugin URI: None
Description: Use for embedding kicktag in WP
Version: 0.1 BETA
Author: Daniel jao
Author URI: None
*/

/*
KickTag Embed Posts (Wordpress Plugin)
Copyright (C) 2010 Daniel Ja0
Contact me at daniel_jao@yahoo.com

This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program. If not, see <http://www.gnu.org/licenses/>.
*/

//tell wordpress to register the embed_kicktag shortcode
add_shortcode("kicktag", "kicktag_embed");

function kicktag_embed($atts, $content = null) {
        extract(shortcode_atts(array(
                "kicked_video_id" => '0',
                "host" => 'http://www.kicktag.com/'
        ), $atts));
        $embed = '<embed type="application/x-shockwave-flash" src="http://kicklight.s3.amazonaws.com/SmallPlayer.swf?kid='.$kicked_video_id.'&host='.$host.'" style="width:312px;height:280px" id="kickPlayer" allowFullScreen="true" allowScriptAccess="always" wmode="transparent"></embed>';
		
		return $embed;
}
?>