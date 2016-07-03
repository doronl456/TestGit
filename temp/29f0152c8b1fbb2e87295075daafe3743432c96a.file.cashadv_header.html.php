<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-07-03 02:55:33
         compiled from "/homepages/37/d619410358/htdocs/developer/template/status/cashadv_header.html" */ ?>
<?php /*%%SmartyHeaderCode:10210425625778b6e5dbcf10-63223195%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '29f0152c8b1fbb2e87295075daafe3743432c96a' => 
    array (
      0 => '/homepages/37/d619410358/htdocs/developer/template/status/cashadv_header.html',
      1 => 1466056150,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10210425625778b6e5dbcf10-63223195',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'hideMCAHeaderButtons' => 0,
    'linked_app_id' => 0,
    'gtabs' => 0,
    'tab_links' => 0,
    'cashadv_id' => 0,
    'cashadv_idStr' => 0,
    'cashadv_idModifier' => 0,
    'BusinessName' => 0,
    'app_id' => 0,
    'MID' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5778b6e5dfdd32_08076555',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5778b6e5dfdd32_08076555')) {function content_5778b6e5dfdd32_08076555($_smarty_tpl) {?><?php if (!is_callable('smarty_function_func')) include '/homepages/37/d619410358/htdocs/developer/ext/smarty3/plugins/function.func.php';
?><div class="TitleRow">
        <?php echo $_smarty_tpl->tpl_vars['title']->value;?>


		<div class="toright">
    		<?php if (!$_smarty_tpl->tpl_vars['hideMCAHeaderButtons']->value) {?>
        		<?php if (permitted('TOPMENU-Status')) {?>
              	<input type="button" value="MCA" disabled onclick="myRedirect('/')"/>
              	<input type="button" value="Processing" onclick="myRedirect('/apps_status.php?cmd=edit_app&app_id=<?php echo $_smarty_tpl->tpl_vars['linked_app_id']->value;?>
')"/>
                <?php }?>
                <?php echo $_smarty_tpl->getSubTemplate ('status/mca_instr.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

			<?php }?>
        </div>
</div>

<table width="100%">
    
    
    
    <TR >
      <TD class="tdGtabs">
		<?php echo $_smarty_tpl->getSubTemplate ('gtabs.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('gtabs'=>$_smarty_tpl->tpl_vars['gtabs']->value), 0);?>
	  
        </TD>
    </TR>

    <TR >
      <TD >
        <?php echo $_smarty_tpl->getSubTemplate ('tab_links.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('tab_links'=>$_smarty_tpl->tpl_vars['tab_links']->value), 0);?>

        </TD>
    </TR>
    


    <tr > 
      	<td class="tdValueColumn"> 
    	  	<div class="toleft">
    	  		<span class="spTooltip" onmouseover="tooltip.show('<?php echo smarty_function_func(array('name'=>'MCAInfoPopup','cashadv_id'=>$_smarty_tpl->tpl_vars['cashadv_id']->value),$_smarty_tpl);?>
');" onmouseout="tooltip.hide();"></span>		
    	  		<span class="spMCALoan"><strong>MCA/ACH Acct #</strong> <?php echo $_smarty_tpl->tpl_vars['cashadv_idStr']->value;
echo $_smarty_tpl->tpl_vars['cashadv_idModifier']->value;?>
</span>
    	  	</div>

    	  	<div class="toright">

    		<?php if (!$_smarty_tpl->tpl_vars['hideMCAHeaderButtons']->value) {?>
			  <?php if (permitted('TOPMENU-Status')) {?>
    	  		<strong>DBA:</strong> 
    			<span class="spTooltip" onmouseover="tooltip.show('<div style=\'max-width:300px\'><?php echo smarty_function_func(array('name'=>'DBAInfoPopup','app_id'=>$_smarty_tpl->tpl_vars['linked_app_id']->value),$_smarty_tpl);?>
</div>');" onmouseout="tooltip.hide();">
                <a href="/apps_status.php?cmd=edit_app&app_id=<?php echo $_smarty_tpl->tpl_vars['linked_app_id']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['BusinessName']->value;?>
</a></span> - <strong>MID#</strong> <a href="/apps_status.php?cmd=edit_app&app_id=<?php echo $_smarty_tpl->tpl_vars['app_id']->value;?>
"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['MID']->value)===null||$tmp==='' ? '(Not Available)' : $tmp);?>
</a>
                </span>	   
			  <?php } else { ?>
    	  		<strong>DBA:</strong> 
    			<span class="spTooltip" onmouseover="tooltip.show('<div style=\'max-width:300px\'><?php echo smarty_function_func(array('name'=>'DBAInfoPopup','app_id'=>$_smarty_tpl->tpl_vars['linked_app_id']->value),$_smarty_tpl);?>
</div>');" onmouseout="tooltip.hide();">
                <a href="/cashadvance.php?cmd=cashadv_edit&cashadv_id=<?php echo $_smarty_tpl->tpl_vars['cashadv_id']->value;?>
&tab=dba"><?php echo $_smarty_tpl->tpl_vars['BusinessName']->value;?>
</a></span> - <strong>MID#</strong> <a href="/cashadvance.php?cmd=cashadv_edit&cashadv_id=<?php echo $_smarty_tpl->tpl_vars['cashadv_id']->value;?>
&tab=dba"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['MID']->value)===null||$tmp==='' ? '(Not Available)' : $tmp);?>
</a>
                </span>	   
              <?php }?>
			<?php }?>

    		</div>
		</td>
	</tr>


    
</table>



<?php }} ?>
