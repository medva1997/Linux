<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-12-18 19:42:08
         compiled from "/var/vhost/mail/postfixadmin/templates/broadcast-message.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21416354956743760910d88-36024065%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '11f623ae0f0cd33bfeac58c770cbfc670fbad62c' => 
    array (
      0 => '/var/vhost/mail/postfixadmin/templates/broadcast-message.tpl',
      1 => 1375135687,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21416354956743760910d88-36024065',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'PALANG' => 0,
    'smtp_from_email' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_56743760960ba8_20629199',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56743760960ba8_20629199')) {function content_56743760960ba8_20629199($_smarty_tpl) {?><div id="edit_form">
<form name="broadcast-message" method="post" action="">
<table>
	<tr>
		<th colspan="2"><?php echo $_smarty_tpl->tpl_vars['PALANG']->value['pBroadcast_title'];?>
</th>
	</tr>
	<tr>
		<td class="label"><label><?php echo $_smarty_tpl->tpl_vars['PALANG']->value['from'];?>
:</label></td>
		<td><em><?php echo $_smarty_tpl->tpl_vars['smtp_from_email']->value;?>
</em></td>
	</tr>
	<tr>
		<td class="label"><label><?php echo $_smarty_tpl->tpl_vars['PALANG']->value['pBroadcast_name'];?>
:</label></td>
		<td><input class="flat" size="43" type="text" name="name"/></td>
	</tr>
	<tr>
		<td class="label"><label><?php echo $_smarty_tpl->tpl_vars['PALANG']->value['subject'];?>
:</label></td>
		<td><input class="flat" size="43" type="text" name="subject"/></td>
	</tr>
	<tr>
		<td class="label"><label><?php echo $_smarty_tpl->tpl_vars['PALANG']->value['message'];?>
:</label></td>
		<td><textarea class="flat" cols="40" rows="6" name="message"></textarea></td>
	</tr>
	<tr>
		<td>&nbsp;</td>
		<td>
		<input class="button" type="submit" name="submit" value="<?php echo $_smarty_tpl->tpl_vars['PALANG']->value['pSendmail_button'];?>
" />
		</td>
	</tr>
</table>
</form>
</div>
<?php }} ?>
