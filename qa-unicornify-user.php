<?php

/*
  Question2Answer (c) Gideon Greenspan

	http://www.question2answer.org/

	
	File: qa-include/qa-app-users.php
	Version: See define()s at top of qa-include/qa-base.php
	Description: User management (application level) for basic user operations


	This program is free software; you can redistribute it and/or
	modify it under the terms of the GNU General Public License
	as published by the Free Software Foundation; either version 2
	of the License, or (at your option) any later version.
	
	This program is distributed in the hope that it will be useful,
	but WITHOUT ANY WARRANTY; without even the implied warranty of
	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
	GNU General Public License for more details.

	More about this license: http://www.question2answer.org/license.php
*/

	if (!defined('QA_VERSION')) { // don't allow this page to be requested directly from browser
		header('Location: ../');
		exit;
	}


		
		
				function qa_get_user_avatar_html($flags, $email, $handle, $blobid, $width, $height, $size, $padding=false)
	/*
		Return HTML to display for the user's avatar, constrained to $size pixels, with optional $padding to that size
		Pass the user's fields $flags, $email, $handle, and avatar $blobid, $width and $height
	*/	
		{
		if (qa_opt('unicornify_content_on')) {
			require_once QA_INCLUDE_DIR.'qa-app-format.php';
                // If the avatar is too small, you can adjust the size by changing the value of $s
				// The original value was at $s=128
				$html=qa_get_gravatar_html($email, $s = 40, $d = 'mm', $r = 'g', $img = false, $atts = array());
 			if (qa_opt('avatar_allow_upload') && (($flags & QA_USER_FLAGS_SHOW_AVATAR)) && isset($blobid))
				$html=qa_get_avatar_blob_html($blobid, $width, $height, $size, $padding);
			
			if ( (qa_opt('avatar_allow_gravatar')||qa_opt('avatar_allow_upload')) && qa_opt('avatar_default_show') && strlen(qa_opt('avatar_default_blobid')) )
				$html=qa_get_avatar_blob_html(qa_opt('avatar_default_blobid'), qa_opt('avatar_default_width'), qa_opt('avatar_default_height'), $size, $padding);
							
			return (isset($html) && strlen($handle)) ? ('<A HREF="'.qa_path_html('user/'.$handle).'" CLASS="qa-avatar-link">'.$html.'</A>') : $html;
	
		}
		}
		
		

	

/*
	Omit PHP closing tag to help avoid accidental output
*/
