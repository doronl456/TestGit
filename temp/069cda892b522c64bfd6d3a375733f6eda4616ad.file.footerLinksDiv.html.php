<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-07-03 02:23:49
         compiled from "/homepages/37/d619410358/htdocs/developer/template/footerLinksDiv.html" */ ?>
<?php /*%%SmartyHeaderCode:1961330155778af75d943b8-07398846%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '069cda892b522c64bfd6d3a375733f6eda4616ad' => 
    array (
      0 => '/homepages/37/d619410358/htdocs/developer/template/footerLinksDiv.html',
      1 => 1466056144,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1961330155778af75d943b8-07398846',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'footerSels' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5778af75dcebf8_31205237',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5778af75dcebf8_31205237')) {function content_5778af75dcebf8_31205237($_smarty_tpl) {?>
<?php echo '<script'; ?>
 language="javascript">
	function myFooterPopup(code){
		 var objWindow = window.open("site_config.php?cmd=show&popup=1&code="+code,"","scrollbars=1,location=0,menubar=0,resizable=0,status=0,titlebar=0,toolbar=0,height=500,width=600,titlebar");
	}
<?php echo '</script'; ?>
>

<div>
<?php if ($_smarty_tpl->tpl_vars['footerSels']->value['About']) {?><a href="javascript:void(0);" onClick="myFooterPopup('footerAbout');return false;">About</a> -<?php }?>
<?php if ($_smarty_tpl->tpl_vars['footerSels']->value['Contact']) {?>	<a href="javascript:void(0);" onClick="myFooterPopup('footerContact');return false;">Contact</a> -<?php }?>
<?php if ($_smarty_tpl->tpl_vars['footerSels']->value['Support']) {?>	<a href="javascript:void(0);" onClick="myFooterPopup('footerSupport');return false;">Support</a> -<?php }?>
<?php if ($_smarty_tpl->tpl_vars['footerSels']->value['Careers']) {?>	<a href="javascript:void(0);" onClick="myFooterPopup('footerCareers');return false;">Careers</a> -<?php }?>
<?php if ($_smarty_tpl->tpl_vars['footerSels']->value['Referrals']) {?>	<a href="javascript:void(0);" onClick="myFooterPopup('footerReferrals');return false;">Referrals</a> -<?php }?>
<?php if ($_smarty_tpl->tpl_vars['footerSels']->value['Terms']) {?>	<a href="javascript:void(0);" onClick="myFooterPopup('footerTerms');return false;">Terms of Service</a> -<?php }?>
<?php if ($_smarty_tpl->tpl_vars['footerSels']->value['Legal']) {?>	<a href="javascript:void(0);" onClick="myFooterPopup('footerLegal');return false;">Legal</a> -<?php }?>
<?php if ($_smarty_tpl->tpl_vars['footerSels']->value['Privacy']) {?>	<a href="javascript:void(0);" onClick="myFooterPopup('footerPrivacy');return false;">Privacy</a> -<?php }?>
<?php if ($_smarty_tpl->tpl_vars['footerSels']->value['Security']) {?>	<a href="javascript:void(0);" onClick="myFooterPopup('footerSecurity');return false;">Security</a> -<?php }?>
<?php if ($_smarty_tpl->tpl_vars['footerSels']->value['ProtectPC']) {?>	<a href="javascript:void(0);" onClick="myFooterPopup('footerProtectPC');return false;">Protect Your PC</a> -<?php }?>
<?php if ($_smarty_tpl->tpl_vars['footerSels']->value['ProtectBus']) {?>	<a href="javascript:void(0);" onClick="myFooterPopup('footerProtectBusiness');return false;">Protect Your Business</a> <?php }?>
</div>
<div>
<?php if ($_smarty_tpl->tpl_vars['footerSels']->value['PCI']) {?>	<a href="https://www.pcisecuritystandards.org/" target="_blank">PCI Security Standards</a> -<?php }?>
<?php if ($_smarty_tpl->tpl_vars['footerSels']->value['VISA']) {?>	<a href="http://usa.visa.com/merchants/risk_management/cisp.html" target="_blank">Visa CISP</a> -<?php }?>
<?php if ($_smarty_tpl->tpl_vars['footerSels']->value['MC']) {?>	<a href="http://www.mastercard.com/us/sdp/index.html" target="_blank">MasterCard SDP</a> -<?php }?>
<?php if ($_smarty_tpl->tpl_vars['footerSels']->value['DISC']) {?>	<a href="http://www.discovernetwork.com/fraudsecurity/disc.html" target="_blank">Discover Network DISC</a> -<?php }?>
<?php if ($_smarty_tpl->tpl_vars['footerSels']->value['Trust']) {?>	<a href="https://www.trustwave.com" target="_blank">Trust Wave</a> <?php }?>
</div><?php }} ?>
