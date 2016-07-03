<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-07-03 02:55:33
         compiled from "/homepages/37/d619410358/htdocs/developer/template/leads/fieldtypes_view/zip.html" */ ?>
<?php /*%%SmartyHeaderCode:12701711845778b6e5427712-79789940%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c76746a2213f70cfb1e87c57678712124d22f480' => 
    array (
      0 => '/homepages/37/d619410358/htdocs/developer/template/leads/fieldtypes_view/zip.html',
      1 => 1466056148,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12701711845778b6e5427712-79789940',
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
  'unifunc' => 'content_5778b6e543ec27_12210461',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5778b6e543ec27_12210461')) {function content_5778b6e543ec27_12210461($_smarty_tpl) {?>
  <div class="fldTitle"><?php echo $_smarty_tpl->getSubTemplate ('fields/req.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);
echo $_smarty_tpl->tpl_vars['title']->value;?>
 <?php if (permitted('confEnableCanada')) {?> (Postal Code)<?php }?></div>
<input type="text" readonly="readonly" class="inpWide" value="<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
"/>
<?php }} ?>
