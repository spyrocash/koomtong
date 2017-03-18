<?php /* Smarty version Smarty-3.1.21, created on 2017-03-19 00:03:45
         compiled from "/var/www/html/koomtong.com/design/themes/responsive/templates/addons/banners/hooks/index/scripts.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:52577225058cda0b1e770d3-67056784%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e229c8f113875b91474754b219f775ecb025a14d' => 
    array (
      0 => '/var/www/html/koomtong.com/design/themes/responsive/templates/addons/banners/hooks/index/scripts.post.tpl',
      1 => 1489870982,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '52577225058cda0b1e770d3-67056784',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_58cda0b1eecdd0_08341624',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58cda0b1eecdd0_08341624')) {function content_58cda0b1eecdd0_08341624($_smarty_tpl) {?><?php if (!is_callable('smarty_function_script')) include '/var/www/html/koomtong.com/app/functions/smarty_plugins/function.script.php';
if (!is_callable('smarty_function_set_id')) include '/var/www/html/koomtong.com/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
echo smarty_function_script(array('src'=>"js/lib/owlcarousel/owl.carousel.min.js"),$_smarty_tpl);
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/banners/hooks/index/scripts.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/banners/hooks/index/scripts.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
echo smarty_function_script(array('src'=>"js/lib/owlcarousel/owl.carousel.min.js"),$_smarty_tpl);
}?><?php }} ?>
