<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-07-03 02:23:53
         compiled from "/homepages/37/d619410358/htdocs/developer/template/status/history_block.html" */ ?>
<?php /*%%SmartyHeaderCode:8933390415778af790e2353-79937863%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f6c39fdf265f6acd3f0ebbc11325db7f312974d7' => 
    array (
      0 => '/homepages/37/d619410358/htdocs/developer/template/status/history_block.html',
      1 => 1466056150,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8933390415778af790e2353-79937863',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'status_history' => 0,
    'r' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5778af79145d48_31432732',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5778af79145d48_31432732')) {function content_5778af79145d48_31432732($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/homepages/37/d619410358/htdocs/developer/ext/smarty3/plugins/modifier.date_format.php';
?>
<style>
.tblHistoryBlock, .tblHistoryBlock TD{
	font-size:10pt;
}
</style>


<table border="0" cellspacing="0" cellpadding="0" class="tblHistoryBlock">
    <TR class="trTitleRow"> 
      <TD colspan="2" valign="top" ><strong></strong></TD>
    </TR>
    <?php  $_smarty_tpl->tpl_vars['r'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['r']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['status_history']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['r']->key => $_smarty_tpl->tpl_vars['r']->value) {
$_smarty_tpl->tpl_vars['r']->_loop = true;
?> 
    <TR> 
      <TD colspan="2" valign="top" class="tdValueColumn" >
	  <strong class="blue"><?php echo smarty_modifier_date_format((($tmp = @$_smarty_tpl->tpl_vars['r']->value['time'])===null||$tmp==='' ? 0 : $tmp),'%m/%d/%y %I:%M:%S %p');?>
 - <?php echo $_smarty_tpl->tpl_vars['r']->value['StatusTitle'];?>
</strong> 
      <br />
      <strong>Submitted By</strong>: <?php echo $_smarty_tpl->tpl_vars['r']->value['adminName'];?>
<br />
      <strong>Notes:</strong> <?php echo $_smarty_tpl->tpl_vars['r']->value['description'];?>
  </TD>
    </TR>
    <tr class="trOut"> 
      <td colspan="2" >&nbsp;</td>
    </tr>
    <?php } ?> 
</table><?php }} ?>
