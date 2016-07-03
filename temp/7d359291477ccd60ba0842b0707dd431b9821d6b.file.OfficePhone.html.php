<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-07-03 02:55:33
         compiled from "/homepages/37/d619410358/htdocs/developer/template/leads/hardfields_view/OfficePhone.html" */ ?>
<?php /*%%SmartyHeaderCode:13429169225778b6e52bf1c3-51598208%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7d359291477ccd60ba0842b0707dd431b9821d6b' => 
    array (
      0 => '/homepages/37/d619410358/htdocs/developer/template/leads/hardfields_view/OfficePhone.html',
      1 => 1466056148,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13429169225778b6e52bf1c3-51598208',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'value' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5778b6e52d2f59_45412874',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5778b6e52d2f59_45412874')) {function content_5778b6e52d2f59_45412874($_smarty_tpl) {?><?php if (!is_callable('smarty_block_m')) include '/homepages/37/d619410358/htdocs/developer/ext/smarty3/plugins/block.m.php';
if (!is_callable('smarty_function_my_call')) include '/homepages/37/d619410358/htdocs/developer/ext/smarty3/plugins/function.my_call.php';
?><div class="fldTitle"><?php $_smarty_tpl->smarty->_tag_stack[] = array('m', array()); $_block_repeat=true; echo smarty_block_m(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Office Phone #<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_m(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<div class="fldTitleLinks">	
		 <a href="http://www.google.com/search?hl=en&q=<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
" target="_blank">Google</a>
		<span class="sep">-</span> <a href="http://www.phonenumber.com/search/ReversePhone?phone=<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
" target="_blank">Reverse</a>
	</div>
</div>
<input type="text" readonly="readonly" style="width:90px" value="<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
" /> <?php echo smarty_function_my_call(array('phone'=>$_smarty_tpl->tpl_vars['value']->value),$_smarty_tpl);?>
<?php }} ?>
