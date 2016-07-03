<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-07-03 02:55:33
         compiled from "/homepages/37/d619410358/htdocs/developer/template/gtabs.html" */ ?>
<?php /*%%SmartyHeaderCode:10272019585778b6e5e06527-79731214%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '89a233f7e21733b5290447a84a72bb58ac0f6dcd' => 
    array (
      0 => '/homepages/37/d619410358/htdocs/developer/template/gtabs.html',
      1 => 1466056144,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10272019585778b6e5e06527-79731214',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'gtabs' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5778b6e5e4af82_49546527',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5778b6e5e4af82_49546527')) {function content_5778b6e5e4af82_49546527($_smarty_tpl) {?><?php if (!is_callable('smarty_function_js_include')) include '/homepages/37/d619410358/htdocs/developer/ext/smarty3/plugins/function.js_include.php';
?><?php echo smarty_function_js_include(array('src'=>'/css/g_tabs.css'),$_smarty_tpl);?>


<div align="center" class="gdhp-main-table" style='text-align:center'>

<div style='display:inline-block'>
<ul  class="g-tabs">
	<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['gtabs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
    <li 
    	<?php if (!$_smarty_tpl->tpl_vars['item']->value['isLocked']) {?> onClick="window.location.href='<?php echo $_smarty_tpl->tpl_vars['item']->value['url'];?>
'" <?php }?> 
    	<?php if ($_smarty_tpl->tpl_vars['item']->value['tooltip']) {?> onmouseover="tooltip.show('<div style=\'max-width:300px\' class=\'wrap\'><?php echo htmlspecialchars(strtr($_smarty_tpl->tpl_vars['item']->value['tooltip'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" )), ENT_QUOTES, 'UTF-8', true);?>
</div>')" onmouseout="tooltip.hide()" <?php }?> 
    	class="<?php if ($_smarty_tpl->tpl_vars['item']->value['isActive']) {?>g-tab-active<?php }?> <?php if ($_smarty_tpl->tpl_vars['item']->value['isLocked']) {?>g-tab-locked<?php }?> <?php if ($_smarty_tpl->tpl_vars['item']->value['isCompleted']) {?>g-tab-completed<?php }?> <?php if ($_smarty_tpl->tpl_vars['item']->value['colorClass']) {?>g-tab-<?php echo $_smarty_tpl->tpl_vars['item']->value['colorClass'];
}?>" >
	<span style="<?php if ($_smarty_tpl->tpl_vars['item']->value['tabwidth']) {?>width:<?php echo $_smarty_tpl->tpl_vars['item']->value['tabwidth'];?>
;<?php }?>">
		<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>

		<?php if (isset($_smarty_tpl->tpl_vars['item']->value['cnt'])) {?>(<?php echo $_smarty_tpl->tpl_vars['item']->value['cnt'];?>
)<?php }?>
	</span>	
	</li>
	<?php } ?>
  </ul>
</div>

</div>


<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['gtabs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
<?php if ($_smarty_tpl->tpl_vars['item']->value['isActive']&&$_smarty_tpl->tpl_vars['item']->value['links']) {?>
<div style='margin-top:4px;margin-bottom:-4px;'>
<?php echo $_smarty_tpl->getSubTemplate ('tab_links.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('tab_links'=>$_smarty_tpl->tpl_vars['item']->value['links']), 0);?>

</div>

<?php }?>
<?php } ?>

<?php }} ?>
