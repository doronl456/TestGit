<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-07-03 02:51:13
         compiled from "/homepages/37/d619410358/htdocs/developer/template/calendar.html" */ ?>
<?php /*%%SmartyHeaderCode:4935955415778b5e1ae3cb1-27904845%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8944887e809b1ccd57bcfe5d4c368d020dc1588e' => 
    array (
      0 => '/homepages/37/d619410358/htdocs/developer/template/calendar.html',
      1 => 1466056144,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4935955415778b5e1ae3cb1-27904845',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5778b5e1b0de11_40700872',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5778b5e1b0de11_40700872')) {function content_5778b5e1b0de11_40700872($_smarty_tpl) {?><?php if (!is_callable('smarty_function_js_include')) include '/homepages/37/d619410358/htdocs/developer/ext/smarty3/plugins/function.js_include.php';
?><!-- calendar stylesheet -->
<?php echo smarty_function_js_include(array('src'=>'/js/calendar-win2k-cold-1.css'),$_smarty_tpl);?>

<?php echo smarty_function_js_include(array('src'=>'/js/calendar.js'),$_smarty_tpl);?>

<?php echo smarty_function_js_include(array('src'=>'/js/lang/calendar-en.js'),$_smarty_tpl);?>

<?php echo smarty_function_js_include(array('src'=>'/js/calendar-setup.js'),$_smarty_tpl);?>


<?php }} ?>
