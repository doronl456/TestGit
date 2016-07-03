<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-07-03 02:24:12
         compiled from "/homepages/37/d619410358/htdocs/developer/template/navigation/support_search_block.html" */ ?>
<?php /*%%SmartyHeaderCode:11615887385778af8c23e465-91729637%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eca4fdc7617c2924a561facc23a039b9a7026155' => 
    array (
      0 => '/homepages/37/d619410358/htdocs/developer/template/navigation/support_search_block.html',
      1 => 1466056149,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11615887385778af8c23e465-91729637',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'suppsearch' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5778af8c28b7b5_84722249',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5778af8c28b7b5_84722249')) {function content_5778af8c28b7b5_84722249($_smarty_tpl) {?><?php if (!is_callable('smarty_function_func')) include '/homepages/37/d619410358/htdocs/developer/ext/smarty3/plugins/function.func.php';
if (!is_callable('smarty_function_html_options')) include '/homepages/37/d619410358/htdocs/developer/ext/smarty3/plugins/function.html_options.php';
?><?php echo smarty_function_func(array('name'=>'SupportSearchBoxData','var'=>'suppsearch'),$_smarty_tpl);?>
		

<form method="get" action="/support.php">
<input type="hidden" name="cmd" value="search" />
<table cellspacing="0" cellpadding="0" width="100%" border="0" class="leftNavTable">
  <col class="col1" />
  <col class="col2" />
    <tr class="menuitemsub_k">
	<td colspan="2">
	
	<table style="width:178px" border="0" cellspacing="0" cellpadding="0">
	<tr>
	<td style='width:138px;padding:0px 2px 0px 4px;vertical-align:middle'><input type="text" name="str" style='width:138px' value="<?php echo $_smarty_tpl->tpl_vars['suppsearch']->value['SupportSearchStr'];?>
"></td>
	<td style='width:30px; padding:0px 2px 0px 2px;vertical-align:middle'><input style='width:25px;padding:1px;' type="submit" value="Go" /></td></tr></table>      </td>
    </tr>
    <tr class="menuitemsub_k" 
                      >
      <td colspan="2" style='width:178px;padding:0px 2px 0px 4px;'><select style='width:170px' name="type">
	<option value="all">Search All</option>
	<?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['suppsearch']->value['selSupportSearchType'],'selected'=>$_smarty_tpl->tpl_vars['suppsearch']->value['SupportSearchType']),$_smarty_tpl);?>

	  </select> </td>
    </tr>
</table>
</form><?php }} ?>
