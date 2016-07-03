<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-07-03 02:55:33
         compiled from "/homepages/37/d619410358/htdocs/developer/template/controls/datetime.html" */ ?>
<?php /*%%SmartyHeaderCode:11369291695778b6e56214d4-10739946%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a480fcc578d2d77bb1cd4178f81b45fe3d63c5b6' => 
    array (
      0 => '/homepages/37/d619410358/htdocs/developer/template/controls/datetime.html',
      1 => 1466056147,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11369291695778b6e56214d4-10739946',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'name' => 0,
    'value' => 0,
    'disabled' => 0,
    'onchange' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5778b6e563b395_81390751',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5778b6e563b395_81390751')) {function content_5778b6e563b395_81390751($_smarty_tpl) {?><?php if (!is_callable('smarty_function_js_include')) include '/homepages/37/d619410358/htdocs/developer/ext/smarty3/plugins/function.js_include.php';
if (!is_callable('smarty_modifier_date_format')) include '/homepages/37/d619410358/htdocs/developer/ext/smarty3/plugins/modifier.date_format.php';
?><?php echo smarty_function_js_include(array('src'=>'/js/controls/datetime.js'),$_smarty_tpl);?>

<input readonly id="f_<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
_1" type="text" 
	 value="<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['value']->value,'%B %d, %Y, %I:%M %p');?>
" 
	maxlength="10" title="Click to change date" 
	style="width:100%"
	<?php if (!$_smarty_tpl->tpl_vars['disabled']->value) {?>
	onchange="datetimeCtrlOnchange('<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
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
        ifFormat       :    "%B %d, %Y, %I:%M %p",
        showsTime      :    true,
        button         :    "f_<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
_1",
        singleClick    :    true,
        step           :    1
    });
<?php echo '</script'; ?>
>
	<?php }?><?php }} ?>
