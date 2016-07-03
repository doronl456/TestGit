<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-07-03 02:55:33
         compiled from "/homepages/37/d619410358/htdocs/developer/template/fields/field_phone.html" */ ?>
<?php /*%%SmartyHeaderCode:3936346335778b6e57862d0-64822085%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '15f4f65eaed77e13f8e653e4c4c5ffba63b5b8c6' => 
    array (
      0 => '/homepages/37/d619410358/htdocs/developer/template/fields/field_phone.html',
      1 => 1466056147,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3936346335778b6e57862d0-64822085',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'name' => 0,
    'value' => 0,
    'validationType' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5778b6e57ba439_59871704',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5778b6e57ba439_59871704')) {function content_5778b6e57ba439_59871704($_smarty_tpl) {?><?php if (!is_callable('smarty_function_my_call')) include '/homepages/37/d619410358/htdocs/developer/ext/smarty3/plugins/function.my_call.php';
?><div  class="d1" >
  <div class="fldTitle"><?php echo $_smarty_tpl->getSubTemplate ('fields/req.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);
echo $_smarty_tpl->tpl_vars['title']->value;?>
</div>
    <!--<input name="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" type="text" class="fieldInputPhone" value="<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
" maxlength="12"  maxlength_="" />
    &nbsp;<span class="fieldComments">
	
	
	
	
    <?php if ($_smarty_tpl->tpl_vars['validationType']->value=='phone10') {?>(xxxxxxxxxx)<?php } else { ?>(xxx-xxx-xxxx)<?php }?>
    
    

    </span>-->
	<!--add tehila and add comment up-->
	   <input name="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
_1" type="text" style='width:30px' value="<?php echo $_smarty_tpl->tpl_vars['value']->value[0];
echo $_smarty_tpl->tpl_vars['value']->value[1];
echo $_smarty_tpl->tpl_vars['value']->value[2];?>
" maxlength="3" 
    	onchange="phone3part_onchange('<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
')"  onkeyup="stripCharsApex(this),autoNavigate(this,'<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
_2')" />
    -
	<input name="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
_2" type="text" style='width:30px' value="<?php echo $_smarty_tpl->tpl_vars['value']->value[4];
echo $_smarty_tpl->tpl_vars['value']->value[5];
echo $_smarty_tpl->tpl_vars['value']->value[6];?>
" maxlength="3" 
		onchange="phone3part_onchange('<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
')"  onkeyup="stripCharsApex(this),autoNavigate(this,'<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
_3')" />
	-
    <input name="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
_3" type="text" style='width:40px' value="<?php echo $_smarty_tpl->tpl_vars['value']->value[8];
echo $_smarty_tpl->tpl_vars['value']->value[9];
echo $_smarty_tpl->tpl_vars['value']->value[10];
echo $_smarty_tpl->tpl_vars['value']->value[11];?>
" maxlength="4" 
    	onchange="phone3part_onchange('<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
')"  onkeyup="stripCharsApex(this)" />
    
    
    <input name="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" type="hidden" class_="fieldInputPhone" value="<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
" />
	<?php echo smarty_function_my_call(array('phone'=>$_smarty_tpl->tpl_vars['value']->value),$_smarty_tpl);?>
   
	<!--end tehila-->
  <?php echo $_smarty_tpl->getSubTemplate ('fields/note.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</div>
<?php }} ?>
