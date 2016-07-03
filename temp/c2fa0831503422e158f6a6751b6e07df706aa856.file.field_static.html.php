<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-07-03 02:55:33
         compiled from "/homepages/37/d619410358/htdocs/developer/template/fields/field_static.html" */ ?>
<?php /*%%SmartyHeaderCode:73828335778b6e55d5689-19266279%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c2fa0831503422e158f6a6751b6e07df706aa856' => 
    array (
      0 => '/homepages/37/d619410358/htdocs/developer/template/fields/field_static.html',
      1 => 1466056147,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '73828335778b6e55d5689-19266279',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'value' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5778b6e55f9f90_52775895',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5778b6e55f9f90_52775895')) {function content_5778b6e55f9f90_52775895($_smarty_tpl) {?><div  class="d1" >
  <div class="fldTitle"><?php echo $_smarty_tpl->getSubTemplate ('fields/req.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);
echo $_smarty_tpl->tpl_vars['title']->value;?>
</div>
    <?php echo $_smarty_tpl->tpl_vars['value']->value;?>

  <?php echo $_smarty_tpl->getSubTemplate ('fields/note.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</div>
<?php }} ?>
