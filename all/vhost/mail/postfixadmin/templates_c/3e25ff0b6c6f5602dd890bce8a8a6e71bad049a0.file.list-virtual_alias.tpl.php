<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-12-18 19:39:40
         compiled from "/var/vhost/mail/postfixadmin/templates/list-virtual_alias.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1547668676567436cc181df0-96168483%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3e25ff0b6c6f5602dd890bce8a8a6e71bad049a0' => 
    array (
      0 => '/var/vhost/mail/postfixadmin/templates/list-virtual_alias.tpl',
      1 => 1428358158,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1547668676567436cc181df0-96168483',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'alias_data' => 0,
    'msg' => 0,
    'tAlias' => 0,
    'RAW_tAlias' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_567436cc1ac3a2_67903273',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_567436cc1ac3a2_67903273')) {function content_567436cc1ac3a2_67903273($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars["table"] = new Smarty_variable('alias', null, 0);?>
<?php $_smarty_tpl->tpl_vars["struct"] = new Smarty_variable($_smarty_tpl->tpl_vars['alias_data']->value['struct'], null, 0);?>
<?php $_smarty_tpl->tpl_vars["msg"] = new Smarty_variable($_smarty_tpl->tpl_vars['alias_data']->value['msg'], null, 0);?>
<?php $_smarty_tpl->tpl_vars["id_field"] = new Smarty_variable($_smarty_tpl->tpl_vars['msg']->value['id_field'], null, 0);?>
<?php $_smarty_tpl->tpl_vars["formconf"] = new Smarty_variable($_smarty_tpl->tpl_vars['alias_data']->value['formconf'], null, 0);?>
<?php $_smarty_tpl->tpl_vars["items"] = new Smarty_variable($_smarty_tpl->tpl_vars['tAlias']->value, null, 0);?>
<?php $_smarty_tpl->tpl_vars["RAW_items"] = new Smarty_variable($_smarty_tpl->tpl_vars['RAW_tAlias']->value, null, 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('list.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<?php }} ?>
