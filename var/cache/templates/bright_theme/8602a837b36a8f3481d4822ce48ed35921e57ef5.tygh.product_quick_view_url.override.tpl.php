<?php /* Smarty version Smarty-3.1.21, created on 2017-03-19 00:03:33
         compiled from "/var/www/html/koomtong.com/design/themes/responsive/templates/addons/wishlist/hooks/products/product_quick_view_url.override.tpl" */ ?>
<?php /*%%SmartyHeaderCode:64060774158cda0a56b9956-40054157%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8602a837b36a8f3481d4822ce48ed35921e57ef5' => 
    array (
      0 => '/var/www/html/koomtong.com/design/themes/responsive/templates/addons/wishlist/hooks/products/product_quick_view_url.override.tpl',
      1 => 1489870983,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '64060774158cda0a56b9956-40054157',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'is_wishlist' => 0,
    'product' => 0,
    'current_url' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_58cda0a571e043_91062450',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58cda0a571e043_91062450')) {function content_58cda0a571e043_91062450($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/var/www/html/koomtong.com/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
if ($_smarty_tpl->tpl_vars['is_wishlist']->value) {?>
    <?php echo htmlspecialchars("products.quick_view?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id']), ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['product']->value['combination']) {
echo htmlspecialchars("&combination=".((string)$_smarty_tpl->tpl_vars['product']->value['combination']), ENT_QUOTES, 'UTF-8');
}
echo htmlspecialchars("&prev_url=".((string)$_smarty_tpl->tpl_vars['current_url']->value), ENT_QUOTES, 'UTF-8');?>

<?php }
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/wishlist/hooks/products/product_quick_view_url.override.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/wishlist/hooks/products/product_quick_view_url.override.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
if ($_smarty_tpl->tpl_vars['is_wishlist']->value) {?>
    <?php echo htmlspecialchars("products.quick_view?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id']), ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['product']->value['combination']) {
echo htmlspecialchars("&combination=".((string)$_smarty_tpl->tpl_vars['product']->value['combination']), ENT_QUOTES, 'UTF-8');
}
echo htmlspecialchars("&prev_url=".((string)$_smarty_tpl->tpl_vars['current_url']->value), ENT_QUOTES, 'UTF-8');?>

<?php }
}?><?php }} ?>
