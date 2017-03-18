<?php /* Smarty version Smarty-3.1.21, created on 2017-03-19 00:03:17
         compiled from "/var/www/html/koomtong.com/design/backend/templates/addons/vendor_plans/hooks/index/scripts.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:146797061758cda09598af91-28852183%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0ea521b79ed8f42e67bd5a6cbefef2efc48c8667' => 
    array (
      0 => '/var/www/html/koomtong.com/design/backend/templates/addons/vendor_plans/hooks/index/scripts.post.tpl',
      1 => 1489748123,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '146797061758cda09598af91-28852183',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'vendor_plans_payments' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_58cda09599be88_76021461',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58cda09599be88_76021461')) {function content_58cda09599be88_76021461($_smarty_tpl) {?><?php if (!is_callable('smarty_block_inline_script')) include '/var/www/html/koomtong.com/app/functions/smarty_plugins/block.inline_script.php';
?><?php if ($_smarty_tpl->tpl_vars['vendor_plans_payments']->value) {?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('inline_script', array()); $_block_repeat=true; echo smarty_block_inline_script(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo '<script'; ?>
 type="text/javascript">
Tygh.$(document).ready(function() {
    Tygh.$.get('<?php echo fn_url('vendor_plans.async?is_ajax=1','A','current');?>
');
});
<?php echo '</script'; ?>
><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_inline_script(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }?>
<?php }} ?>
