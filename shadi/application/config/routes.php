<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route['admin'] = 'Admin/index';
$route['super_admin/dashboard'] = 'Admin/dashboard';

/*------User Screen------------*/
$route['user-dashboard'] = 'User/user_dashboard';
$route['user-change-password'] = 'User/user_change_password';
$route['user-chat'] = 'User/user_chat';
$route['user-create-support-ticket'] = 'User/user_create_support_ticket';
$route['user-gallery'] = 'User/user_gallery';
$route['user-ignored-list'] = 'User/user_ignored_list';
$route['user-interest-requests'] = 'User/user_interest_requests';
$route['user-interests'] = 'User/user_interests';
$route['user-notifications'] = 'User/user_notifications';
$route['user-package-purchase-history'] = 'User/user_package_purchase_history';
$route['user-profile-settings'] = 'User/user_profile_settings';
$route['user-referral-earnings'] = 'User/user_referral_earnings';
$route['user-shortlists'] = 'User/user_shortlists';
$route['user-support-ticket'] = 'User/user_support_ticket';
$route['user-wallet-recharge-methods'] = 'User/user_wallet_recharge_methods';
$route['user-wallet-withdraw-request-history'] = 'User/user_wallet_withdraw_request_history';
$route['user-wallet'] = 'User/user_wallet';



$route['story-details/(:any)'] = 'Welcome/story_details/$1';
$route['blog-details/(:any)'] = 'Welcome/blog_details/$1';
$route['member-profile/(:any)'] = 'Welcome/member_profile/$1';
 









$route['(:any)'] = 'Welcome/all/$1';