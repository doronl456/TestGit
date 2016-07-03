<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-07-03 02:55:33
         compiled from "/homepages/37/d619410358/htdocs/developer/template/leads/hardfields_view/Email.html" */ ?>
<?php /*%%SmartyHeaderCode:8566005495778b6e53fd318-12005002%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a3eeb139386315854d448dfa575a169621df20f1' => 
    array (
      0 => '/homepages/37/d619410358/htdocs/developer/template/leads/hardfields_view/Email.html',
      1 => 1466056148,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8566005495778b6e53fd318-12005002',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'value' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5778b6e5420784_87762891',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5778b6e5420784_87762891')) {function content_5778b6e5420784_87762891($_smarty_tpl) {?><?php if (!is_callable('smarty_block_m')) include '/homepages/37/d619410358/htdocs/developer/ext/smarty3/plugins/block.m.php';
?><div class="fldTitle"><?php $_smarty_tpl->smarty->_tag_stack[] = array('m', array()); $_block_repeat=true; echo smarty_block_m(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Email Address<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_m(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<div class="fldTitleLinks">				  
		<a href="http://www.myfreeemailsearch.com/search/reverse.asp?email=<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
" target="_blank">Search</a>
	</div>
</div>
<a href="mailto:<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
"><input type="text" readonly="readonly" class="inpWide" value="<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
"/></a><?php }} ?>
