<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-12-18 19:37:03
         compiled from "/var/vhost/mail/postfixadmin/templates/flash_error.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17650166265674362fad40d5-82190509%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3310779fe27af3e740c74f65ae02d5d3813744f4' => 
    array (
      0 => '/var/vhost/mail/postfixadmin/templates/flash_error.tpl',
      1 => 1326318401,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17650166265674362fad40d5-82190509',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'msg' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5674362fb124c2_30260374',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5674362fb124c2_30260374')) {function content_5674362fb124c2_30260374($_smarty_tpl) {?><!-- <?php echo basename($_smarty_tpl->source->filepath);?>
 -->
<br clear="all"/><br />
<?php if (isset($_SESSION['flash'])) {
if (isset($_SESSION['flash']['info'])) {?><ul class="flash-info"><?php  $_smarty_tpl->tpl_vars['msg'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['msg']->_loop = false;
 $_from = $_SESSION['flash']['info']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['msg']->key => $_smarty_tpl->tpl_vars['msg']->value) {
$_smarty_tpl->tpl_vars['msg']->_loop = true;
?><li><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['msg']->value, ENT_QUOTES, 'UTF-8', true);?>
</li><?php } ?></ul><?php }
if (isset($_SESSION['flash']['error'])) {?><ul class="flash-error"><?php  $_smarty_tpl->tpl_vars['msg'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['msg']->_loop = false;
 $_from = $_SESSION['flash']['error']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['msg']->key => $_smarty_tpl->tpl_vars['msg']->value) {
$_smarty_tpl->tpl_vars['msg']->_loop = true;
?><li><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['msg']->value, ENT_QUOTES, 'UTF-8', true);?>
</li><?php } ?></ul><?php }
}?>
<?php }} ?>
