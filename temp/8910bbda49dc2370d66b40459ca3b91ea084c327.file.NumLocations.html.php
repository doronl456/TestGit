<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-07-03 02:55:33
         compiled from "/homepages/37/d619410358/htdocs/developer/template/leads/hardfields_view/NumLocations.html" */ ?>
<?php /*%%SmartyHeaderCode:6973233115778b6e54f8882-96494099%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8910bbda49dc2370d66b40459ca3b91ea084c327' => 
    array (
      0 => '/homepages/37/d619410358/htdocs/developer/template/leads/hardfields_view/NumLocations.html',
      1 => 1466056148,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6973233115778b6e54f8882-96494099',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'value' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5778b6e550ae19_42312082',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5778b6e550ae19_42312082')) {function content_5778b6e550ae19_42312082($_smarty_tpl) {?><?php if (!is_callable('smarty_block_m')) include '/homepages/37/d619410358/htdocs/developer/ext/smarty3/plugins/block.m.php';
?><div class="fldTitle"># <?php $_smarty_tpl->smarty->_tag_stack[] = array('m', array()); $_block_repeat=true; echo smarty_block_m(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Locations<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_m(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</div>
            <input type="text" readonly="readonly" class="inpWide" value="<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
"/><?php }} ?>
