<?php

/*
  Question2Answer (c) Gideon Greenspan

	http://www.question2answer.org/

	
	File: qa-plugin/mouseover-layer/qa-mouseover-admin-form.php
	Version: See define()s at top of qa-include/qa-base.php
	Description: Generic module class for mouseover layer plugin to provide admin form and default option


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

	class qa_unicornify_admin {
		


	
		function admin_form(&$qa_content)
		{
			$saved=false;
			
			if (qa_clicked('unicornify_save_button')) {
				qa_opt('unicornify_content_on', (int)qa_post_text('unicornify_content_on_field'));
				$saved=true;
			}
			
	
			
			return array(
				'ok' => $saved ? 'Unicornify settings saved' : null,
				
				'fields' => array(
					array(
						'label' => 'Turn unicornify plugin on ',
						'type' => 'checkbox',
						'value' => qa_opt('unicornify_content_on'),
						'tags' => 'NAME="unicornify_content_on_field" ID="unicornify_content_on_field"',
					),
					
	
				),
				
				'buttons' => array(
					array(
						'label' => 'Save Changes',
						'tags' => 'NAME="unicornify_save_button"',
					),
				),
			);
		}
		
		
	}
	

/*
	Omit PHP closing tag to help avoid accidental output
*/
