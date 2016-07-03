<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-07-03 02:55:33
         compiled from "/homepages/37/d619410358/htdocs/developer/template/leads/fieldtypes_view/TaxID.html" */ ?>
<?php /*%%SmartyHeaderCode:17401797835778b6e52a2472-21467990%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cce2e75fe3d86cf3f9c006387a5cbc7473558135' => 
    array (
      0 => '/homepages/37/d619410358/htdocs/developer/template/leads/fieldtypes_view/TaxID.html',
      1 => 1466056148,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17401797835778b6e52a2472-21467990',
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
  'unifunc' => 'content_5778b6e52b7705_27809830',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5778b6e52b7705_27809830')) {function content_5778b6e52b7705_27809830($_smarty_tpl) {?>
  <div class="fldTitle"><?php echo $_smarty_tpl->getSubTemplate ('fields/req.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);
echo $_smarty_tpl->tpl_vars['title']->value;?>
 <?php if (permitted('confEnableCanada')) {?> (Postal Code)<?php }?></div>
<input type="text" readonly="readonly" class="inpWide" value="<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
"/>
<?php }} ?>
