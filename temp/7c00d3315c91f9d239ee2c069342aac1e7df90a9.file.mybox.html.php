<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-07-03 02:23:49
         compiled from "/homepages/37/d619410358/htdocs/developer/template/mybox.html" */ ?>
<?php /*%%SmartyHeaderCode:872541335778af75cdc455-85824178%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7c00d3315c91f9d239ee2c069342aac1e7df90a9' => 
    array (
      0 => '/homepages/37/d619410358/htdocs/developer/template/mybox.html',
      1 => 1466056145,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '872541335778af75cdc455-85824178',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'node' => 0,
    'SecNodeStatus' => 0,
    'class' => 0,
    'url' => 0,
    'title' => 0,
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5778af75d5ba21_86432951',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5778af75d5ba21_86432951')) {function content_5778af75d5ba21_86432951($_smarty_tpl) {?><?php if (!is_callable('smarty_function_js_include')) include '/homepages/37/d619410358/htdocs/developer/ext/smarty3/plugins/function.js_include.php';
if (!is_callable('smarty_function_func')) include '/homepages/37/d619410358/htdocs/developer/ext/smarty3/plugins/function.func.php';
?><?php echo smarty_function_js_include(array('src'=>'/js/mybox.js'),$_smarty_tpl);?>


<?php if ($_smarty_tpl->tpl_vars['node']->value) {?>
	<?php echo smarty_function_func(array('name'=>'SecNodeStatus','node'=>$_smarty_tpl->tpl_vars['node']->value,'sec'=>'mybox','var'=>'SecNodeStatus'),$_smarty_tpl);?>

<?php }?>

<div data-num="<?php echo $_smarty_tpl->tpl_vars['SecNodeStatus']->value['sortOrder'];?>
" data-navcol="<?php echo $_smarty_tpl->tpl_vars['SecNodeStatus']->value['navCol'];?>
" data-node="<?php echo $_smarty_tpl->tpl_vars['node']->value;?>
" class="mybox <?php echo $_smarty_tpl->tpl_vars['class']->value;?>
 <?php if ($_smarty_tpl->tpl_vars['node']->value) {?>mybox-slide<?php }?>">
	<h2>
		<div class="title">
			<?php if ($_smarty_tpl->tpl_vars['url']->value) {?>
				<a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['title']->value)===null||$tmp==='' ? '&nbsp;' : $tmp);?>
</a>
			<?php } else { ?>
				<?php echo (($tmp = @$_smarty_tpl->tpl_vars['title']->value)===null||$tmp==='' ? '&nbsp;' : $tmp);?>

			<?php }?>
		</div>
		<?php if ($_smarty_tpl->tpl_vars['node']->value) {?>
	    <div id="<?php echo $_smarty_tpl->tpl_vars['node']->value;?>
_btn" onclick="mybox_showHideBox('<?php echo $_smarty_tpl->tpl_vars['node']->value;?>
')" class="rightMinus"></div>
	    <?php }?>
	</h2>
	<div id="<?php echo $_smarty_tpl->tpl_vars['node']->value;?>
_block" class="box-inner">
    	<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

	</div>
	<div class="more">&nbsp;</div>
</div>


<?php if ($_smarty_tpl->tpl_vars['node']->value) {?>
<?php echo '<script'; ?>
 language="javascript">
	mybox_initBox('<?php echo $_smarty_tpl->tpl_vars['node']->value;?>
','<?php echo $_smarty_tpl->tpl_vars['SecNodeStatus']->value['state'];?>
','<?php echo $_smarty_tpl->tpl_vars['SecNodeStatus']->value['sortOrder'];?>
');
<?php echo '</script'; ?>
>
<?php }?><?php }} ?>
