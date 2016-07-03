<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-07-03 02:55:33
         compiled from "/homepages/37/d619410358/htdocs/developer/template/fields/field_datetime.html" */ ?>
<?php /*%%SmartyHeaderCode:13329638295778b6e5601863-20599220%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6a5bdc42b27fa9aec3227dae98eb3cdb679cbdd2' => 
    array (
      0 => '/homepages/37/d619410358/htdocs/developer/template/fields/field_datetime.html',
      1 => 1466056147,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13329638295778b6e5601863-20599220',
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
  'unifunc' => 'content_5778b6e561a398_06743816',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5778b6e561a398_06743816')) {function content_5778b6e561a398_06743816($_smarty_tpl) {?>
<div  class="d1" >
  <div class="fldTitle"><?php echo $_smarty_tpl->getSubTemplate ('fields/req.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);
echo $_smarty_tpl->tpl_vars['title']->value;?>
</div>
	

  <?php echo $_smarty_tpl->getSubTemplate ('controls/datetime.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('name'=>$_smarty_tpl->tpl_vars['name']->value,'value'=>$_smarty_tpl->tpl_vars['value']->value), 0);?>
  
  

  <?php echo $_smarty_tpl->getSubTemplate ('fields/note.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</div>

<?php }} ?>
