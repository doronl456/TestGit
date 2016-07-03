<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-07-03 02:23:49
         compiled from "/homepages/37/d619410358/htdocs/developer/template/startup.html" */ ?>
<?php /*%%SmartyHeaderCode:6597591585778af75b9c538-32247072%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a2743ebfa9514cfd6d9360f25f630cb69626a1a5' => 
    array (
      0 => '/homepages/37/d619410358/htdocs/developer/template/startup.html',
      1 => 1466056145,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6597591585778af75b9c538-32247072',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5778af75be41c2_04486561',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5778af75be41c2_04486561')) {function content_5778af75be41c2_04486561($_smarty_tpl) {?><?php if (!is_callable('smarty_function_js_data')) include '/homepages/37/d619410358/htdocs/developer/ext/smarty3/plugins/function.js_data.php';
if (!is_callable('smarty_function_js_include')) include '/homepages/37/d619410358/htdocs/developer/ext/smarty3/plugins/function.js_include.php';
?><?php echo smarty_function_js_data(array('gNonce'=>lib_nonce::getNonce()),$_smarty_tpl);?>

<?php echo smarty_function_js_include(array('src'=>'/js/startup.js'),$_smarty_tpl);?>
<?php }} ?>
