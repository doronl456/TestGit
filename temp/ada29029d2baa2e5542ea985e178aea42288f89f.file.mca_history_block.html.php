<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-07-03 02:24:34
         compiled from "/homepages/37/d619410358/htdocs/developer/template/status/mca_history_block.html" */ ?>
<?php /*%%SmartyHeaderCode:8571070525778afa2d79a51-80862220%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ada29029d2baa2e5542ea985e178aea42288f89f' => 
    array (
      0 => '/homepages/37/d619410358/htdocs/developer/template/status/mca_history_block.html',
      1 => 1466056150,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8571070525778afa2d79a51-80862220',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'notes' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5778afa2db9168_48218369',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5778afa2db9168_48218369')) {function content_5778afa2db9168_48218369($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/homepages/37/d619410358/htdocs/developer/ext/smarty3/plugins/modifier.date_format.php';
?>
<style>
.b{font-weight:bold;}
.nobr {white-space:nowrap;}
</style>

<table  border="0" cellspacing="0" width="100%">
  <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['notes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
  <tr>
  	  <td width="100"  valign="top" style="padding:2px;"><div class="nobr"><span class="b">Date/Time</span>:<span class="nobr">&nbsp;<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['item']->value['time'],"%m/%d/%y, %I:%M %p");?>
</span></div></td>
      <td width="50"   valign="top" style="padding:2px;"><div class="nobr"><span class="b">&nbsp;Status:</span> <?php echo $_smarty_tpl->tpl_vars['item']->value['status'];?>
</div></td>
      <td width="100%" valign="top" style="padding:2px;"><div class="nobr"><span class="b">&nbsp;Added&nbsp;By</span><span class="nobr">: <?php echo $_smarty_tpl->tpl_vars['item']->value['AuthorName'];?>
</span></div></td>
  </tr>
  <tr>
        <td colspan="3" valign="top" >
        <div style='overflow:auto;WORD-WRAP: break-word;text-align:justify'>
        <span class="b">Notes</span>:
        <?php if ($_smarty_tpl->tpl_vars['item']->value['eventType']=='status') {?>Status has changed to <font color="#ff6600"><?php echo $_smarty_tpl->tpl_vars['item']->value['status'];?>
</font><?php }?><font color="#FF0000"><?php echo $_smarty_tpl->tpl_vars['item']->value['note_text'];?>
</font></div></td>
  </tr>
  <tr>
        <td colspan="3">&nbsp;</td>
  </tr>
  <?php } ?>
</table><?php }} ?>
