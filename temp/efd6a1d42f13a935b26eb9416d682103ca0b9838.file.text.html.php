<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-07-03 02:55:33
         compiled from "/homepages/37/d619410358/htdocs/developer/template/leads/fieldtypes_view/text.html" */ ?>
<?php /*%%SmartyHeaderCode:6394581215778b6e50211e6-39954210%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'efd6a1d42f13a935b26eb9416d682103ca0b9838' => 
    array (
      0 => '/homepages/37/d619410358/htdocs/developer/template/leads/fieldtypes_view/text.html',
      1 => 1466056148,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6394581215778b6e50211e6-39954210',
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
  'unifunc' => 'content_5778b6e505ce38_15081563',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5778b6e505ce38_15081563')) {function content_5778b6e505ce38_15081563($_smarty_tpl) {?>  <div class="fldTitle"><?php echo $_smarty_tpl->getSubTemplate ('fields/req.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);
echo $_smarty_tpl->tpl_vars['title']->value;?>
</div>
    <input type="text" readonly="readonly" class="inpWide" value="<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
"/>
<?php }} ?>
