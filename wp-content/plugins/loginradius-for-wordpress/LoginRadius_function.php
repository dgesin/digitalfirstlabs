<?php

// plugin options

$loginRadiusSettings = get_option('LoginRadius_settings');

$loginRadiusDs = DIRECTORY_SEPARATOR;

// include necessary files to detect a plugin

include_once(ABSPATH . 'wp-admin'.$loginRadiusDs.'includes'.$loginRadiusDs.'plugin.php');



/** 

 * Print the script required for enabling social login.

 */

function login_radius_login_script(){

	global $loginRadiusSettings, $loginRadiusObject;

	$loginRadiusSettings['LoginRadius_apikey'] = trim($loginRadiusSettings['LoginRadius_apikey']);

	if($loginRadiusObject->loginradiusValidateKey($loginRadiusSettings['LoginRadius_apikey'])){

		if(isset($_SERVER['HTTPS']) && !empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off'){

			$http = "https://";

		}else{

			$http = "http://";

		}

		?>

		<!-- Script to enable social login -->

		 <script src="//hub.loginradius.com/include/js/LoginRadius.js"></script>

		 <script type="text/javascript"> var options={}; options.login=true; LoginRadius_SocialLogin.util.ready(function () { $ui = LoginRadius_SocialLogin.lr_login_settings;$ui.interfacesize = "";$ui.apikey = "<?php echo $loginRadiusSettings['LoginRadius_apikey'] ?>";$ui.callback = "<?php echo login_radius_get_callback($http) ?>"; $ui.lrinterfacecontainer ="interfacecontainerdiv"; $ui.interfacesize = "<?php if(isset($loginRadiusSettings['LoginRadius_interfaceSize'])){ echo trim($loginRadiusSettings['LoginRadius_interfaceSize']); }?>"; <?php if(isset($loginRadiusSettings['LoginRadius_numColumns']) && trim($loginRadiusSettings['LoginRadius_numColumns']) != ""){ echo '$ui.noofcolumns = '.trim($loginRadiusSettings['LoginRadius_numColumns']).';'; } ?> $ui.lrinterfacebackground = "<?php if(isset($loginRadiusSettings['LoginRadius_backgroundColor'])){ echo trim($loginRadiusSettings['LoginRadius_backgroundColor']); } ?>"; LoginRadius_SocialLogin.init(options); });

		 </script>

		<?php

	}

}



/** 

 * Check if buddypress is active.

 */

function login_radius_is_bp_active(){

	global $loginRadiusDs;

	if(is_plugin_active("buddypress".$loginRadiusDs."bp-loader.php")){

		return true;

	}

	return false;

}



/** 

 * Validate url.

 */

function login_radius_validate_url($url){

    $validUrlExpression = "/^(http:\/\/|https:\/\/|ftp:\/\/|ftps:\/\/|)?[a-z0-9_\-]+[a-z0-9_\-\.]+\.[a-z]{2,4}(\/+[a-z0-9_\.\-\/]*)?$/i";

    return (bool)preg_match($validUrlExpression, $url);

}



/** 

 * Get callback parameter of the social login iframe.

 */

