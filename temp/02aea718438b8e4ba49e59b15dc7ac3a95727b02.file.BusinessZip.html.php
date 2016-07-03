<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-07-03 02:55:33
         compiled from "/homepages/37/d619410358/htdocs/developer/template/leads/hardfields_view/BusinessZip.html" */ ?>
<?php /*%%SmartyHeaderCode:1169664625778b6e527a8f8-71693559%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '02aea718438b8e4ba49e59b15dc7ac3a95727b02' => 
    array (
      0 => '/homepages/37/d619410358/htdocs/developer/template/leads/hardfields_view/BusinessZip.html',
      1 => 1466056148,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1169664625778b6e527a8f8-71693559',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'value' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5778b6e529afd7_66242694',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5778b6e529afd7_66242694')) {function content_5778b6e529afd7_66242694($_smarty_tpl) {?><div class="fldTitle">Zip Code
	<div class="fldTitleLinks">
    	<a href="http://zip4.usps.com/zip4/zcl_3_results.jsp?zip5=<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
" target="_blank">USPS Search</a>
	</div>			
</div>
<input type="text" readonly="readonly" class="inpWide" value="<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
"/><?php }} ?>
