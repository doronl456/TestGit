<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-07-03 02:55:33
         compiled from "/homepages/37/d619410358/htdocs/developer/template/leads/fieldtypes_view/DOB.html" */ ?>
<?php /*%%SmartyHeaderCode:21318579115778b6e5250357-45318366%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '241de59f5dbcbcfdfc3f458df78c0506fd100f4d' => 
    array (
      0 => '/homepages/37/d619410358/htdocs/developer/template/leads/fieldtypes_view/DOB.html',
      1 => 1466056148,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21318579115778b6e5250357-45318366',
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
  'unifunc' => 'content_5778b6e5271ea7_87612051',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5778b6e5271ea7_87612051')) {function content_5778b6e5271ea7_87612051($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date')) include '/homepages/37/d619410358/htdocs/developer/ext/smarty3/plugins/modifier.date.php';
?>
  <div class="fldTitle"><?php echo $_smarty_tpl->getSubTemplate ('fields/req.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);
echo $_smarty_tpl->tpl_vars['title']->value;?>
 <?php if (permitted('confEnableCanada')) {?> (Postal Code)<?php }?></div>
<input type="text" readonly="readonly" class="inpWide" value="<?php echo smarty_modifier_date($_smarty_tpl->tpl_vars['value']->value);?>
"/>
<?php }} ?>