function login_radius_get_callback($http){

	$loc = urlencode($http.$_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"]); 

	if(urldecode($loc) == wp_login_url() OR urldecode($loc) == site_url().'/wp-login.php?action=register' OR urldecode($loc) == site_url().'/wp-login.php?loggedout=true'){ 

		$loc = site_url().'/';

	}elseif(isset($_GET['redirect_to']) && (urldecode($_GET['redirect_to']) == admin_url())){

		$loc = site_url().'/'; 

	}elseif(isset($_GET['redirect_to'])){ 

		if(login_radius_validate_url(urldecode($_GET['redirect_to'])) && (strpos(urldecode($_GET['redirect_to']), 'http://') !== false || strpos(urldecode($_GET['redirect_to']), 'https://') !== false)){

			$loc = $_GET['redirect_to'];

		}else{

			$loc = site_url().'/';

		}

	}else{ 

		$loc = urlencode($http.$_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"]); 

	}

	return $loc; 

} 



/** 

 * Display Social Login interface.

 */ 

function Login_Radius_Connect_button($newInterface = false){

	global $loginRadiusSettings;

	$title = $loginRadiusSettings['LoginRadius_title'];

	if(!is_user_logged_in()){

		if($newInterface){ 

			$result = "<div style='margin-bottom: 3px;'>";

			if(trim($loginRadiusSettings['LoginRadius_apikey']) != "" && trim($loginRadiusSettings['LoginRadius_secret']) != ""){

				$result .= "<label>".$title."</label>";

			}

			$result .= "</div>".login_radius_get_interface($newInterface);

			return $result;

		}else{

			?> 

			<div>

			<div style='margin-bottom: 3px;'><?php if(trim($loginRadiusSettings['LoginRadius_apikey']) != "" && trim($loginRadiusSettings['LoginRadius_secret']) != ""){?><label><?php _e( $title, 'LoginRadius' ) ?></label><?php } ?></div>

			<?php

			login_radius_get_interface($newInterface);

			?>

			</div>

			<?php 

		} 

	} 

} 



/** 

 * Get Socisl Login iframe. 

 */  

function login_radius_get_interface($newInterface = false){

	global $loginRadiusSettings, $loginRadiusObject;

	$loginRadiusApiKey = trim($loginRadiusSettings['LoginRadius_apikey']); 

	$loginRadiusSecret = trim($loginRadiusSettings['LoginRadius_secret']); 

	$loginRadiusError = "<div style='background-color: #FFFFE0;border:1px solid #E6DB55;padding:5px;'><p style ='color:red;'>Your LoginRadius API key or secret is not valid, please correct it or contact LoginRadius support at <b><a href ='http://www.loginradius.com' target = '_blank'>www.LoginRadius.com</a></b></p></div>"; 

	if(empty($loginRadiusSecret)){

		$loginRadiusResult = "";

	}elseif(!$loginRadiusObject->loginradiusValidateKey($loginRadiusApiKey) || !$loginRadiusObject->loginradiusValidateKey($loginRadiusSecret)){

		$loginRadiusResult = $loginRadiusError;

	}else{

		$loginRadiusResult = '<div class="interfacecontainerdiv"></div>';

	}

	// return/print interface HTML

	if(!$newInterface){ 

		echo $loginRadiusResult; 

	}else{ 

		return $loginRadiusResult; 

	} 

}



/** 

 * Display social login interface in widget area. 

 */	 

function Login_Radius_widget_Connect_button(){ 

	if(!is_user_logged_in()){

		login_radius_get_interface(); 

	} 

	// On user Login show user details. 

	if(is_user_logged_in() && !is_admin()){ 

		global $loginRadiusSettings; 

		global $user_ID;

		$size ='60';

		$user = get_userdata($user_ID);

		echo "<div style='height:80px;width:180px'><div style='width:63px;float:left;'>";

		$currentSocialId = get_user_meta($user_ID, 'loginradius_current_id', true);

		if(($userAvatar = get_user_meta($user_ID, 'loginradius_'.$currentSocialId.'_thumbnail', true)) !== false && strlen(trim($userAvatar)) > 0){

			echo '<img alt="user social avatar" src="'.$userAvatar.'" height = "'.$size.'" width = "'.$size.'" title="'.$user->user_login.'" style="border:2px solid #e7e7e7;"/>';

		}elseif(($userAvatar = get_user_meta($user_ID, 'loginradius_thumbnail', true)) !== false && strlen(trim($userAvatar)) > 0){

			echo '<img alt="user social avatar" src="'.$userAvatar.'" height = "'.$size.'" width = "'.$size.'" title="'.$user->user_login.'" style="border:2px solid #e7e7e7;"/>';

		}else{

			echo @get_avatar($user_ID, $size, $default, $alt);   

		}

		echo "</div><div style='width:100px; float:left; margin-left:10px'>"; 

		echo $user->user_login;

		if($loginRadiusSettings['LoginRadius_loutRedirect'] == 'custom' && !empty($loginRadiusSettings['custom_loutRedirect'])){ 

			$redirect = htmlspecialchars($loginRadiusSettings["custom_loutRedirect"]); 

		}else{ 

			$redirect = home_url();?>

			<?php  

		} 

		?> 

		<br/><a href="<?php echo wp_logout_url($redirect);?>"><?php _e('Log Out', 'LoginRadius');?></a></div></div><?php  

	} 

}



global $loginRadiusSettings;

// social share 

if(isset($loginRadiusSettings['LoginRadius_shareEnable']) && $loginRadiusSettings['LoginRadius_shareEnable'] == '1'){ 

	require_once('LoginRadius_socialShare.php'); 

} 



// Set Social Login position in "beside" mode

require_once('LoginRadius_location.php');

// display social login on login form

if(isset($loginRadiusSettings['LoginRadius_loginform']) && $loginRadiusSettings['LoginRadius_loginform'] == '1' && isset($loginRadiusSettings['LoginRadius_loginformPosition']) && $loginRadiusSettings['LoginRadius_loginformPosition'] == "embed"){

	add_action('login_form', 'Login_Radius_Connect_button'); 

	add_action('bp_before_sidebar_login_form', 'Login_Radius_Connect_button'); 

}

// show Social Login interface before buddypress login form and register form

if((isset($loginRadiusSettings['LoginRadius_loginform']) && $loginRadiusSettings['LoginRadius_loginform'] == '1' && isset($loginRadiusSettings['LoginRadius_loginformPosition']) && $loginRadiusSettings['LoginRadius_loginformPosition'] == "beside") || (isset($loginRadiusSettings['LoginRadius_regform']) && $loginRadiusSettings['LoginRadius_regform'] == '1' && isset($loginRadiusSettings['LoginRadius_regformPosition']) && $loginRadiusSettings['LoginRadius_regformPosition'] == "beside")){ 

	add_action('login_head', 'login_radius_login_interface'); 

	if($loginRadiusSettings['LoginRadius_loginformPosition'] == "beside"){

		add_action('bp_before_sidebar_login_form', 'Login_Radius_Connect_button'); 

	} 

	if($loginRadiusSettings['LoginRadius_regformPosition'] == "beside"){

		add_action('bp_before_account_details_fields', 'Login_Radius_Connect_button');

	} 

}

// display Social Login interface on register form in embed mode

if(isset($loginRadiusSettings['LoginRadius_regform']) && $loginRadiusSettings['LoginRadius_regform'] == '1' && isset($loginRadiusSettings['LoginRadius_regformPosition']) && $loginRadiusSettings['LoginRadius_regformPosition'] == "embed"){ 

	add_action('register_form', 'Login_Radius_Connect_button'); 

	add_action('after_signup_form','Login_Radius_Connect_button'); 

	add_action('bp_before_account_details_fields', 'Login_Radius_Connect_button'); 

} 



// show social login interface on comment form

if(isset($loginRadiusSettings['LoginRadius_commentEnable']) && $loginRadiusSettings['LoginRadius_commentEnable'] == '1'){

	global $user_ID;

	if(get_option('comment_registration') && intval($user_ID) == 0 && $loginRadiusSettings['LoginRadius_commentform'] != ""){

		add_action('comment_form_must_log_in_after','Login_Radius_Connect_button'); 

	}elseif(isset($loginRadiusSettings['LoginRadius_commentInterfacePosition'])){

		switch($loginRadiusSettings['LoginRadius_commentInterfacePosition']){

			case 'very_top':

				$commentHook = 'comment_form_before';

				break;

			case 'before_fields':

				$commentHook = 'comment_form_before_fields';

				break;

			case 'after_fields':

				$commentHook = 'comment_form_after_fields';

				break;

			case 'after_submit':

				$commentHook = 'comment_form';

				break;

			case 'very_bottom':

				$commentHook = 'comment_form_after';

				break;

			case 'after_leave_reply':

			default:

				$commentHook = 'comment_form_top';

		}

		add_action($commentHook,'Login_Radius_Connect_button');

	} 

} 



/** 

 * Redirect users after login. 

 */	 

function login_radius_redirect($user_id){

	global $loginRadiusSettings; 

	$loginRedirect = $loginRadiusSettings['LoginRadius_redirect']; 

	$customRedirectUrl = trim($loginRadiusSettings['custom_redirect']); 

	$redirectionUrl = site_url();

	$safeRedirection = false; 

	if(!empty($_GET['redirect_to'])){

		$redirectionUrl = $_GET['redirect_to'];

		$safeRedirection = true; 

	}else{

		if(isset($loginRedirect)){

			switch(strtolower($loginRedirect)){ 

				case 'homepage': 

					$redirectionUrl = site_url().'/'; 		 

					break; 

				case 'dashboard': 

					$redirectionUrl = admin_url(); 

					break; 

				case 'bp': 

					if(login_radius_is_bp_active()){

						$redirectionUrl = bp_core_get_user_domain($user_id); 

					}else{

						$redirectionUrl = admin_url();	

					}  

					break; 

				case 'custom':

					if(isset($loginRedirect) && strlen($customRedirectUrl) > 0 && login_radius_validate_url($customRedirectUrl)){ 

						$redirectionUrl = trim($customRedirectUrl); 

					}else{

						$redirectionUrl = site_url().'/'; 		 

					}

					break; 

				default: 

				case 'samepage':

					if(strpos($_SERVER['HTTP_REFERER'], "&callback=") !== false){

						$redirectionUrl = urldecode(substr($_SERVER['HTTP_REFERER'], strpos($_SERVER['HTTP_REFERER'], "&callback=")+10));

					}else{

						$redirectionUrl = site_url();

					}

					break; 

			} 

		} 

	} 

	if($safeRedirection){

		wp_redirect($redirectionUrl);

		exit();

	}else{

		wp_safe_redirect($redirectionUrl);

		exit();

	}

} 

/** 

 * Return Sharing code. 

 */	   

function login_radius_get_sharing_code(){

	global $loginRadiusSettings, $post;

	$sharingScript = '<script type="text/javascript">var islrsharing = true; var islrsocialcounter = true;</script> <script type="text/javascript" src="//share.loginradius.com/Content/js/LoginRadius.js" id="lrsharescript"></script>';

	$sharingScript .= '<script type="text/javascript">';

	// horizontal sharing theme

	if(isset($loginRadiusSettings['horizontal_shareEnable']) && $loginRadiusSettings['horizontal_shareEnable'] == "1"){

		// interface

		if($loginRadiusSettings['horizontalSharing_theme'] == "32" || $loginRadiusSettings['horizontalSharing_theme'] == "16"){

			$interface = 'horizontal';

		}elseif($loginRadiusSettings['horizontalSharing_theme'] == "single_large" || $loginRadiusSettings['horizontalSharing_theme'] == "single_small"){

			$interface = 'simpleimage';

		}elseif($loginRadiusSettings['horizontalSharing_theme'] == "counter_horizontal" || $loginRadiusSettings['horizontalSharing_theme'] == "counter_vertical"){

			// set counter variables

			$interface = 'simple';

			$isHorizontal = "true";

			// interface

			if($loginRadiusSettings['horizontalSharing_theme'] == "counter_vertical"){

				$type = 'vertical';

			}else{

				$type = 'horizontal';

			}

		}else{

			$interface = 'horizontal';

		}

		// size

		if($loginRadiusSettings['horizontalSharing_theme'] == "32" || $loginRadiusSettings['horizontalSharing_theme'] == "single_large"){

			$size = '32';

		}elseif($loginRadiusSettings['horizontalSharing_theme'] == "16" || $loginRadiusSettings['horizontalSharing_theme'] == "single_small"){

			$size = '16';

		}else{

			$size = '32';

		}

		// counter providers

		if($loginRadiusSettings['horizontalSharing_theme'] == "counter_horizontal" || $loginRadiusSettings['horizontalSharing_theme'] == "counter_vertical"){

			if(isset($loginRadiusSettings['horizontal_counter_providers']) && is_array($loginRadiusSettings['horizontal_counter_providers'])){

				$providers = implode('","', $loginRadiusSettings['horizontal_counter_providers']);

			}else{

				$providers = 'Facebook Like","Google+ +1","Pinterest Pin it","LinkedIn Share","Hybridshare';

			}

			// prepare counter script

			$sharingScript .= 'LoginRadius.util.ready(function () { $SC.Providers.Selected = ["'.$providers.'"]; $S = $SC.Interface.'.$interface.'; $S.isHorizontal = '.$isHorizontal.'; $S.countertype = \''.$type.'\'; $S.show("loginRadiusHorizontalSharing"); });';

		}else{

			// sharing providers

			if(isset($loginRadiusSettings['horizontal_rearrange_providers']) && count($loginRadiusSettings['horizontal_rearrange_providers']) > 0){

				$providers = implode('","', $loginRadiusSettings['horizontal_rearrange_providers']);

			}else{

				$providers = 'Facebook","Twitter","GooglePlus","LinkedIn","Pinterest","Print","Email';

			}

			// prepare sharing script

			$sharingScript .= 'LoginRadius.util.ready(function() { $i = $SS.Interface.'.$interface.'; $SS.Providers.Top = ["'.$providers.'"]; $u = LoginRadius.user_settings;';

			if(isset($loginRadiusSettings["LoginRadius_apikey"]) && trim($loginRadiusSettings["LoginRadius_apikey"]) != ""){

				$sharingScript .= '$u.apikey= \''.trim($loginRadiusSettings["LoginRadius_apikey"]).'\';';

			}

			$sharingScript .= '$i.size = '.$size.'; $u.sharecounttype="url"; $i.show("loginRadiusHorizontalSharing"); });';

		}

	}

	// vertical sharing interface

	if(isset($loginRadiusSettings['vertical_shareEnable']) && $loginRadiusSettings['vertical_shareEnable'] == "1"){

		// relative vertical position

		if($loginRadiusSettings['sharing_verticalPosition'] == 'top_left'){

			$position1 = 'top';

			$position2 = 'left';

		}elseif($loginRadiusSettings['sharing_verticalPosition'] == 'top_right'){

			$position1 = 'top';

			$position2 = 'right';

		}elseif($loginRadiusSettings['sharing_verticalPosition'] == 'bottom_left'){

			$position1 = 'bottom';

			$position2 = 'left';

		}else{

			$position1 = 'bottom';

			$position2 = 'right';

		}

		// interface top offset

		if($loginRadiusSettings['verticalSharing_theme'] == "counter_horizontal" || $loginRadiusSettings['verticalSharing_theme'] == "counter_vertical"){

			$sharingVariable = 'S';

		}else{

			$sharingVariable = 'i';

		}

		$offset = "";

		if(isset($loginRadiusSettings['sharing_offset']) && trim($loginRadiusSettings['sharing_offset']) != ""){

			$offset = '$'.$sharingVariable.'.top = \''.trim($loginRadiusSettings['sharing_offset']).'px\'; $'.$sharingVariable.'.'.$position2.' = \'0px\';';

		}else{

			$offset = '$'.$sharingVariable.'.'.$position1.' = \'0px\'; $'.$sharingVariable.'.'.$position2.' = \'0px\';';

		}

		

		$interface = 'Simplefloat';

		if($loginRadiusSettings['verticalSharing_theme'] == "32"){

			$size = '32';

		}elseif($loginRadiusSettings['verticalSharing_theme'] == "16"){

			$size = '16';

		}elseif($loginRadiusSettings['verticalSharing_theme'] == "counter_horizontal" || $loginRadiusSettings['verticalSharing_theme'] == "counter_vertical"){

			$interface = 'simple';

			$isHorizontal = "false";

			if($loginRadiusSettings['verticalSharing_theme'] == "counter_vertical"){

				$type = 'vertical';

			}elseif($loginRadiusSettings['verticalSharing_theme'] == "counter_horizontal"){

				$type = 'horizontal';

			}

		}else{

			$size = '16';

		}

		

		// counter providers

		if($loginRadiusSettings['verticalSharing_theme'] == "counter_horizontal" || $loginRadiusSettings['verticalSharing_theme'] == "counter_vertical"){

			if(isset($loginRadiusSettings['vertical_counter_providers']) && is_array($loginRadiusSettings['vertical_counter_providers'])){

				$providers = implode('","', $loginRadiusSettings['vertical_counter_providers']);

			}else{

				$providers = 'Facebook Like","Google+ +1","Pinterest Pin it","LinkedIn Share","Hybridshare';

			}

			// prepare counter script

			$sharingScript .= 'LoginRadius.util.ready(function () { $SC.Providers.Selected = ["'.$providers.'"]; $S = $SC.Interface.'.$interface.'; $S.isHorizontal = '.$isHorizontal.'; $S.countertype = \''.$type.'\'; '.$offset.' $S.show("loginRadiusVerticalSharing"); });';

		}else{

			// sharing providers

			if(isset($loginRadiusSettings['vertical_rearrange_providers']) && count($loginRadiusSettings['vertical_rearrange_providers']) > 0){

				$providers = implode('","', $loginRadiusSettings['vertical_rearrange_providers']);

			}else{

				$providers = 'Facebook","Twitter","GooglePlus","LinkedIn","Pinterest","Print","Email';

			}

			// prepare sharing script

			$sharingScript .= 'LoginRadius.util.ready(function() { $i = $SS.Interface.'.$interface.'; $SS.Providers.Top = ["'.$providers.'"]; $u = LoginRadius.user_settings;';

			if(isset($loginRadiusSettings["LoginRadius_apikey"]) && trim($loginRadiusSettings["LoginRadius_apikey"]) != ""){

				$sharingScript .= '$u.apikey= \''.trim($loginRadiusSettings["LoginRadius_apikey"]).'\';';

			}

			$sharingScript .= '$i.size = '.$size.'; '.$offset.' $i.show("loginRadiusVerticalSharing"); });';

		}

	}

	$sharingScript .= '</script>';

	echo $sharingScript;

}



/** 

 * Auto approve comments if user logs in through social login.

 */ 

function login_radius_approve_comment($approved){

	global $loginRadiusSettings; 

	if(empty($approved)){

		if($loginRadiusSettings['LoginRadius_autoapprove'] == '1'){ 

			$user_id = get_current_user_id(); 

			if(is_numeric($user_id)){

				$commentUser = get_user_meta($user_id, 'loginradius_provider_id', true); 

				if($commentUser !== false){ 

					$approved = 1; 

				} 

			} 

		} 

	} 

	return $approved; 

}

// check if auto approve comment option is checked

if(isset($loginRadiusSettings['LoginRadius_autoapprove']) && $loginRadiusSettings['LoginRadius_autoapprove'] == '1'){

	add_action('pre_comment_approved', 'login_radius_approve_comment');

}



/** 

 * Shortcode for social sharing.

 */ 

function login_radius_sharing_shortcode($params){

	extract(shortcode_atts(array(

		'style' => '',

		'type' => 'horizontal'

	), $params));

	$return = '<div ';

	// sharing theme type

	if($type == "vertical"){

		$return .= 'class="loginRadiusVerticalSharing" ';

	}else{

		$return .= 'class="loginRadiusHorizontalSharing" ';

	}

	// style 

	if($style != ""){

		$return .= 'style="'.$style.'"';

	}

	$return .= '></div>';

	return $return;

}

add_shortcode('LoginRadius_Share', 'login_radius_sharing_shortcode');



/** 

 * Shortcode for social counter.

 * Deprecated since version 4.7 

 */ 

function login_radius_counter_shortcode($params){

	extract(shortcode_atts(array(

		'style' => ''

	), $params));

	$return = '<div class="loginRadiusHorizontalSharing" ';

	if($style != ""){

		$return .= 'style="'.$style.'"';

	}

	$return .= '></div>';

	return $return;

}

add_shortcode('LoginRadius_Counter', 'login_radius_counter_shortcode');



/** 

 * Shortcode for social login.

 */ 

function login_radius_login_shortcode($params){

	extract(shortcode_atts(array(

		'style' => ''

	), $params));

	if($style != ""){

		?>

		<div style="<?php echo $style; ?>">

		<?php

	}

	Login_Radius_Connect_button();

	if($style != ""){

		?>

		</div>

		<?php

	}

}

add_shortcode('LoginRadius_Login', 'login_radius_login_shortcode');



// replicate Social Login configuration to the subblogs in the multisite network

if(is_multisite() && is_main_site()){

	// replicate the social login config to the new blog created in the multisite network

	function login_radius_replicate_settings($blogId){

		global $loginRadiusSettings;

		add_blog_option($blogId, 'LoginRadius_settings', $loginRadiusSettings);

	}

	add_action('wpmu_new_blog', 'login_radius_replicate_settings');

	// update the social login options in all the old blogs

	function login_radius_update_old_blogs($oldConfig){

	    $newConfig = get_option('LoginRadius_settings');

		if(isset($newConfig['multisite_config']) && $newConfig['multisite_config'] == "1"){

			$blogs = get_blog_list(0, 'all');

			foreach($blogs as $blog){

				update_blog_option($blog['blog_id'], 'LoginRadius_settings', $newConfig);

			}

		}

	}

    add_action('update_option_LoginRadius_settings', 'login_radius_update_old_blogs');

}



/** 

 * Update mapping fields in database.

 */ 

function login_radius_map_id($id, $lrid, $provider, $thumb){

	add_user_meta($id, 'loginradius_provider_id', $lrid);

	add_user_meta($id, 'loginradius_mapped_provider', $provider); 

	add_user_meta($id, 'loginradius_'.$provider.'_id', $lrid);

	if($thumb != ""){

		add_user_meta($id, 'loginradius_'.$lrid.'_thumbnail', $thumb);

	}

} 



/** 

 * Mapping functionality.

 */ 

function login_radius_mapping(){

	global $pagenow; 

	if($pagenow == "profile.php"){

		global $wpdb, $user_ID, $loginRadiusSettings;

		// if remove button clicked

		if(isset($_GET['loginRadiusMap']) && !empty($_GET['loginRadiusMap']) && isset($_GET['loginRadiusMappingProvider']) && !empty($_GET['loginRadiusMappingProvider'])){

			$loginRadiusMapId = trim($_GET['loginRadiusMap']);

			$loginRadiusMapProvider = trim($_GET['loginRadiusMappingProvider']);

			// remove account

			delete_user_meta($user_ID, 'loginradius_provider_id', $loginRadiusMapId);

			if(isset($_GET['loginRadiusMain'])){

				delete_user_meta($user_ID, 'loginradius_thumbnail');

				delete_user_meta($user_ID, 'loginradius_provider');

			}else{

				delete_user_meta($user_ID, 'loginradius_'.$loginRadiusMapId.'_thumbnail');

				$wpdb->query($wpdb->prepare("delete FROM $wpdb->usermeta WHERE user_id = %d AND meta_key = 'loginradius_mapped_provider' AND meta_value = %s limit 1", $user_ID, $loginRadiusMapProvider));

				delete_user_meta($user_ID, 'loginradius_'.$loginRadiusMapProvider.'_id', $loginRadiusMapId);

			}

			?>

			<script type="text/javascript">

				location.href = "<?php echo admin_url( 'profile.php' ); ?>";

			</script>

			<?php

			die;

		} 

		echo '<div id="loginRadiusError" style="background-color: #FFEBE8; border:1px solid #CC0000; display:none; padding:5px; margin:5px">';

		_e('This account is already mapped', 'LoginRadius');

		echo '</div>';

		echo '<div id="loginRadiusSuccess" style="background-color: #FFFFE0; border:1px solid #E6DB55; display:none; padding:5px; margin:5px">';

		_e('Account mapped successfully', 'LoginRadius');

		echo '</div>';

		?>

		<div class="metabox-holder columns-2" id="post-body">

		<div class="stuffbox" style="width:60%; padding-bottom:10px">

		<h3><label><?php _e('Link your account', 'LoginRadius'); ?></label></h3>

		<div class="inside" style='padding:0'>

		<table width="100%" border="0" cellspacing="0" cellpadding="0" class="form-table editcomment">

		<tr>

			<td colspan="2"><?php _e('By adding another account, you can log in with the new account as well!', 'LoginRadius') ?></td>

		</tr>

		<tr>

			<td colspan="2">

		<?php

		login_radius_login_script();

		login_radius_get_interface();

		?>

			</td>

		</tr>

		<?php

		$LoginRadiusSecret = $loginRadiusSettings['LoginRadius_secret']; 

		global $loginRadiusObject;

		$loginRadiusMappingData = array(); 

		$loginRadiusUserprofile = $loginRadiusObject->login_radius_get_userprofile_data($LoginRadiusSecret);

		if($loginRadiusObject->IsAuthenticated == true && is_user_logged_in()){

			$loginRadiusMappingData['id'] = (!empty($loginRadiusUserprofile->ID) ? $loginRadiusUserprofile->ID : ''); 

			$loginRadiusMappingData['provider'] = (!empty($loginRadiusUserprofile->Provider) ? $loginRadiusUserprofile->Provider : '');

			$loginRadiusMappingData['thumbnail'] = (!empty($loginRadiusUserprofile->ImageUrl) ? trim($loginRadiusUserprofile->ImageUrl) : '');

			if(empty($loginRadiusMappingData['thumbnail']) && $loginRadiusMappingData['provider'] == 'facebook'){

				$loginRadiusMappingData['thumbnail'] = "http://graph.facebook.com/" . $loginRadiusMappingData['id'] . "/picture?type=large";

			}

			$wp_user_id = $wpdb->get_var($wpdb->prepare("SELECT user_id FROM $wpdb->usermeta WHERE meta_key='loginradius_provider_id' AND meta_value = %s", $loginRadiusMappingData['id'])); 

			if(!empty($wp_user_id)){

				// Check if verified field exist or not. 

				$loginRadiusVfyExist = $wpdb->get_var($wpdb->prepare("SELECT user_id FROM $wpdb->usermeta WHERE user_id = %d AND meta_key = 'loginradius_isVerified'", $wp_user_id)); 

				if(!empty($loginRadiusVfyExist)){	// if verified field exists 

					$loginRadiusVerify = $wpdb->get_var($wpdb->prepare("SELECT meta_value FROM $wpdb->usermeta WHERE user_id = %d AND meta_key = 'loginradius_isVerified'", $wp_user_id)); 

					if($loginRadiusVerify != '1'){

						login_radius_map_id($user_ID, $loginRadiusMappingData['id'], $loginRadiusMappingData['provider'], $loginRadiusMappingData['thumbnail']);

						?>

						<script type="text/javascript">

							document.getElementById('loginRadiusSuccess').style.display = "block";

						</script>

						<?php

					}else{

						//account already mapped

						?>

						<script type="text/javascript">

							document.getElementById('loginRadiusError').style.display = "block";

						</script>

						<?php 

					} 

				}else{

					?>

					<script type="text/javascript">

						document.getElementById('loginRadiusError').style.display = "block";

					</script>

					<?php

				} 

			}else{

				$loginRadiusMappingProvider = $loginRadiusMappingData['provider'];

				$wp_user_lrid = $wpdb->get_var($wpdb->prepare("SELECT user_id FROM $wpdb->usermeta WHERE meta_key='".$loginRadiusMappingProvider."Lrid' AND meta_value = %s", $loginRadiusMappingData['id'])); 

				if(!empty($wp_user_lrid)){

					$lrVerified = get_user_meta($wp_user_lrid, $loginRadiusMappingProvider.'LrVerified', true);

					if($lrVerified == '1'){		// Check if lrid is the smae that verified email. 

						// acount already mapped

						?>

						<script type="text/javascript">

							document.getElementById('loginRadiusError').style.display = "block";

						</script>

						<?php

					}else{

						// map account 

						login_radius_map_id($user_ID, $loginRadiusMappingData['id'], $loginRadiusMappingData['provider'], $loginRadiusMappingData['thumbnail']); 

						?>

						<script type="text/javascript">

							document.getElementById('loginRadiusSuccess').style.display = "block";

						</script>

						<?php

					} 

				}else{

					// map account 

					login_radius_map_id($user_ID, $loginRadiusMappingData['id'], $loginRadiusMappingData['provider'], $loginRadiusMappingData['thumbnail']);

					?>

					<script type="text/javascript">

						document.getElementById('loginRadiusSuccess').style.display = "block";

					</script>

					<?php 

				} 

			} 

		} 

		// show mapping list 

		$loginRadiusMappings = get_user_meta( $user_ID, 'loginradius_mapped_provider', false );

		$loginRadiusMappings = array_unique($loginRadiusMappings);

		$connected = false;

		$loginRadiusLoggedIn = get_user_meta($user_ID, 'loginradius_current_id', true);

		?>

			<?php

			$totalAccounts = get_user_meta($user_ID, 'loginradius_provider_id');

			if(count($loginRadiusMappings) > 0){

				foreach($loginRadiusMappings as $map){

					$loginRadiusMappingId = get_user_meta($user_ID, 'loginradius_'.$map.'_id');

					if(count($loginRadiusMappingId) > 0){

						foreach($loginRadiusMappingId as $tempId){

							?> 

							<tr style='border-top:1px solid rgb(243, 243, 243)'>							

							<?php

							if($loginRadiusLoggedIn == $tempId){

								$append = "<span style='color:green'>Currently </span>";

								$connected = true;

							}else{

								$append = "";

							}

							echo "<td>".$append;

							echo _e("Connected with", "LoginRadius");

							echo "<strong> ".ucfirst($map)."</strong> <img src='".plugins_url('images/linking/' . $map. '.png', __FILE__)."' align='absmiddle' style='margin-left:5px' /></td><td>";

							if(count($totalAccounts) != 1){

								?>

								<a href='<?php echo admin_url( 'profile.php' )?>?loginRadiusMap=<?php echo $tempId; ?>&loginRadiusMappingProvider=<?php echo $map; ?>' ><input type='button' class='button-primary' value='<?php _e('Remove', 'LoginRadius'); ?>' /></a>

								<?php

							}

							echo "</td>";

							?>

							</tr> 

							<?php 

						}

					}

				} 

			}

			$map = get_user_meta($user_ID, 'loginradius_provider', true);

			if($map != false){

				?>

				<tr style='border-top:1px solid rgb(243, 243, 243)'> 

				<?php

				$tempId = $loginRadiusLoggedIn;

				$append = !$connected ? "<span style='color:green'>Currently </span>" : ""; 

				echo "<th style='width:41%'>".$append;

				echo _e("Connected with", "LoginRadius");

				echo "<strong> ".ucfirst($map)."</strong> <img src='".plugins_url('images/linking/' . $map. '.png', __FILE__)."' align='absmiddle' style='margin-left:5px' /></th><td>";

				if(count($totalAccounts) != 1){

					?>

					<a href='<?php echo admin_url( 'profile.php' )?>?loginRadiusMain=1&loginRadiusMap=<?php echo $tempId; ?>&loginRadiusMappingProvider=<?php echo $map; ?>' ><input type='button' class='button-primary' value='<?php _e('Remove', 'LoginRadius'); ?>' /></a>

					<?php

				}

				echo "</td>";

				?> 

				</tr>

				<?php

			}

			?> 

			</table>

			</div>

			</div>

		</div>

		<?php 

		//echo '</div>'; 

	} 

} 

add_action('admin_notices', 'login_radius_mapping');



/** 

 * Delete the field holding current provider information.

 */ 

function login_radius_delete_meta(){

	global $user_ID; 

	delete_user_meta($user_ID, 'loginradius_current_id');

}

add_action('clear_auth_cookie', 'login_radius_delete_meta' );



// check if provider column to be shown in the user list.

if((isset($loginRadiusSettings['LoginRadius_noProvider']) && $loginRadiusSettings['LoginRadius_noProvider'] != "1") || (isset($loginRadiusSettings['LoginRadius_enableUserActivation']) && $loginRadiusSettings['LoginRadius_enableUserActivation'] == "1")){

    // add provider column in the user list

	function login_radius_add_provider_column($columns){

		global $loginRadiusSettings;

		if(isset($loginRadiusSettings['LoginRadius_noProvider']) && $loginRadiusSettings['LoginRadius_noProvider'] != "1"){

			$columns['loginradius_provider'] = 'LoginRadius Provider';

		}

		if(isset($loginRadiusSettings['LoginRadius_enableUserActivation']) && $loginRadiusSettings['LoginRadius_enableUserActivation'] == "1"){

			$columns['loginradius_status'] = 'Status';

		}

		return $columns;

	}

	add_filter('manage_users_columns', 'login_radius_add_provider_column');

	// show social ID provider in the provider column

	function login_radius_show_provider($value, $columnName, $userId){

		global $loginRadiusSettings;

		if(isset($loginRadiusSettings['LoginRadius_noProvider']) && $loginRadiusSettings['LoginRadius_noProvider'] != "1"){

			$lrProvider = get_user_meta($userId, 'loginradius_provider', true);

			$lrProvider = ($lrProvider == false) ? "-" : $lrProvider;

			if('loginradius_provider' == $columnName){

				return ucfirst($lrProvider);

			}

		}

		if(isset($loginRadiusSettings['LoginRadius_enableUserActivation']) && $loginRadiusSettings['LoginRadius_enableUserActivation'] == "1"){

			if($userId == 1){

				return;

			}

			if(($lrStatus = get_user_meta($userId, 'loginradius_status', true)) == "" || $lrStatus == '1'){

				$lrStatus = '1';

			}else{

				$lrStatus = '0';

			}

			if('loginradius_status' == $columnName){

				if($lrStatus == '1'){

					return '<span id="loginRadiusStatus'.$userId.'"><a alt="Active (Click to Disable)" title="Active (Click to Disable)" href="javascript:void(0)" onclick="loginRadiusChangeStatus('.$userId.', '.$lrStatus.')" ><img height="20" width="20" src="'.plugins_url("images/enable.png", __FILE__).'" /></a></span>';

				}else{

					return '<span id="loginRadiusStatus'.$userId.'"><a alt="Inactive (Click to Enable)" title="Inactive (Click to Enable)" href="javascript:void(0)" onclick="loginRadiusChangeStatus('.$userId.', '.$lrStatus.')" ><img height="20" width="20" src="'.plugins_url("images/disable.png", __FILE__).'" /></a></span>';

				}

			}

		}

	}

	add_action('manage_users_custom_column', 'login_radius_show_provider', 10, 3);



	// add javascript on users.php in admin

	function loginradius_add_script(){

		global $parent_file;

		if($parent_file == 'users.php'){

			?>

			<script type="text/javascript">

			function loginRadiusChangeStatus(userId, currentStatus){

				jQuery('#loginRadiusStatus'+userId).html('<img width="20" height="20" title="<?php _e('Please wait', 'LoginRadius') ?>..." src="<?php echo plugins_url("images/loading_icon.gif", __FILE__) ?>" />');

				jQuery.ajax({

				  type: 'POST',

				  url: '<?php echo get_admin_url() ?>admin-ajax.php',

				  data: {  

					  action: 'login_radius_change_user_status',

					  user_id: userId,

					  current_status: currentStatus

				  },

				  success: function(data, textStatus, XMLHttpRequest){

					if(data == 'done'){

						if(currentStatus == 0){

							jQuery('#loginRadiusStatus'+userId).html('<span id="loginRadiusStatus'+userId+'"><a href="javascript:void(0)" alt="<?php _e('Active (Click to Disable)', 'LoginRadius') ?>" title="<?php _e('Active (Click to Disable)', 'LoginRadius') ?>" onclick="loginRadiusChangeStatus('+userId+', 1)" ><img width="20" height="20" src="<?php echo plugins_url("images/enable.png", __FILE__) ?>" /></a></span>');

						}else if(currentStatus == 1){

							jQuery('#loginRadiusStatus'+userId).html('<span id="loginRadiusStatus'+userId+'"><a href="javascript:void(0)" alt="<?php _e('Inactive (Click to Enable)', 'LoginRadius') ?>" title="<?php _e('Inactive (Click to Enable)', 'LoginRadius') ?>" onclick="loginRadiusChangeStatus('+userId+', 0)" ><img width="20" height="20" src="<?php echo plugins_url("images/disable.png", __FILE__) ?>" /></a></span>');

						}

					}else if(data == 'error'){

						jQuery('#loginRadiusStatus'+userId).html('<span id="loginRadiusStatus'+userId+'"><a href="javascript:void(0)" alt="<?php _e('Active (Click to Disable)', 'LoginRadius') ?>" title="<?php _e('Active (Click to Disable)', 'LoginRadius') ?>" onclick="loginRadiusChangeStatus('+userId+', 1)" ><img width="20" height="20" src="<?php echo plugins_url("images/enable.png", __FILE__) ?>" /></a></span>');

					}

				  },

				  error: function(xhr, textStatus, errorThrown){

				  	  alert('<?php _e('Unexpected error occurred') ?>');

				  }

				});

			}

			</script>

			<?php

		}

	}

	if(isset($loginRadiusSettings['LoginRadius_enableUserActivation']) && $loginRadiusSettings['LoginRadius_enableUserActivation'] == "1"){

		add_filter('admin_head', 'loginradius_add_script');

	}

}

// keep track of the inactive user login attempts from traditional login form 

$loginRadiusLoginAttempt = 0;

/** 

 * Stop disabled user from logging in.

 */ 

function login_radius_filter_login($user, $username, $password) {

	$tempUser = get_user_by('login', $username);

	if(isset($tempUser->data->ID)){

		$id = $tempUser->data->ID;

		if(get_user_meta($id, 'loginradius_status', true) === '0'){

			global $loginRadiusLoginAttempt;

			$loginRadiusLoginAttempt = 1;

			return null;

		}

	}

	return $user;

}

add_filter('authenticate', 'login_radius_filter_login', 40, 3);



function login_radius_error_message($error){

	global $loginRadiusLoginAttempt;

    //check if inactive user has attempted to login

    if($loginRadiusLoginAttempt == 1){

        $error = __('Your account is currently inactive. You will be notified through email, once Administrator activates your account.', 'LoginRadius');

    }

    return $error;

}

add_filter('login_errors','login_radius_error_message');