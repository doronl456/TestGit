<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-07-03 02:55:33
         compiled from "/homepages/37/d619410358/htdocs/developer/template/leads/fieldtypes_view/select.html" */ ?>
<?php /*%%SmartyHeaderCode:10077429575778b6e5164825-92248010%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '22d25643c55ed34c91786fb8bd7dac0372fbb3fa' => 
    array (
      0 => '/homepages/37/d619410358/htdocs/developer/template/leads/fieldtypes_view/select.html',
      1 => 1466056148,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10077429575778b6e5164825-92248010',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'value' => 0,
    'selOptions' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5778b6e5190576_13720341',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5778b6e5190576_13720341')) {function content_5778b6e5190576_13720341($_smarty_tpl) {?><div   >
  <div class="fldTitle"><?php echo $_smarty_tpl->getSubTemplate ('fields/req.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);
echo $_smarty_tpl->tpl_vars['title']->value;?>
</div>

    <input type="text" readonly="readonly" class="inpWide" value="<?php if ($_smarty_tpl->tpl_vars['value']->value) {
echo $_smarty_tpl->tpl_vars['selOptions']->value[$_smarty_tpl->tpl_vars['value']->value];
}?>"/>

</div>
<?php }} ?>
