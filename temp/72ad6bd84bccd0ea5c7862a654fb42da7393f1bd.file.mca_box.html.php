<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-07-03 02:51:13
         compiled from "/homepages/37/d619410358/htdocs/developer/template/boxes/mca_box.html" */ ?>
<?php /*%%SmartyHeaderCode:11838484615778b5e1b49602-50015017%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '72ad6bd84bccd0ea5c7862a654fb42da7393f1bd' => 
    array (
      0 => '/homepages/37/d619410358/htdocs/developer/template/boxes/mca_box.html',
      1 => 1466056147,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11838484615778b5e1b49602-50015017',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'item' => 0,
    'app_id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5778b5e1bcf7f5_65896561',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5778b5e1bcf7f5_65896561')) {function content_5778b5e1bcf7f5_65896561($_smarty_tpl) {?><?php if (!is_callable('smarty_function_func')) include '/homepages/37/d619410358/htdocs/developer/ext/smarty3/plugins/function.func.php';
if (!is_callable('smarty_modifier_truncate')) include '/homepages/37/d619410358/htdocs/developer/ext/smarty3/plugins/modifier.truncate.php';
if (!is_callable('smarty_modifier_money')) include '/homepages/37/d619410358/htdocs/developer/ext/smarty3/plugins/modifier.money.php';
if (!is_callable('smarty_modifier_date_format')) include '/homepages/37/d619410358/htdocs/developer/ext/smarty3/plugins/modifier.date_format.php';
?><div classX="cashAdvSection" class="appListSection appListSection_<?php echo $_smarty_tpl->tpl_vars['item']->value['StatusColor'];?>
"><div class="level2">
      <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td valign="top" class="tdLeft"> 
          	<?php if (permitted('SUPERADMIN-RIGHTS')) {?>
				<input <?php if (!$_smarty_tpl->tpl_vars['item']->value['allowDelete']) {?>disabled<?php }?>  name="sel[]" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['cashadv_id'];?>
" type="checkbox" />
			<?php }?>
		  <a href="/cashadvance.php?cmd=cashadv_edit&app_id=<?php echo $_smarty_tpl->tpl_vars['app_id']->value;?>
&cashadv_id=<?php echo $_smarty_tpl->tpl_vars['item']->value['cashadv_id'];?>
" class="aMCALoan">MCA/ACH Acct # <?php echo $_smarty_tpl->tpl_vars['item']->value['cashadv_idStr'];?>
</a><br />
            <strong>DBA:</strong> <span class="spTooltip" onmouseover="tooltip.show('<div style=\'max-width:300px\'><?php echo smarty_function_func(array('name'=>'MCAInfoPopup','cashadv_id'=>$_smarty_tpl->tpl_vars['item']->value['cashadv_id']),$_smarty_tpl);?>
</div>');" onmouseout="tooltip.hide();"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['item']->value['DBAName'],24,'...',true);?>
</span><br />
            <strong>Owner:</strong>  <span title="<?php echo $_smarty_tpl->tpl_vars['item']->value['OwnerName'];?>
"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['item']->value['OwnerName'],24,'...',true);?>
</span><br />
            <br />
            Funding Type: <span class="spFundingType"><?php echo $_smarty_tpl->tpl_vars['item']->value['FundingProductTitle'];?>
</span> <br />
            Funding Requested: $<?php echo smarty_modifier_money($_smarty_tpl->tpl_vars['item']->value['AmountRequested'],2);?>
 <br />
            Payback Amount: $<?php echo smarty_modifier_money($_smarty_tpl->tpl_vars['item']->value['TotalPayback'],2);?>
 (<?php echo $_smarty_tpl->tpl_vars['item']->value['PaybackCoeff'];?>
)<br />
			<?php if ($_smarty_tpl->tpl_vars['item']->value['FundingProduct']=='Fixed Daily ACH') {?>ACH Payback: <?php echo smarty_modifier_money($_smarty_tpl->tpl_vars['item']->value['perfPayments'],0);?>
 of <?php echo $_smarty_tpl->tpl_vars['item']->value['days'];?>
 Payments<br /><?php }?>
			<?php if ($_smarty_tpl->tpl_vars['item']->value['FundingProduct']=='MCA') {?>MCA Payback: $<?php echo smarty_modifier_money($_smarty_tpl->tpl_vars['item']->value['totalHold'],2);?>
 of $<?php echo smarty_modifier_money($_smarty_tpl->tpl_vars['item']->value['TotalPayback'],2);?>
<br /><?php }?>
			<?php if ($_smarty_tpl->tpl_vars['item']->value['FundingProduct']=='CCFixed') {?>
				ACH Payback: <?php echo smarty_modifier_money($_smarty_tpl->tpl_vars['item']->value['perfPayments'],0);?>
 of <?php echo $_smarty_tpl->tpl_vars['item']->value['days'];?>
 Payments<br />
				MCA Payback: $<?php echo smarty_modifier_money($_smarty_tpl->tpl_vars['item']->value['totalHold'],2);?>
 of $<?php echo smarty_modifier_money($_smarty_tpl->tpl_vars['item']->value['TotalPayback'],2);?>
<br />
			<?php }?>
            <br />
            <strong>Broker:</strong> <?php echo $_smarty_tpl->tpl_vars['item']->value['UserName'];?>
 ($<?php echo smarty_modifier_money($_smarty_tpl->tpl_vars['item']->value['RepComm'],2);?>
) </td>
          <td valign="top" class="tdRight"><table class="tblRightBlock" width="100%" border="0" cellspacing="0" cellpadding="0">
            
            <tr>
              <td><div class="toleft">Status:</div>                <div class="toright"><span class="spStatus spStatus_<?php echo $_smarty_tpl->tpl_vars['item']->value['Status'];?>
 nobr" title="<?php echo $_smarty_tpl->tpl_vars['item']->value['lastNote'];?>
">&nbsp;<strong><?php echo $_smarty_tpl->tpl_vars['item']->value['statusTitle'];?>
 </strong>(<?php echo $_smarty_tpl->tpl_vars['item']->value['ageD'];?>
 Days, <?php echo $_smarty_tpl->tpl_vars['item']->value['ageH'];?>
 Hrs)</span></div></td>
              </tr>
            <tr>
              <td><div class="toleft">Date Received:</div>                
              <div class="toright"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['item']->value['cashadv_created'],'%b %d, %Y at %H:%M %p');?>
</div></td>
              </tr>
            <tr>
              <td><div class="toleft">Monthly CC Processing:</div>                <div class="toright">$ <?php echo smarty_modifier_money((($tmp = @$_smarty_tpl->tpl_vars['item']->value['MonthlyCC'])===null||$tmp==='' ? 0 : $tmp),2);?>
</div></td>
              </tr>
            <tr>
              <td><div class="toleft">Monthly Bank Deposits:</div>                <div class="toright"><span class="spTooltip" onmouseover="tooltip.show('<?php echo $_smarty_tpl->tpl_vars['item']->value['pop12month'];?>
');" onmouseout="tooltip.hide();">  $ <?php echo smarty_modifier_money((($tmp = @$_smarty_tpl->tpl_vars['item']->value['MonthlyBankDeposits'])===null||$tmp==='' ? 0 : $tmp),2);?>
</span></div></td>
              </tr>
            <tr>
              <td><div class="toleft">Avg Daily Bank Bal:</div>                <div class="toright">$ <?php echo smarty_modifier_money((($tmp = @$_smarty_tpl->tpl_vars['item']->value['AverageBankBalance'])===null||$tmp==='' ? 0 : $tmp),2);?>
</div></td>
              </tr>
            <tr>
              <td><div class="toleft">Business Inception:</div>                <div class="toright"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['item']->value['InceptionDate'],'%b %d, %Y');?>
</div></td>
              </tr>
            <tr>
              <td><div class="toleft">Nature of Business:</div>                <div class="toright"><?php echo $_smarty_tpl->tpl_vars['item']->value['MerchantType'];?>
</div></td>
              </tr>
            <tr>
              <td><div class="toleft">Credit Score:</div>                <div class="toright"><span class="spCreditScore"><?php echo $_smarty_tpl->tpl_vars['item']->value['CreditScoreTitle'];?>
</span></div></td>
              </tr>
            <tr>
              <td><div class="toleft">Email Activity:</div>                
              	<div class="toright">
                All (<?php echo (($tmp = @$_smarty_tpl->tpl_vars['item']->value['cntEmailTotal'])===null||$tmp==='' ? 0 : $tmp);?>
) - DBA (<?php echo (($tmp = @$_smarty_tpl->tpl_vars['item']->value['cntEmailDBA'])===null||$tmp==='' ? 0 : $tmp);?>
) - Lenders (<?php echo (($tmp = @$_smarty_tpl->tpl_vars['item']->value['cntEmailLender'])===null||$tmp==='' ? 0 : $tmp);?>
)
                </div>
              </td>
            </tr>
            <tr>
              <td><div class="toleft">Lenders:</div>                
              <div class="toright">
              	Accept (<?php echo $_smarty_tpl->tpl_vars['item']->value['cntLendAccept'];?>
) - Conditional (<?php echo $_smarty_tpl->tpl_vars['item']->value['cntLendCond'];?>
) - Decline (<?php echo $_smarty_tpl->tpl_vars['item']->value['cntLendDecline'];?>
)
              </div></td>
            </tr>
            
            
          </table></td>
        </tr>
      </table>
    </div>
    </div><?php }} ?>
