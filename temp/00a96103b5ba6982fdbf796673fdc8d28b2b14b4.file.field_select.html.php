<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-07-03 02:55:33
         compiled from "/homepages/37/d619410358/htdocs/developer/template/fields/field_select.html" */ ?>
<?php /*%%SmartyHeaderCode:20700006815778b6e55769f9-51827290%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '00a96103b5ba6982fdbf796673fdc8d28b2b14b4' => 
    array (
      0 => '/homepages/37/d619410358/htdocs/developer/template/fields/field_select.html',
      1 => 1466056147,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20700006815778b6e55769f9-51827290',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'name' => 0,
    'width' => 0,
    'disabled' => 0,
    'selOptions' => 0,
    'value' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5778b6e559b322_01914293',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5778b6e559b322_01914293')) {function content_5778b6e559b322_01914293($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_options')) include '/homepages/37/d619410358/htdocs/developer/ext/smarty3/plugins/function.html_options.php';
?><div  class="d1" >
  <div class="fldTitle"><?php echo $_smarty_tpl->getSubTemplate ('fields/req.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);
echo $_smarty_tpl->tpl_vars['title']->value;?>
</div>
    <select name="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" class="fieldSelectInput" style="<?php if ($_smarty_tpl->tpl_vars['width']->value) {?>width:<?php echo $_smarty_tpl->tpl_vars['width']->value;?>
;<?php }?>"
    <?php if ($_smarty_tpl->tpl_vars['disabled']->value) {?>disabled readonly<?php }?>
    >
		<?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['selOptions']->value,'selected'=>$_smarty_tpl->tpl_vars['value']->value),$_smarty_tpl);?>

    </select>
  <?php echo $_smarty_tpl->getSubTemplate ('fields/note.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</div>
<?php }} ?>
