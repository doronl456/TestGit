<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-07-03 02:55:33
         compiled from "/homepages/37/d619410358/htdocs/developer/template/fields/field_text.html" */ ?>
<?php /*%%SmartyHeaderCode:8850980505778b6e5646657-96565113%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '289511c0bdb54156d1320a71dbe369e9ebd1fc96' => 
    array (
      0 => '/homepages/37/d619410358/htdocs/developer/template/fields/field_text.html',
      1 => 1466056147,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8850980505778b6e5646657-96565113',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'name' => 0,
    'size' => 0,
    'value' => 0,
    'width' => 0,
    'em_size' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5778b6e5671006_09684403',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5778b6e5671006_09684403')) {function content_5778b6e5671006_09684403($_smarty_tpl) {?><div  class="d1" >
  <div class="fldTitle"><?php echo $_smarty_tpl->getSubTemplate ('fields/req.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);
echo $_smarty_tpl->tpl_vars['title']->value;?>
</div>
    <input name="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" type="text" class="fieldInputText inp<?php echo $_smarty_tpl->tpl_vars['size']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
"  maxlength_=""  style="<?php if ($_smarty_tpl->tpl_vars['width']->value) {?>width:<?php echo $_smarty_tpl->tpl_vars['width']->value;?>
;<?php }?> <?php if ($_smarty_tpl->tpl_vars['em_size']->value) {?>width:<?php echo $_smarty_tpl->tpl_vars['em_size']->value;?>
em;<?php }?>" />
  <?php echo $_smarty_tpl->getSubTemplate ('fields/note.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</div>
<?php }} ?>
