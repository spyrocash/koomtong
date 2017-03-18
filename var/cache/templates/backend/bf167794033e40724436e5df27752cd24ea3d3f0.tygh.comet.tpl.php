<?php /* Smarty version Smarty-3.1.21, created on 2017-03-19 00:03:17
         compiled from "/var/www/html/koomtong.com/design/backend/templates/common/comet.tpl" */ ?>
<?php /*%%SmartyHeaderCode:201726703758cda0951213d8-24630861%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bf167794033e40724436e5df27752cd24ea3d3f0' => 
    array (
      0 => '/var/www/html/koomtong.com/design/backend/templates/common/comet.tpl',
      1 => 1489748129,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '201726703758cda0951213d8-24630861',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_58cda095132182_38678234',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58cda095132182_38678234')) {function content_58cda095132182_38678234($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('processing'));
?>
<a id="comet_container_controller" data-backdrop="static" data-keyboard="false" href="#comet_control" data-toggle="modal" class="hide"></a>

<div class="modal hide fade" id="comet_control" tabindex="-1" role="dialog" aria-labelledby="comet_title" aria-hidden="true">
    <div class="modal-header">
        <h3 id="comet_title"><?php echo $_smarty_tpl->__("processing");?>
</h3>
    </div>
    <div class="modal-body">
        <p></p>
        <div class="progress progress-striped active">
            
            <div class="bar" style="width: 0%;"></div>
        </div>
    </div>
</div><?php }} ?>
