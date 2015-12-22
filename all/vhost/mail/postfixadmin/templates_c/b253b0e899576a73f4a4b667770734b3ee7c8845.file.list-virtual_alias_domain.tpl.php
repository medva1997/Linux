<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-12-18 19:39:40
         compiled from "/var/vhost/mail/postfixadmin/templates/list-virtual_alias_domain.tpl" */ ?>
<?php /*%%SmartyHeaderCode:576690149567436cc152535-77152776%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b253b0e899576a73f4a4b667770734b3ee7c8845' => 
    array (
      0 => '/var/vhost/mail/postfixadmin/templates/list-virtual_alias_domain.tpl',
      1 => 1428329845,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '576690149567436cc152535-77152776',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'aliasdomain_data' => 0,
    'msg' => 0,
    'tAliasDomains' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_567436cc177a88_31623418',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_567436cc177a88_31623418')) {function content_567436cc177a88_31623418($_smarty_tpl) {?>

<?php $_smarty_tpl->tpl_vars["table"] = new Smarty_variable('aliasdomain', null, 0);?>
<?php $_smarty_tpl->tpl_vars["struct"] = new Smarty_variable($_smarty_tpl->tpl_vars['aliasdomain_data']->value['struct'], null, 0);?>
<?php $_smarty_tpl->tpl_vars["msg"] = new Smarty_variable($_smarty_tpl->tpl_vars['aliasdomain_data']->value['msg'], null, 0);?>
<?php $_smarty_tpl->tpl_vars["id_field"] = new Smarty_variable($_smarty_tpl->tpl_vars['msg']->value['id_field'], null, 0);?>
<?php $_smarty_tpl->tpl_vars["formconf"] = new Smarty_variable($_smarty_tpl->tpl_vars['aliasdomain_data']->value['formconf'], null, 0);?>
<?php $_smarty_tpl->tpl_vars["items"] = new Smarty_variable($_smarty_tpl->tpl_vars['tAliasDomains']->value, null, 0);?>
<?php echo $_smarty_tpl->getSubTemplate ('list.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
