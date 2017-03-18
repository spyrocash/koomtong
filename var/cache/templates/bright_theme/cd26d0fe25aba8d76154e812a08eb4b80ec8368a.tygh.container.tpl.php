<?php /* Smarty version Smarty-3.1.21, created on 2017-03-19 00:03:26
         compiled from "/var/www/html/koomtong.com/design/themes/responsive/templates/views/block_manager/render/container.tpl" */ ?>
<?php /*%%SmartyHeaderCode:81323216458cda09e9fd4b4-81301155%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cd26d0fe25aba8d76154e812a08eb4b80ec8368a' => 
    array (
      0 => '/var/www/html/koomtong.com/design/themes/responsive/templates/views/block_manager/render/container.tpl',
      1 => 1489870971,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '81323216458cda09e9fd4b4-81301155',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'layout_data' => 0,
    'container' => 0,
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_58cda09ea35b47_37838091',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58cda09ea35b47_37838091')) {function content_58cda09ea35b47_37838091($_smarty_tpl) {?><div class="<?php if ($_smarty_tpl->tpl_vars['layout_data']->value['layout_width']!="fixed") {?>container-fluid <?php } else { ?>container<?php }?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['container']->value['user_class'], ENT_QUOTES, 'UTF-8');?>
">
    <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

</div><?php }} ?>
