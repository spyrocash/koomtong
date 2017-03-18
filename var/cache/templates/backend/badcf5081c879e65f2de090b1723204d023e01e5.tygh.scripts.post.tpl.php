<?php /* Smarty version Smarty-3.1.21, created on 2017-03-19 00:03:17
         compiled from "/var/www/html/koomtong.com/design/backend/templates/addons/tags/hooks/index/scripts.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:57962222958cda095972d48-27242866%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'badcf5081c879e65f2de090b1723204d023e01e5' => 
    array (
      0 => '/var/www/html/koomtong.com/design/backend/templates/addons/tags/hooks/index/scripts.post.tpl',
      1 => 1489748118,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '57962222958cda095972d48-27242866',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_58cda095981533_97925723',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58cda095981533_97925723')) {function content_58cda095981533_97925723($_smarty_tpl) {?><?php if (!is_callable('smarty_block_inline_script')) include '/var/www/html/koomtong.com/app/functions/smarty_plugins/block.inline_script.php';
?><?php
fn_preload_lang_vars(array('addons.tags.add_a_tag'));
?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('inline_script', array()); $_block_repeat=true; echo smarty_block_inline_script(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo '<script'; ?>
 type="text/javascript">
(function(_, $) {
    _.tr({
		addons_tags_add_a_tag: '<?php echo strtr($_smarty_tpl->__("addons.tags.add_a_tag"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
'
    });
}(Tygh, Tygh.$));
<?php echo '</script'; ?>
><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_inline_script(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php }} ?>
