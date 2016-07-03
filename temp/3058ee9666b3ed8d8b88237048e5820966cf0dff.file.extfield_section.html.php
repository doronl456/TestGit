<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-07-03 02:55:33
         compiled from "/homepages/37/d619410358/htdocs/developer/template/extfield_section.html" */ ?>
<?php /*%%SmartyHeaderCode:12277446605778b6e567bd34-45055210%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3058ee9666b3ed8d8b88237048e5820966cf0dff' => 
    array (
      0 => '/homepages/37/d619410358/htdocs/developer/template/extfield_section.html',
      1 => 1466056144,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12277446605778b6e567bd34-45055210',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'section' => 0,
    'row' => 0,
    'item' => 0,
    'field' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5778b6e56aeb48_08583918',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5778b6e56aeb48_08583918')) {function content_5778b6e56aeb48_08583918($_smarty_tpl) {?><table class="tblFields" width="100%" cellpadding="0" cellspacing="0" border="0">
<COL class="colField1">
<COL class="colField2">
<COL class="colField3">

<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['section']->value['list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
<tr>
<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['row']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
<td valign="top" class="tdFieldCell<?php echo $_smarty_tpl->tpl_vars['item']->value['colspan'];?>
 nobr" colspan='<?php echo $_smarty_tpl->tpl_vars['item']->value['colspan'];?>
' >
    <?php  $_smarty_tpl->tpl_vars['field'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['field']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['item']->value['fields']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['field']->key => $_smarty_tpl->tpl_vars['field']->value) {
$_smarty_tpl->tpl_vars['field']->_loop = true;
?>
          <?php if ($_smarty_tpl->tpl_vars['field']->value['type']!='static') {?><input type="hidden" name="fields[]" value="<?php echo $_smarty_tpl->tpl_vars['field']->value['name'];?>
" /><?php }?>
          <div style="<?php if (count($_smarty_tpl->tpl_vars['item']->value['fields'])>1) {?>display:inline-block<?php }?>" title="<?php echo $_smarty_tpl->tpl_vars['field']->value['hint'];?>
"><?php echo $_smarty_tpl->tpl_vars['field']->value['html'];?>
</div>
    <?php } ?>
</td>
<?php } ?> </tr>
<?php } ?>
 </table>         
<?php }} ?>
