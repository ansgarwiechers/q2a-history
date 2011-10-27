<?php
    class user_activity_admin {

		function allow_template($template)
		{
			return ($template!='admin');
		}

		function option_default($option) {
			
			$idx = 0;
			
			switch($option) {
/*
'u_login': 
'u_logout':
*/
				case 'user_act_list_title':
					return 'Recent Activity';
				case 'user_act_list_age':
					return 30;

				case 'user_act_list_hide':
					return 'in_u_block
in_u_edit
in_u_unblock';

				case 'user_act_list_show':
					return 'q_post
a_post
c_post';


				case 'user_act_list_css':
					return '.qa-activity-item-table{
	width:100%;
	min-width:500px;
}
.qa-activity-item-type-cell{
	width:35%;
}

.qa-activity-item-title-cell{
	width:45%;
}

.qa-activity-item-points-cell{
	width:20%;
}

.qa-activity-item-date {
	background-color: #EEEEEE;
	color: #999999;
	float: left;
	font: bold 10px Verdana,Sans-Serif;
	letter-spacing: 0;
	padding: 6px 10px;
	text-align: center;
	white-space: normal;
	width: 45px;
}
.qa-activity-item-date-no {
	font-size:150%;
}
.qa-activity-item-type {
    font-weight: bold;
    padding: 3px;
}
.qa-activity-item-title a{
    color: #555555 !important;
    font-weight: bold;
}
.qa-activity-item-points {
	font-weight: bold;
	font-family: sans-serif;
	padding: 10px;
}
.qa-activity-item-points-neg {
	color: Maroon;
}
.qa-activity-item-points-pos {
	color: Green;
}
';

			// descriptions

				case 'user_act_list_q_post':
					return 'posted a question';
				case 'user_act_list_a_post':
					return 'posted an answer';
				case 'user_act_list_c_post':
					return 'posted a comment';

				case 'user_act_list_q_edit':
					return 'edited a question';
				case 'user_act_list_a_edit':
					return 'edited an answer';
				case 'user_act_list_c_edit':
					return 'edited a comment';

				case 'user_act_list_q_hide':
					return 'hid a question';
				case 'user_act_list_a_hide':
					return 'hid an answer';
				case 'user_act_list_c_hide':
					return 'hid a comment';

				case 'user_act_list_q_reshow':
					return 'reshowed a question';
				case 'user_act_list_a_reshow':
					return 'reshowed an answer';
				case 'user_act_list_c_reshow':
					return 'reshowed a comment';

				case 'user_act_list_q_delete':
					return 'deleted a question';
				case 'user_act_list_a_delete':
					return 'deleted an answer';
				case 'user_act_list_c_delete':
					return 'deleted a comment';

				case 'user_act_list_q_move':
					return 'moved a question';
				case 'user_act_list_a_to_c':
					return 'converted answer to comment';
				case 'user_act_list_c_claim':
					return 'claimed a comment';

				case 'user_act_list_q_claim':
					return 'claimed a question';
				case 'user_act_list_a_claim':
					return 'claimed an answer';
				case 'user_act_list_c_claim':
					return 'claimed a comment';

				case 'user_act_list_q_unflag':
					return 'unflagged a question';
				case 'user_act_list_a_unflag':
					return 'unflagged an answer';
				case 'user_act_list_c_unflag':
					return 'unflagged a comment';

				case 'user_act_list_in_q_unflag':
					return 'question unflagged';
				case 'user_act_list_in_a_unflag':
					return 'answer unflagged';
				case 'user_act_list_in_c_unflag':
					return 'comment unflagged';

				case 'user_act_list_q_unflag':
					return 'unflagged a question';
				case 'user_act_list_a_unflag':
					return 'unflagged an answer';
				case 'user_act_list_c_unflag':
					return 'unflagged a comment';

				case 'user_act_list_in_q_unflag':
					return 'question unflagged';
				case 'user_act_list_in_a_unflag':
					return 'answer unflagged';
				case 'user_act_list_in_c_unflag':
					return 'comment unflagged';

				case 'user_act_list_a_select':
					return 'selected a best answer';
				case 'user_act_list_a_unselect':
					return 'unselected best answer';
					
				case 'user_act_list_in_a_select':
					return 'answer selected as best';
				case 'user_act_list_in_a_unselect':
					return 'answer deselected as best';
					
				case 'user_act_list_in_q_vote_up':
					return 'question voted up';
				case 'user_act_list_in_q_vote_down':
					return 'question voted down';
				case 'user_act_list_in_a_vote_up':
					return 'answer voted up';
				case 'user_act_list_in_a_vote_down':
					return 'answer voted down';
				case 'user_act_list_q_vote_up':
					return 'voted up a question';
				case 'user_act_list_q_vote_down':
					return 'voted down a question';
				case 'user_act_list_a_vote_up':
					return 'voted up an answer';
				case 'user_act_list_a_vote_down':
					return 'voted down an answer';

				case 'user_act_list_q_vote_nil':
					return 'unvoted a question';
				case 'user_act_list_a_vote_nil':
					return 'unvoted an answer';

					
				case 'user_act_list_u_password':
					return 'set password';
				case 'user_act_list_u_reset':
					return 'reset password';
				case 'user_act_list_u_save':
					return 'edited profile';
				case 'user_act_list_u_confirmed':
					return 'confirmed email';
				case 'user_act_list_u_edit':
					return 'edited profile of';
				case 'user_act_list_u_level':
					return 'changed level of';
				case 'user_act_list_u_block':
					return 'blocked user';
				case 'user_act_list_u_unblock':
					return 'unblocked user';
					
				case 'user_act_list_in_u_edit':
					return 'profile edited';
				case 'user_act_list_in_u_level':
					return 'level changed to:';
				case 'user_act_list_in_u_block':
					return 'blocked';
				case 'user_act_list_in_u_unblock':
					return 'unblocked';
					
				case 'user_act_list_feedback':
					return 'sent feedback';
				case 'user_act_list_search':
					return 'searched for:';
				case 'user_act_list_u_register':
					return 'registered';



			
				default:
					return null;
			}

		}

		function admin_form(&$qa_content)
		{

			$field_names = array(
				'q_post',
				'a_post',
				'c_post',

				'q_edit',
				'a_edit',
				'c_edit',

				'q_hide',
				'a_hide',
				'c_hide',

				'q_reshow',
				'a_reshow',
				'c_reshow',

				'q_delete',
				'a_delete',
				'c_delete',

				'q_move',
				'a_to_c',
				'c_claim',

				'q_claim',
				'a_claim',
				'c_claim',

				'q_unflag',
				'a_unflag',
				'c_unflag',

				'in_q_unflag',
				'in_a_unflag',
				'in_c_unflag',

				'q_unflag',
				'a_unflag',
				'c_unflag',

				'in_q_unflag',
				'in_a_unflag',
				'in_c_unflag',

				'a_select',
				'a_unselect',
				'in_a_select',
				'in_a_unselect',
				
				'in_q_vote_up',
				'in_q_vote_down',
				'in_a_vote_up',
				'in_a_vote_down',
				'q_vote_up',
				'q_vote_down',
				'a_vote_up',
				'a_vote_down',

				'q_vote_nil',
				'a_vote_nil',
				
				'u_password',
				'u_reset',
				'u_save',
				'u_confirmed',
				'u_edit',
				'u_level',
				'u_block',
				'u_unblock',
				'in_u_edit',
				'in_u_level',
				'in_u_block',
				'in_u_unblock',

				'feedback',
				'search',
				'u_register',
			);

		//	Process form input
			$ok = null;
			$error = null;

		
			if (qa_clicked('user_act_list_save')) {
				
				if((bool)qa_post_text('user_act_list_active') && !qa_opt('event_logger_to_database'))
					$error = 'Activity List requires activation of event logging to database via Event Logging plugin.  Please select "Log events to qa_eventlog database table" via that plugin and try again.';
				else {
					
					qa_opt('user_act_list_active',(bool)qa_post_text('user_act_list_active'));
					qa_opt('user_act_list_replace',(bool)qa_post_text('user_act_list_replace'));
					qa_opt('user_act_list_css',qa_post_text('user_act_list_css'));
					qa_opt('user_act_list_title',qa_post_text('user_act_list_title'));
					qa_opt('user_act_list_age',(int)qa_post_text('user_act_list_age'));
					
					qa_opt('user_act_list_show',qa_post_text('user_act_list_show'));
					qa_opt('user_act_list_hide',qa_post_text('user_act_list_hide'));
					
					foreach($field_names as $field) {
						qa_opt('user_act_list_'.$field,qa_post_text('user_act_list_'.$field));
					}

					$ok = qa_lang('admin/options_saved');
				}
			}
			else if (qa_clicked('user_act_list_reset')) {
				foreach($_POST as $i => $v) {
					$def = $this->option_default($i);
					if($def !== null) qa_opt($i,$def);
				}
				$ok = qa_lang('admin/options_reset');
			}

		// Create the form for display

			$fields = array();
			
			$fields[] = array(
				'label' => 'Show user activity list',
				'tags' => 'NAME="user_act_list_active"',
				'value' => qa_opt('user_act_list_active'),
				'type' => 'checkbox',
				'error' => $error,
			);
			
			$fields[] = array(
				'label' => 'Replace ordinary activity list',
				'tags' => 'NAME="user_act_list_replace"',
				'value' => qa_opt('user_act_list_replace'),
				'type' => 'checkbox',
			);
			
			$fields[] = array(
				'label' => 'Title for activity list',
				'tags' => 'NAME="user_act_list_title"',
				'value' => qa_opt('user_act_list_title'),
			);
			
			$fields[] = array(
				'label' => 'Age in days of oldest activity to show',
				'tags' => 'NAME="user_act_list_age"',
				'value' => qa_opt('user_act_list_age'),
				'type' => 'number',
			);
			
			$fields[] = array(
				'label' => 'Activity types to hide from profile owner',
				'tags' => 'NAME="user_act_list_hide"',
				'value' => qa_opt('user_act_list_hide'),
				'type' => 'textarea',
				'note' => 'one per line, use event names (q_post, etc.) below',
				'rows' => 20
			);
			
			$fields[] = array(
				'label' => 'Activity types to show to public',
				'tags' => 'NAME="user_act_list_show"',
				'value' => qa_opt('user_act_list_show'),
				'type' => 'textarea',
				'note' => 'one per line, use event names (q_post, etc.) below',
				'rows' => 20
			);
			
			$fields[] = array(
				'label' => 'Activity list custom css',
				'tags' => 'NAME="user_act_list_css"',
				'value' => qa_opt('user_act_list_css'),
				'type' => 'textarea',
				'rows' => 20
			);
			$fields[] = array(
				'type' => 'blank',
			);
			
			$fields[] = array(
				'type' => 'static',
				'label' => '<input type="button" value="edit event descriptions" onclick="jQuery(\'#user_act_values\').toggle()"><table style="display:none" id="user_act_values"><tr><td>',
			);

			foreach($field_names as $field) {
				$fields[] = array('label'=>$field,'tags'=>'NAME="user_act_list_'.$field.'"','value'=>qa_opt('user_act_list_'.$field));
			}

			$fields[] = array(
				'type' => 'static',
				'label' => '</td></tr></table>',
			);

			return array(           
				'ok' => ($ok && !isset($error)) ? $ok : null,
					
				'fields' => $fields,
				
				'buttons' => array(
					array(
					'label' => qa_lang_html('main/save_button'),
					'tags' => 'NAME="user_act_list_save"',
					),
					array(
					'label' => qa_lang_html('admin/reset_options_button'),
					'tags' => 'NAME="user_act_list_reset"',
					),
				),
			);
		}
    }