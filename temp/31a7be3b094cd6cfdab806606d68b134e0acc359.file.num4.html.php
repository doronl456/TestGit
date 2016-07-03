<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-07-03 02:55:33
         compiled from "/homepages/37/d619410358/htdocs/developer/template/leads/fieldtypes_view/num4.html" */ ?>
<?php /*%%SmartyHeaderCode:2967099885778b6e5446629-24710011%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '31a7be3b094cd6cfdab806606d68b134e0acc359' => 
    array (
      0 => '/homepages/37/d619410358/htdocs/developer/template/leads/fieldtypes_view/num4.html',
      1 => 1466056148,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2967099885778b6e5446629-24710011',
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
  'unifunc' => 'content_5778b6e54545f1_12519741',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5778b6e54545f1_12519741')) {function content_5778b6e54545f1_12519741($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_money')) include '/homepages/37/d619410358/htdocs/developer/ext/smarty3/plugins/modifier.money.php';
?>
  <div class="fldTitle"><?php echo $_smarty_tpl->getSubTemplate ('fields/req.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);
echo $_smarty_tpl->tpl_vars['title']->value;?>
</div>
<input type="text" readonly="readonly" class="inpWide" value="<?php echo smarty_modifier_money($_smarty_tpl->tpl_vars['value']->value);?>
"/><?php }} ?>
