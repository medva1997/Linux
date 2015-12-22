<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-12-18 19:39:24
         compiled from "/var/vhost/mail/postfixadmin/templates/sendmail.tpl" */ ?>
<?php /*%%SmartyHeaderCode:758957700567436bcb8bf57-32486291%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1ecb28c9e85638f239f24fc2677818871625d46f' => 
    array (
      0 => '/var/vhost/mail/postfixadmin/templates/sendmail.tpl',
      1 => 1375135687,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '758957700567436bcb8bf57-32486291',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'PALANG' => 0,
    'smtp_from_email' => 0,
    'CONF' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_567436bcbd9966_63580498',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_567436bcbd9966_63580498')) {function content_567436bcbd9966_63580498($_smarty_tpl) {?><div id="edit_form">
<form name="mailbox" method="post" action="">
<table>
	<tr>
		<th colspan="3"><?php echo $_smarty_tpl->tpl_vars['PALANG']->value['pSendmail_welcome'];?>
</th>
	</tr>
	<tr>
		<td class="label"><label><?php echo $_smarty_tpl->tpl_vars['PALANG']->value['from'];?>
:</label></td>
		<td><em><?php echo $_smarty_tpl->tpl_vars['smtp_from_email']->value;?>
</em></td>
		<td>&nbsp;</td>
	</tr>
	<tr>
		<td class="label"><label><?php echo $_smarty_tpl->tpl_vars['PALANG']->value['pSendmail_to'];?>
:</label></td>
		<td><input class="flat" type="text" name="fTo" /></td>
		<td>&nbsp;</td>
	</tr>
	<tr>
		<td class="label"><label><?php echo $_smarty_tpl->tpl_vars['PALANG']->value['subject'];?>
:</label></td>
		<td><input class="flat" type="text" name="fSubject" value="<?php echo $_smarty_tpl->tpl_vars['PALANG']->value['pSendmail_subject_text'];?>
" /></td>
		<td>&nbsp;</td>
	</tr>
	<tr>
		<td class="label"><label><?php echo $_smarty_tpl->tpl_vars['PALANG']->value['pSendmail_body'];?>
:</label></td>
		<td>
		<textarea class="flat" rows="10" cols="60" name="fBody"><?php echo $_smarty_tpl->tpl_vars['CONF']->value['welcome_text'];?>
</textarea>
		</td>
		<td>&nbsp;</td>
	</tr>
	<tr>
		<td class="label">&nbsp;</td>
		<td colspan="2"><input class="button" type="submit" name="submit" value="<?php echo $_smarty_tpl->tpl_vars['PALANG']->value['pSendmail_button'];?>
" /></td>
	</tr>
</table>
</form>
</div>
<?php }} ?>
