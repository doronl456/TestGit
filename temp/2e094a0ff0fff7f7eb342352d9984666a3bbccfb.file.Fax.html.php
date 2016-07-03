<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-07-03 02:55:33
         compiled from "/homepages/37/d619410358/htdocs/developer/template/leads/hardfields_view/Fax.html" */ ?>
<?php /*%%SmartyHeaderCode:16406835095778b6e52dacd1-13552003%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2e094a0ff0fff7f7eb342352d9984666a3bbccfb' => 
    array (
      0 => '/homepages/37/d619410358/htdocs/developer/template/leads/hardfields_view/Fax.html',
      1 => 1466056148,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16406835095778b6e52dacd1-13552003',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'value' => 0,
    'lead_id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5778b6e53bcf54_59272631',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5778b6e53bcf54_59272631')) {function content_5778b6e53bcf54_59272631($_smarty_tpl) {?><?php if (!is_callable('smarty_block_m')) include '/homepages/37/d619410358/htdocs/developer/ext/smarty3/plugins/block.m.php';
?><div class="fldTitle"><?php $_smarty_tpl->smarty->_tag_stack[] = array('m', array()); $_block_repeat=true; echo smarty_block_m(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Fax<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_m(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
 #</div>
            <input type="text" readonly="readonly" style="width:90px" value="<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
" />
            
            <?php if ($_smarty_tpl->tpl_vars['value']->value) {?><a href="/leadsmail.php?cmd=compose&lead_id=<?php echo $_smarty_tpl->tpl_vars['lead_id']->value;?>
&fax=<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
" <?php if (!permitted('allowFax')) {?>onclick="alert('You must configure your Fax settings in your user profile page first before you can use this feature.');return false;"<?php }?>>
            <img style="vertical-align:middle" src="/assets/images/fax_icon.jpg" width="21" height="21" border="0"></a>
			<?php }?><?php }} ?>
