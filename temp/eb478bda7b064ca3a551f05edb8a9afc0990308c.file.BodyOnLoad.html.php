<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-07-03 02:23:49
         compiled from "/homepages/37/d619410358/htdocs/developer/template/BodyOnLoad.html" */ ?>
<?php /*%%SmartyHeaderCode:20641296155778af75c06e06-69080739%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eb478bda7b064ca3a551f05edb8a9afc0990308c' => 
    array (
      0 => '/homepages/37/d619410358/htdocs/developer/template/BodyOnLoad.html',
      1 => 1466056144,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20641296155778af75c06e06-69080739',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5778af75c9b755_97675149',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5778af75c9b755_97675149')) {function content_5778af75c9b755_97675149($_smarty_tpl) {?><?php if (!is_callable('smarty_function_func')) include '/homepages/37/d619410358/htdocs/developer/ext/smarty3/plugins/function.func.php';
?><?php echo '<script'; ?>
 language="Javascript">
$(document).ready(function() {
	myBodyOnLoad();
	<?php echo smarty_function_func(array('name'=>'BodyOnLoad'),$_smarty_tpl);?>

});
<?php echo '</script'; ?>
>


<?php }} ?>
