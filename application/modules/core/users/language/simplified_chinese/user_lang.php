<?php

$lang['user_register_header'] 	= '注册';
$lang['user_register_step1'] 	= '<strong>第一步:</strong> Register';
$lang['user_register_step2'] 	= '<strong>第二步:</strong> Activate';

$lang['user_login_header'] 		= '登录';

// titles
$lang['user_add_title'] = '添加用户';
$lang['user_inactive_title'] = '禁止用户';
$lang['user_active_title'] = '激活用户';
$lang['user_registred_title'] = '已注册用户';

// labels
$lang['user_edit_title'] = '编辑 "%s"';
$lang['user_details_label'] = '详细信息';
$lang['user_first_name_label'] = '名';
$lang['user_last_name_label'] = '姓';
$lang['user_email_label'] = '电子邮箱';
$lang['user_role_label'] = '角色';
$lang['user_activate_label'] = '激活';
$lang['user_password_label'] = '密码';
$lang['user_password_confirm_label'] = '密码确认';
$lang['user_name_label'] = '姓名';
$lang['user_joined_label'] = '加入';
$lang['user_last_visit_label'] = '最近一次访问';
$lang['user_actions_label'] = '操作';
$lang['user_never_label'] = '从不';
$lang['user_delete_label'] = '删除';
$lang['user_edit_label'] = '编辑';
$lang['user_view_label'] = '浏览';

$lang['user_no_inactives'] = '没有被禁用用户.';
$lang['user_no_registred'] = '没有注册用户.';

$lang['account_changes_saved'] = '对帐户的改动已经成功保存.';

$lang['indicates_required'] = '表明必须的域';

// -- Registration / Activation / Reset Password ----------------------------------------------------------

$lang['user_register_title'] = '注册';
$lang['user_activate_account_title'] = '激活帐户';
$lang['user_activate_label'] = '激活';
$lang['user_activated_account_title'] = '已激活的帐户';
$lang['user_reset_password_title'] = '重置密码';
$lang['user_password_reset_title'] = '密码重置';

$lang['user_full_name'] 	= '全名';
$lang['user_first_name'] 	= '名';
$lang['user_last_name'] 	= '姓';
$lang['user_email'] 		= '电子邮箱';
$lang['user_confirm_email'] = '确认电子邮箱';
$lang['user_password'] 		= '密码';
$lang['user_confirm_password'] = '确认密码';

$lang['user_level']			= '用户角色';
$lang['user_active']		= '激活';
$lang['user_lang']			= '语言';

$lang['user_activation_code'] = '激活码';

$lang['user_reset_password_link'] = '忘记密码?';

$lang['user_activation_code_sent_notice'] = '已经给您发送了一封包含激活码的电子邮件.';
$lang['user_activation_by_admin_notice'] = '您的注册资料等候管理员审核.';

// -- Settings ---------------------------------------------------------------------------------------------

$lang['user_details_section'] = '名字';
$lang['user_password_section'] = '改变密码';
$lang['user_other_settings_section'] = '其他设置';

$lang['user_settings_saved_success'] 	= '您帐户的设置已保存.';
$lang['user_settings_saved_error'] 		= '发生错误.';

// -- Buttons ----------------------------------------------------------------------------------------------

$lang['user_register_btn']		= '注册';
$lang['user_activate_btn']		= '激活';
$lang['user_reset_pass_btn'] 	= '重置密码';
$lang['user_login_btn'] 		= '登录';
$lang['user_settings_btn'] 		= '保存设置';

// -- Errors & Messages ------------------------------------------------------------------------------------

// Create
$lang['user_added_and_activated_success'] 		= '新用户已被创建并激活.';
$lang['user_added_not_activated_success'] 		= '新用户已创建,帐户需要激活.';

// Edit
$lang['user_edit_user_not_found_error'] 			= '用户不存在.';
$lang['user_edit_success'] 										= '用户资料已成功更新.';
$lang['user_edit_error'] 											= '试图更新用户资料时出错.';

// Activate
$lang['user_activate_success'] 								= '%s users out of %s successfully activated.';
$lang['user_activate_error'] 									= '您需要先选择用户.';

// Delete
$lang['user_delete_self_error'] 							= '您不能删除您自己!';
$lang['user_mass_delete_success'] 						= '%s users out of %s successfully deleted.';
$lang['user_mass_delete_error'] 							= '您需要先选择用户.';

// Register
$lang['user_email_pass_missing'] = '电子邮件核密码没有填写完.';
$lang['user_email_exists'] = '您选择的电子邮箱已有别的用户在使用.';
$lang['user_register_reasons'] = 'Join up to access special areas normally restricted. This means your settings will be remembered, more content and less ads.';


// Activation
$lang['user_activation_incorrect']   = '激活失败.请检查您的详细资料并确保键盘上的Caps Lock键没有开启.';
$lang['user_activated_message']   = '您的帐户已被激活, 您现在可以登录到您的帐户.';


// Login
$lang['user_already_logged_in'] = '您已登录.请重试前先退出.';
$lang['user_login_incorrect'] = '电子邮箱核密码不匹配.请检查您的登录信息并确保键盘上的Caps Lock键没有开启.';
$lang['user_inactive']   = '您试图进入的帐户还没有激活.<br />请检查您的电子邮件查找激活的方法 - <em>也有可能邮件被存在了废件箱里</em>.';


// Logged Out
$lang['user_logged_out']   = '您已退出.';


// Forgot Pass
$lang['user_forgot_incorrect']   = "没发现具有这些特征的帐户.";

$lang['user_password_reset_message']   = "您的密码被重置.您宜在接下来的两小时之内接受邮件，否则,这封邮件可能会被存入废件箱";

// Emails ----------------------------------------------------------------------------------------------------

// Activation
$lang['user_activation_email_subject'] = '必须激活';
$lang['user_activation_email_body'] = '谢谢您用%s 激活帐户. 为了能登录网站，请点击以下链接:';


$lang['user_activated_email_subject'] = '激活完成';
$lang['user_activated_email_content_line1'] = '感谢您在 %s 注册. 在激活您的帐户前, 请点击下面链接以完成注册过程:';
$lang['user_activated_email_content_line2'] = '假如您的电子邮件收发程序不能识别上面链接,请直接用浏览器打开以下链接并输入激活码:';

// Reset Pass
$lang['user_reset_pass_email_subject'] = '密码重置';
$lang['user_reset_pass_email_body'] = '您在 %s 的密码已重置.如果您不曾有这一要求，请您在 %s 给我们发电子邮件，我们将给您提供必要的帮助.';

?>
