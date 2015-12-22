<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-12-18 19:37:23
         compiled from "/var/vhost/mail/postfixadmin/templates/main.tpl" */ ?>
<?php /*%%SmartyHeaderCode:120299865456743643800c38-45863628%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c764328c709969c65e50a72ea1d73957094e92a4' => 
    array (
      0 => '/var/vhost/mail/postfixadmin/templates/main.tpl',
      1 => 1375051888,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '120299865456743643800c38-45863628',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'PALANG' => 0,
    'CONF' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5674364384f033_29897416',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5674364384f033_29897416')) {function content_5674364384f033_29897416($_smarty_tpl) {?><!-- <?php echo basename($_smarty_tpl->source->filepath);?>
 -->
<div id="main_menu">
<table>
	<tr>
		<td nowrap="nowrap"><a target="_top" href="<?php echo $_smarty_tpl->getConfigVariable('url_list_domain');?>
"><?php echo $_smarty_tpl->tpl_vars['PALANG']->value['pMenu_overview'];?>
</a></td>
		<td><?php echo $_smarty_tpl->tpl_vars['PALANG']->value['pMain_overview'];?>
</td>
	</tr>
	<tr>
		<td nowrap="nowrap"><a target="_top" href="<?php echo $_smarty_tpl->getConfigVariable('url_create_alias');?>
"><?php echo $_smarty_tpl->tpl_vars['PALANG']->value['add_alias'];?>
</a></td>
		<td><?php echo $_smarty_tpl->tpl_vars['PALANG']->value['pMain_create_alias'];?>
</td>
	</tr>
	<tr>
		<td nowrap="nowrap"><a target="_top" href="<?php echo $_smarty_tpl->getConfigVariable('url_create_mailbox');?>
"><?php echo $_smarty_tpl->tpl_vars['PALANG']->value['add_mailbox'];?>
</a></td>
		<td><?php echo $_smarty_tpl->tpl_vars['PALANG']->value['pMain_create_mailbox'];?>
</td>
	</tr>
<?php if ($_smarty_tpl->tpl_vars['CONF']->value['sendmail']==='YES') {?>
	<tr>
		<td nowrap="nowrap"><a target="_top" href="<?php echo $_smarty_tpl->getConfigVariable('url_sendmail');?>
"><?php echo $_smarty_tpl->tpl_vars['PALANG']->value['pMenu_sendmail'];?>
</a></td>
		<td><?php echo $_smarty_tpl->tpl_vars['PALANG']->value['pMain_sendmail'];?>
</td>
	</tr>
<?php }?>
	<tr>
		<td nowrap="nowrap"><a target="_top" href="<?php echo $_smarty_tpl->getConfigVariable('url_password');?>
"><?php echo $_smarty_tpl->tpl_vars['PALANG']->value['pMenu_password'];?>
</a></td>
		<td><?php echo $_smarty_tpl->tpl_vars['PALANG']->value['pMain_password'];?>
</td>
	</tr>
	<tr>
		<td nowrap="nowrap"><a target="_top" href="<?php echo $_smarty_tpl->getConfigVariable('url_viewlog');?>
"><?php echo $_smarty_tpl->tpl_vars['PALANG']->value['pMenu_viewlog'];?>
</a></td>
		<td><?php echo $_smarty_tpl->tpl_vars['PALANG']->value['pMain_viewlog'];?>
</td>
	</tr>
	<tr>
		<td nowrap="nowrap"><a target="_top" href="<?php echo $_smarty_tpl->getConfigVariable('url_logout');?>
"><?php echo $_smarty_tpl->tpl_vars['PALANG']->value['pMenu_logout'];?>
</a></td>
		<td><?php echo $_smarty_tpl->tpl_vars['PALANG']->value['pMain_logout'];?>
</td>
	</tr>
</table>
</div>
<?php }} ?>
