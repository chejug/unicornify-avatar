<?php

/*
  Question2Answer (c) Gideon Greenspan

	http://www.question2answer.org/

	
	File: qa-include/qa-app-format.php
	Version: See define()s at top of qa-include/qa-base.php
	Description: Common functions for creating theme-ready structures from data


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



	  	function qa_get_gravatar_html($email, $size)

	{
		if ( qa_opt('unicornify_content_on')) {
		if ($size>0)
			return '<IMG SRC="'.(qa_is_https_probably() ? 'https' : 'http').
				'://www.unicornify.appspot.com/avatar/'.md5(strtolower(trim($email))).'?s='.(int)$size.
				'" WIDTH="'.(int)$size.'" HEIGHT="'.(int)$size.'" CLASS="qa-avatar-image" ALT=""/>';
		else
			return null;
			
	}
		

	} 
	


/*
	Omit PHP closing tag to help avoid accidental output
*/
