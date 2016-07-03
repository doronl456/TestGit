<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-07-03 02:55:33
         compiled from "/homepages/37/d619410358/htdocs/developer/template/tab_links.html" */ ?>
<?php /*%%SmartyHeaderCode:7100000795778b6e5e52d21-31051692%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '938f09b710fff26cb832d89452ee251803be6856' => 
    array (
      0 => '/homepages/37/d619410358/htdocs/developer/template/tab_links.html',
      1 => 1466056145,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7100000795778b6e5e52d21-31051692',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tab_links' => 0,
    'k' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5778b6e5e83898_70301546',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5778b6e5e83898_70301546')) {function content_5778b6e5e83898_70301546($_smarty_tpl) {?>	  <div class="GtabLinks">
	  <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['tab_links']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
		<span class="nobr"><?php if ($_smarty_tpl->tpl_vars['k']->value) {?> - <?php }?>	   <a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['url'];?>
" class="tab_link_active<?php echo $_smarty_tpl->tpl_vars['item']->value['isActive'];?>
" <?php if ($_smarty_tpl->tpl_vars['item']->value['window']) {?>target="_blank"<?php }?> <?php if ($_smarty_tpl->tpl_vars['item']->value['tooltip']) {?>title="<?php echo $_smarty_tpl->tpl_vars['item']->value['tooltip'];?>
"<?php }?>><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</a></span>
	  <?php } ?>
	  </div>
<?php }} ?>
