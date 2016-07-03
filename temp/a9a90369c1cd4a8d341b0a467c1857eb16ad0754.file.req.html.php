<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-07-03 02:55:33
         compiled from "/homepages/37/d619410358/htdocs/developer/template/fields/req.html" */ ?>
<?php /*%%SmartyHeaderCode:19078634115778b6e50654d0-55378738%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a9a90369c1cd4a8d341b0a467c1857eb16ad0754' => 
    array (
      0 => '/homepages/37/d619410358/htdocs/developer/template/fields/req.html',
      1 => 1466056147,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19078634115778b6e50654d0-55378738',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'isRequired' => 0,
    'name' => 0,
    'title' => 0,
    'validationType' => 0,
    'validationLen' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5778b6e50dbea8_85102809',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5778b6e50dbea8_85102809')) {function content_5778b6e50dbea8_85102809($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['isRequired']->value) {?>
	<span class="redstarr">*</span>
<?php }?>

<?php echo '<script'; ?>
 language="JavaScript">validateAnyPage_AddField(
		'<?php echo strtr($_smarty_tpl->tpl_vars['name']->value, array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
		'<?php echo strtr($_smarty_tpl->tpl_vars['title']->value, array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
		'<?php echo strtr($_smarty_tpl->tpl_vars['isRequired']->value, array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
		'<?php echo strtr($_smarty_tpl->tpl_vars['validationType']->value, array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
		'<?php echo strtr($_smarty_tpl->tpl_vars['validationLen']->value, array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
');
<?php echo '</script'; ?>
>


<?php }} ?>
