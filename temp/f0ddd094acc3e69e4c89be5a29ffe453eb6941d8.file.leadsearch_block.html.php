<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-07-03 02:24:12
         compiled from "/homepages/37/d619410358/htdocs/developer/template/navigation/leadsearch_block.html" */ ?>
<?php /*%%SmartyHeaderCode:3707584895778af8c1ac455-27688618%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f0ddd094acc3e69e4c89be5a29ffe453eb6941d8' => 
    array (
      0 => '/homepages/37/d619410358/htdocs/developer/template/navigation/leadsearch_block.html',
      1 => 1466056149,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3707584895778af8c1ac455-27688618',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'leadsearch' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5778af8c1e3f43_66332368',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5778af8c1e3f43_66332368')) {function content_5778af8c1e3f43_66332368($_smarty_tpl) {?><?php if (!is_callable('smarty_function_func')) include '/homepages/37/d619410358/htdocs/developer/ext/smarty3/plugins/function.func.php';
?>	<?php echo smarty_function_func(array('name'=>'LeadSearchBoxData','var'=>'leadsearch'),$_smarty_tpl);?>
		
    <form method="get" action="/leads.php?cmd=search">
    <input type="hidden" name="cmd" value="search">

    <table cellspacing="0" cellpadding="0" width="100%" border="0" class="leftNavTable">
      <col class="col1" />
      <col class="col2" />
        <tr class="menuitemsub_k">
    	<td colspan="2">
    	
    	<table style="width:178px" border="0" cellspacing="0" cellpadding="0">
    	<tr>
    	<td style='width:140px;padding:0px 2px 0px 4px;vertical-align:middle'><input type="text" name="LeadSearchStr" style='width:138px' value="<?php echo $_smarty_tpl->tpl_vars['leadsearch']->value['LeadSearchStr'];?>
"></td>
    	<td style='width:30px; padding:0px 2px 0px 2px;vertical-align:middle'><input style='width:25px;padding:1px;' type="submit" value="Go" /></td>
    	</tr>
    	</table>	</td>
        </tr>
        <tr class="menuitemsub_k" 
                          >
          <td colspan="2" style='width:178px;padding:0px 2px 0px 4px;'><select style='width:170px' name="LeadSearchType">
    		<option value="BusinessName" <?php if ($_smarty_tpl->tpl_vars['leadsearch']->value['LeadSearchType']=='BusinessName') {?>selected<?php }?> >Merchant Name</option>
    		<option value="lead_id" <?php if ($_smarty_tpl->tpl_vars['leadsearch']->value['LeadSearchType']=='lead_id') {?>selected<?php }?> >Lead #</option>
    		<option value="ContactName" <?php if ($_smarty_tpl->tpl_vars['leadsearch']->value['LeadSearchType']=='ContactName') {?>selected<?php }?> >Contact Name</option>
    		<option value="Email" <?php if ($_smarty_tpl->tpl_vars['leadsearch']->value['LeadSearchType']=='Email') {?>selected<?php }?> >Email</option>
    		<option value="Phone" <?php if ($_smarty_tpl->tpl_vars['leadsearch']->value['LeadSearchType']=='Phone') {?>selected<?php }?> >Phone</option>
    	  </select> </td>
        </tr>
    </table>
    </form>    
<?php }} ?>
