<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-07-03 02:55:33
         compiled from "/homepages/37/d619410358/htdocs/developer/template/leads/hardfields_view/BusinessName.html" */ ?>
<?php /*%%SmartyHeaderCode:19212322345778b6e50e6ed2-55517271%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '14c0556d657c2a1a9646d6d344d7b4602a304544' => 
    array (
      0 => '/homepages/37/d619410358/htdocs/developer/template/leads/hardfields_view/BusinessName.html',
      1 => 1466056148,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19212322345778b6e50e6ed2-55517271',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'value' => 0,
    'BusinessName' => 0,
    'BusinessCity' => 0,
    'BusinessState' => 0,
    'BusinessZip' => 0,
    'BusinessAddress' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5778b6e5111573_72605606',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5778b6e5111573_72605606')) {function content_5778b6e5111573_72605606($_smarty_tpl) {?>
<div class="fldTitle">DBA Name
	<div class="fldTitleLinks">
		<a href="http://www.google.com/search?hl=en&q=<?php echo urlencode($_smarty_tpl->tpl_vars['value']->value);?>
" target="_blank">Google</a>
		<span class="sep">-</span> <a href="http://www.bbb.org/search/?term=<?php echo urlencode($_smarty_tpl->tpl_vars['BusinessName']->value);?>
&location=<?php echo urlencode($_smarty_tpl->tpl_vars['BusinessCity']->value);?>
, <?php echo urlencode($_smarty_tpl->tpl_vars['BusinessState']->value);?>
, <?php echo urlencode($_smarty_tpl->tpl_vars['BusinessZip']->value);?>
&filter=Businesses&searchFrom=searchpage" target="_blank">BBB</a>
		<span class="sep">-</span> <a href="https://creditreports.dnb.com/webapp/wcs/stores/servlet/IballValidationCmd?storeId=11154&catalogId=71154&searchType=BSF&busName=<?php echo urlencode($_smarty_tpl->tpl_vars['BusinessName']->value);?>
&state=<?php echo urlencode($_smarty_tpl->tpl_vars['BusinessState']->value);?>
&country=US&productId=0&cm_mmc=cr-_-home-_-retail-_-lookup-_-herospot" target="_blank">D&B</a>
		<span class="sep">-</span> 
			<a href="/searchinternet.php?cmd=yelp&name=<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
&address=<?php echo urlencode($_smarty_tpl->tpl_vars['BusinessAddress']->value);?>
&city=<?php echo urlencode($_smarty_tpl->tpl_vars['BusinessCity']->value);?>
&state=<?php echo urlencode($_smarty_tpl->tpl_vars['BusinessState']->value);?>
&zip=<?php echo urlencode($_smarty_tpl->tpl_vars['BusinessZip']->value);?>
" target="_blank">Yelp</a>			  
	</div>
</div>
<input type="text" readonly="readonly" class="inpWide" value="<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
" /> <?php }} ?>
