<?php /* Smarty version Smarty-3.1.21, created on 2017-03-19 00:03:07
         compiled from "/var/www/html/koomtong.com/design/backend/templates/addons/call_requests/settings/info.tpl" */ ?>
<?php /*%%SmartyHeaderCode:103715207558cda08b469704-19800015%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7b3e5bfd11a34a1c111f082ff1c6dd01146b672d' => 
    array (
      0 => '/var/www/html/koomtong.com/design/backend/templates/addons/call_requests/settings/info.tpl',
      1 => 1489748070,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '103715207558cda08b469704-19800015',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'settings' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_58cda08b4ed095_35534150',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58cda08b4ed095_35534150')) {function content_58cda08b4ed095_35534150($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('call_requests.phone_from_settings'));
?>
<div class="control-group setting-wide call_requests">

    <label for="addon_option_call_requests_phone" class="control-label "><?php echo $_smarty_tpl->__("call_requests.phone_from_settings");?>
:</label>

    <div class="controls">
        <p><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['Company']['company_phone'], ENT_QUOTES, 'UTF-8');?>
</p>
    </div>

</div><?php }} ?>
