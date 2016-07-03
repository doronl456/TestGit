<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-07-03 02:55:33
         compiled from "/homepages/37/d619410358/htdocs/developer/template/controls/date.html" */ ?>
<?php /*%%SmartyHeaderCode:10014932465778b6e5704844-60046688%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '00792943d74ab7c0c85bfc870deb401ec127e9a1' => 
    array (
      0 => '/homepages/37/d619410358/htdocs/developer/template/controls/date.html',
      1 => 1466056147,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10014932465778b6e5704844-60046688',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'format' => 0,
    'editable' => 0,
    'name' => 0,
    'value' => 0,
    'width' => 0,
    'disabled' => 0,
    'onchange' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5778b6e574ef07_40190296',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5778b6e574ef07_40190296')) {function content_5778b6e574ef07_40190296($_smarty_tpl) {?><?php if (!is_callable('smarty_function_js_include')) include '/homepages/37/d619410358/htdocs/developer/ext/smarty3/plugins/function.js_include.php';
if (!is_callable('smarty_modifier_date_format')) include '/homepages/37/d619410358/htdocs/developer/ext/smarty3/plugins/modifier.date_format.php';
?><?php echo $_smarty_tpl->getSubTemplate ('calendar.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo smarty_function_js_include(array('src'=>'/js/controls/date.js'),$_smarty_tpl);?>


<?php if (!$_smarty_tpl->tpl_vars['format']->value) {
$_smarty_tpl->tpl_vars['format'] = new Smarty_variable('%B %d, %Y', null, 0);
}?>
<input 
	<?php if (!$_smarty_tpl->tpl_vars['editable']->value) {?>	readonly <?php }?>
	
	id="f_<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
_1" type="text" 
	 value="<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['value']->value,$_smarty_tpl->tpl_vars['format']->value);?>
" 
	maxlength="10" title="Click to change date" 
	style="width:<?php echo (($tmp = @$_smarty_tpl->tpl_vars['width']->value)===null||$tmp==='' ? '100%' : $tmp);?>
"
	<?php if (!$_smarty_tpl->tpl_vars['disabled']->value) {?>
	onchange="dateCtrlOnchange('<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
');<?php echo $_smarty_tpl->tpl_vars['onchange']->value;?>
"
	<?php }?>
	/>
	<?php if (!$_smarty_tpl->tpl_vars['disabled']->value) {?>
<input name="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" type="hidden"  value="<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
" />
<?php echo '<script'; ?>
 type="text/javascript">
    Calendar.setup({
        inputField     :    "f_<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
_1",      
        ifFormat       :    "<?php echo $_smarty_tpl->tpl_vars['format']->value;?>
",
        showsTime      :    false,
        button         :    "f_<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
_1",
        singleClick    :    true,
        step           :    1
    });
<?php echo '</script'; ?>
>
	<?php }?>
	<?php }} ?>
