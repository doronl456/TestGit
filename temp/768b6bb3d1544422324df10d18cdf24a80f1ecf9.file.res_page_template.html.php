<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-07-03 02:51:59
         compiled from "/homepages/37/d619410358/htdocs/developer/template/res_page_template.html" */ ?>
<?php /*%%SmartyHeaderCode:21248076375778b60fd0dd02-26044997%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '768b6bb3d1544422324df10d18cdf24a80f1ecf9' => 
    array (
      0 => '/homepages/37/d619410358/htdocs/developer/template/res_page_template.html',
      1 => 1466056145,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21248076375778b60fd0dd02-26044997',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'PAGETITLE' => 0,
    'tpl_title' => 0,
    'tpl_links' => 0,
    'key' => 0,
    'item' => 0,
    'tpl_contents_width' => 0,
    'contents' => 0,
    'CONFIG' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5778b60fd58bd5_47171458',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5778b60fd58bd5_47171458')) {function content_5778b60fd58bd5_47171458($_smarty_tpl) {?><?php if (!is_callable('smarty_function_js_include')) include '/homepages/37/d619410358/htdocs/developer/ext/smarty3/plugins/function.js_include.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<HTML>
<HEAD>
<?php echo '<script'; ?>
 type="text/javascript" src="/js/init.js"><?php echo '</script'; ?>
>

<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<META NAME="Generator" CONTENT="NetObjects Fusion 7.5 for Windows">
<TITLE><?php echo $_smarty_tpl->tpl_vars['PAGETITLE']->value;?>
</TITLE>
<?php echo smarty_function_js_include(array('src'=>'/css/style.css'),$_smarty_tpl);?>

<?php echo smarty_function_js_include(array('src'=>'/corp/style_c.css'),$_smarty_tpl);?>


<?php echo smarty_function_js_include(array('src'=>'/js/jquery-1.9.1.min.js'),$_smarty_tpl);?>

<?php echo smarty_function_js_include(array('src'=>'/js/jquery-ui-1.11.2/jquery-ui.css'),$_smarty_tpl);?>

<?php echo smarty_function_js_include(array('src'=>'/js/jquery-ui-1.11.2/jquery-ui.min.js'),$_smarty_tpl);?>

<?php echo smarty_function_js_include(array('src'=>'/js/functions.js'),$_smarty_tpl);?>

<?php echo smarty_function_js_include(array('src'=>'/js/bubble.js'),$_smarty_tpl);?>

<?php echo smarty_function_js_include(array('src'=>'/js/nav.js'),$_smarty_tpl);?>

<?php echo $_smarty_tpl->getSubTemplate ('startup.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<?php echo smarty_function_js_include(array('src'=>'/corp/favicon.ico'),$_smarty_tpl);?>

<?php echo $_smarty_tpl->getSubTemplate ('BodyOnLoad.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</HEAD>
<BODY TOPMARGIN=0 LEFTMARGIN=0 MARGINWIDTH=0 MARGINHEIGHT=0>

<div id="mostOuterDiv">
<table id="mostOuterTable" cellpadding="0" cellspacing="0" border="0">
  
<tr>
  <td>
<DIV class="header2">
<table class="topLinksBar" border="0" cellpadding="0" cellspacing="0" width="100%">
	<tr>
	<td align="left">

	<a class="popupHomeLink" href="javascript:;" onclick="myRedirect('/','opener')" title="Back to Home"></a>
	<?php echo (($tmp = @$_smarty_tpl->tpl_vars['tpl_title']->value)===null||$tmp==='' ? 'CRM Merchant Management Software' : $tmp);?>

	

</td>
	<td align="right">
	<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['tpl_links']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
	 	<?php if ($_smarty_tpl->tpl_vars['key']->value) {?> - <?php }?>
	 	<?php if ($_smarty_tpl->tpl_vars['item']->value['url']) {?>
			<a href="javascript:;" onclick="myRedirect('<?php echo $_smarty_tpl->tpl_vars['item']->value['url'];?>
','<?php echo $_smarty_tpl->tpl_vars['item']->value['target'];?>
')"><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</a>
		<?php } else { ?>
			<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>

		<?php }?>
	<?php } ?>
	</td>
	</tr></table>
</DIV>


</td>
</tr>  
  
  
<tr class="r2">
	<td style="background-color:#ffffff;">
    	<div align="center" class="ResTplContent">
			<table border="0" style="width:<?php echo $_smarty_tpl->tpl_vars['tpl_contents_width']->value;?>
">
			<tr><td style="">
	    	<?php echo $_smarty_tpl->tpl_vars['contents']->value;?>

	        </td></tr>
			</table>
        </div>
	</td>
</tr>
<tr>
  <td>
<DIV class="footer4">
                  <div><?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['CopyrightText'];?>
</div>
                  <div><?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['PoweredBy'];?>
</div>
</DIV>


</td>
</tr>
</table>
</div>



</BODY>
</HTML>
 <?php }} ?>
