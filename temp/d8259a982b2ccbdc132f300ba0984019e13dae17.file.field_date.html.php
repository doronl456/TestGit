<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-07-03 02:55:33
         compiled from "/homepages/37/d619410358/htdocs/developer/template/fields/field_date.html" */ ?>
<?php /*%%SmartyHeaderCode:6454778135778b6e56eec37-18971332%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd8259a982b2ccbdc132f300ba0984019e13dae17' => 
    array (
      0 => '/homepages/37/d619410358/htdocs/developer/template/fields/field_date.html',
      1 => 1466056147,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6454778135778b6e56eec37-18971332',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'name' => 0,
    'value' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5778b6e56fd702_33509836',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5778b6e56fd702_33509836')) {function content_5778b6e56fd702_33509836($_smarty_tpl) {?>
<div  class="d1" >
  <div class="fldTitle"><?php echo $_smarty_tpl->getSubTemplate ('fields/req.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);
echo $_smarty_tpl->tpl_vars['title']->value;?>
</div>
	

  <?php echo $_smarty_tpl->getSubTemplate ('controls/date.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('name'=>$_smarty_tpl->tpl_vars['name']->value,'value'=>$_smarty_tpl->tpl_vars['value']->value), 0);?>
  
  

  <?php echo $_smarty_tpl->getSubTemplate ('fields/note.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</div>

<?php }} ?>
