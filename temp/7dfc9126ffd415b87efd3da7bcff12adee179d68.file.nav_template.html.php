<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-07-03 02:24:12
         compiled from "/homepages/37/d619410358/htdocs/developer/template/navigation/nav_template.html" */ ?>
<?php /*%%SmartyHeaderCode:18797307725778af8c2e3ff5-97006992%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7dfc9126ffd415b87efd3da7bcff12adee179d68' => 
    array (
      0 => '/homepages/37/d619410358/htdocs/developer/template/navigation/nav_template.html',
      1 => 1466056149,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18797307725778af8c2e3ff5-97006992',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'sections' => 0,
    'slidebox_section' => 0,
    'slidebox' => 0,
    'title' => 0,
    'slidebox_item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5778af8c344465_65996588',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5778af8c344465_65996588')) {function content_5778af8c344465_65996588($_smarty_tpl) {?><?php if (!is_callable('smarty_function_js_include')) include '/homepages/37/d619410358/htdocs/developer/ext/smarty3/plugins/function.js_include.php';
if (!is_callable('smarty_block_mybox')) include '/homepages/37/d619410358/htdocs/developer/ext/smarty3/plugins/block.mybox.php';
if (!is_callable('smarty_modifier_money')) include '/homepages/37/d619410358/htdocs/developer/ext/smarty3/plugins/modifier.money.php';
?><?php echo smarty_function_js_include(array('src'=>'/js/nav.js'),$_smarty_tpl);?>

<?php echo smarty_function_js_include(array('src'=>'/css/navbtn.css'),$_smarty_tpl);?>






<?php  $_smarty_tpl->tpl_vars['slidebox_section'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['slidebox_section']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['sections']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['slidebox_section']->key => $_smarty_tpl->tpl_vars['slidebox_section']->value) {
$_smarty_tpl->tpl_vars['slidebox_section']->_loop = true;
?>
<?php if ($_smarty_tpl->tpl_vars['slidebox_section']->value['items']||$_smarty_tpl->tpl_vars['slidebox_section']->value['html']) {?>

	
	<?php if (isset($_smarty_tpl->tpl_vars['slidebox_section']->value['cnt'])) {?> 
		<?php $_smarty_tpl->tpl_vars['title'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['slidebox_section']->value['title'])." (".((string)$_smarty_tpl->tpl_vars['slidebox_section']->value['cnt']).")", null, 0);?>
	<?php } else { ?>
		<?php $_smarty_tpl->tpl_vars['title'] = new Smarty_variable($_smarty_tpl->tpl_vars['slidebox_section']->value['title'], null, 0);?>
	<?php }?>


	<?php $_smarty_tpl->smarty->_tag_stack[] = array('mybox', array('node'=>((string)$_smarty_tpl->tpl_vars['slidebox']->value['code'])."_".((string)$_smarty_tpl->tpl_vars['slidebox_section']->value['code']),'title'=>$_smarty_tpl->tpl_vars['title']->value,'class'=>"box-one box-gray box-nav")); $_block_repeat=true; echo smarty_block_mybox(array('node'=>((string)$_smarty_tpl->tpl_vars['slidebox']->value['code'])."_".((string)$_smarty_tpl->tpl_vars['slidebox_section']->value['code']),'title'=>$_smarty_tpl->tpl_vars['title']->value,'class'=>"box-one box-gray box-nav"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

		
		

		<div id="<?php echo $_smarty_tpl->tpl_vars['slidebox']->value['code'];?>
_<?php echo $_smarty_tpl->tpl_vars['slidebox_section']->value['code'];?>
_block" class="leftMenuDDItems">


		  <?php if ($_smarty_tpl->tpl_vars['slidebox_section']->value['items']) {?>
			  <?php  $_smarty_tpl->tpl_vars['slidebox_item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['slidebox_item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['slidebox_section']->value['items']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['slidebox_item']->key => $_smarty_tpl->tpl_vars['slidebox_item']->value) {
$_smarty_tpl->tpl_vars['slidebox_item']->_loop = true;
?>
			  	<div class="left_btn1 <?php if ($_smarty_tpl->tpl_vars['slidebox_section']->value['type']=='bluelinks') {?>lead_btn1<?php }?> <?php echo $_smarty_tpl->tpl_vars['slidebox_item']->value['class'];?>
" onclick="myRedirect('<?php echo $_smarty_tpl->tpl_vars['slidebox_item']->value['url'];?>
','<?php echo $_smarty_tpl->tpl_vars['slidebox_item']->value['target'];?>
')" <?php if ($_smarty_tpl->tpl_vars['slidebox_item']->value['tooltip']) {?>data-tooltip="<?php echo $_smarty_tpl->tpl_vars['slidebox_item']->value['tooltip'];?>
"<?php }?>>
			  		<div class="left" title="<?php echo $_smarty_tpl->tpl_vars['slidebox_item']->value['title'];?>
"><?php echo $_smarty_tpl->tpl_vars['slidebox_item']->value['title'];?>
</div>
		  			<?php if (isset($_smarty_tpl->tpl_vars['slidebox_item']->value['cnt'])||$_smarty_tpl->tpl_vars['slidebox_item']->value['showCnt']) {?>
			  		<div class="right">
			  			<div class="counter">
							<?php if (is_numeric($_smarty_tpl->tpl_vars['slidebox_item']->value['cnt'])) {
echo smarty_modifier_money($_smarty_tpl->tpl_vars['slidebox_item']->value['cnt'],0);
} else {
echo $_smarty_tpl->tpl_vars['slidebox_item']->value['cnt'];
}?>
						</div>
					</div>
					<?php }?>
			  	</div>
		  	  <?php } ?>
		  <?php }?>
	 
		  
		  
		  



	      
	      <?php if ($_smarty_tpl->tpl_vars['slidebox_section']->value['html']) {?>
	      	<?php echo $_smarty_tpl->tpl_vars['slidebox_section']->value['html'];?>

	      <?php }?>



		</div>
	<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_mybox(array('node'=>((string)$_smarty_tpl->tpl_vars['slidebox']->value['code'])."_".((string)$_smarty_tpl->tpl_vars['slidebox_section']->value['code']),'title'=>$_smarty_tpl->tpl_vars['title']->value,'class'=>"box-one box-gray box-nav"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
		



<?php }?>
<?php } ?>




<?php }} ?>
