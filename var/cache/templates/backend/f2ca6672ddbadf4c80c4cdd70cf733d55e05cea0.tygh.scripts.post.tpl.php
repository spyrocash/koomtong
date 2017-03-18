<?php /* Smarty version Smarty-3.1.21, created on 2017-03-19 00:03:17
         compiled from "/var/www/html/koomtong.com/design/backend/templates/addons/vendor_data_premoderation/hooks/index/scripts.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:85250735858cda09599f955-88603384%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f2ca6672ddbadf4c80c4cdd70cf733d55e05cea0' => 
    array (
      0 => '/var/www/html/koomtong.com/design/backend/templates/addons/vendor_data_premoderation/hooks/index/scripts.post.tpl',
      1 => 1489748120,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '85250735858cda09599f955-88603384',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'vendor_pre' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_58cda0959ddd17_13985978',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58cda0959ddd17_13985978')) {function content_58cda0959ddd17_13985978($_smarty_tpl) {?><?php if (!is_callable('smarty_block_inline_script')) include '/var/www/html/koomtong.com/app/functions/smarty_plugins/block.inline_script.php';
if (!is_callable('smarty_function_script')) include '/var/www/html/koomtong.com/app/functions/smarty_plugins/function.script.php';
?><?php
fn_preload_lang_vars(array('text_vendor_profile_changes_notice'));
?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('inline_script', array()); $_block_repeat=true; echo smarty_block_inline_script(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo '<script'; ?>
 type="text/javascript">
(function(_, $) {
	_.tr({
		text_vendor_profile_changes_notice: '<?php echo strtr($_smarty_tpl->__("text_vendor_profile_changes_notice"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
	});
	_.vendor_pre = '<?php echo htmlspecialchars(strtr($_smarty_tpl->tpl_vars['vendor_pre']->value, array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" )), ENT_QUOTES, 'UTF-8');?>
';
}(Tygh, Tygh.$));
<?php echo '</script'; ?>
><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_inline_script(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<?php echo smarty_function_script(array('src'=>"js/addons/vendor_data_premoderation/func.js"),$_smarty_tpl);?>


<?php }} ?>
