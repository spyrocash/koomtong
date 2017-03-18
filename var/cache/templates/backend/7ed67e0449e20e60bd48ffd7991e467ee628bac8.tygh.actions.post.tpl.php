<?php /* Smarty version Smarty-3.1.21, created on 2017-03-19 00:03:16
         compiled from "/var/www/html/koomtong.com/design/backend/templates/addons/help_tutorial/hooks/index/actions.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:164598765358cda09437d870-48830242%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7ed67e0449e20e60bd48ffd7991e467ee628bac8' => 
    array (
      0 => '/var/www/html/koomtong.com/design/backend/templates/addons/help_tutorial/hooks/index/actions.post.tpl',
      1 => 1489748089,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '164598765358cda09437d870-48830242',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_58cda0943c1c22_93082199',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58cda0943c1c22_93082199')) {function content_58cda0943c1c22_93082199($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('help_tutorial.need_help','close'));
?>
<?php if (($_smarty_tpl->tpl_vars['runtime']->value['controller']=="block_manager"&&$_smarty_tpl->tpl_vars['runtime']->value['mode']=="manage"||$_smarty_tpl->tpl_vars['runtime']->value['controller']=="themes"&&$_smarty_tpl->tpl_vars['runtime']->value['mode']=="manage"||$_smarty_tpl->tpl_vars['runtime']->value['controller']=="store_import"&&$_smarty_tpl->tpl_vars['runtime']->value['mode']=="index"||fn_allowed_for("ULTIMATE")&&$_smarty_tpl->tpl_vars['runtime']->value['controller']=="companies"||$_smarty_tpl->tpl_vars['runtime']->value['controller']=="index"&&$_smarty_tpl->tpl_vars['runtime']->value['mode']=="index"||$_smarty_tpl->tpl_vars['runtime']->value['controller']=="seo_rules"&&$_smarty_tpl->tpl_vars['runtime']->value['mode']=="manage")) {?>
<div class="help-tutorial clearfix">
    <span class="help-tutorial-link cm-external-click" id="help_tutorial_link" data-ca-scroll="main_column">
        <span class="help-tutorial-show"><i class="help-tutorial-icon icon-question-sign"></i><?php echo $_smarty_tpl->__("help_tutorial.need_help");?>
</span>
        <span class="help-tutorial-close"><i class="help-tutorial-icon icon-remove"></i><?php echo $_smarty_tpl->__("close");?>
</span>
    </span>
</div>
<?php }?><?php }} ?>
