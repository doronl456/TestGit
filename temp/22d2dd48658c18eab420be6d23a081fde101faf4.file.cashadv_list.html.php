<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-07-03 02:51:13
         compiled from "/homepages/37/d619410358/htdocs/developer/template/status/cashadv_list.html" */ ?>
<?php /*%%SmartyHeaderCode:8348840295778b5e19df5c0-13510695%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '22d2dd48658c18eab420be6d23a081fde101faf4' => 
    array (
      0 => '/homepages/37/d619410358/htdocs/developer/template/status/cashadv_list.html',
      1 => 1467199333,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8348840295778b5e19df5c0-13510695',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'statusTitle' => 0,
    'exportLink' => 0,
    'selUser' => 0,
    'owner_uid' => 0,
    'selLender' => 0,
    'lender_uid' => 0,
    'selFundingType' => 0,
    'FundingType' => 0,
    'selStatus' => 0,
    'status' => 0,
    'date1' => 0,
    'date2' => 0,
    'rep' => 0,
    'AchworksNotifier' => 0,
    'layout' => 0,
    'item' => 0,
    'app_id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5778b5e1ad9e94_87175621',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5778b5e1ad9e94_87175621')) {function content_5778b5e1ad9e94_87175621($_smarty_tpl) {?><?php if (!is_callable('smarty_function_js_include')) include '/homepages/37/d619410358/htdocs/developer/ext/smarty3/plugins/function.js_include.php';
if (!is_callable('smarty_function_html_options')) include '/homepages/37/d619410358/htdocs/developer/ext/smarty3/plugins/function.html_options.php';
if (!is_callable('smarty_function_func')) include '/homepages/37/d619410358/htdocs/developer/ext/smarty3/plugins/function.func.php';
if (!is_callable('smarty_modifier_truncate')) include '/homepages/37/d619410358/htdocs/developer/ext/smarty3/plugins/modifier.truncate.php';
if (!is_callable('smarty_modifier_money')) include '/homepages/37/d619410358/htdocs/developer/ext/smarty3/plugins/modifier.money.php';
?><?php echo $_smarty_tpl->getSubTemplate ('calendar.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>





<?php echo smarty_function_js_include(array('src'=>'/css/listboxes.css'),$_smarty_tpl);?>



<?php echo '<script'; ?>
 language="javascript">

function myInit(){
}

function myFormSubmit(f){
	return true;
}

function onDel(f){
	var dd=document.getElementsByName('sel[]');
	var i;
	var c=0;
	for(i=0;i<dd.length;i++) if(dd[i].checked) c=1;
	if(!c){alert('No items selected');return false;}

	return confirm('Are you sure you want to delete selected items?')
}


function myExport(){
	var s=$('#formFilt').serialize()+'&format=export';
	myRedirect('/cashadvance.php?'+s);
	//formFilt
}
function myExport1(){
	var s=$('#formFilt').serialize()+'&cmd=repcolumns';
	myRedirect('/cashadvance.php?'+s);
	//formFilt
}

<?php echo '</script'; ?>
>
<style>
.toleft{borderX:solid red 1px;}
A.aMCALoan{ font-size:12pt;font-weight:bold}
span.spCreditScore{color:red}
span.spStatus{color:green;}
span.spStatus_Pending{color:red}

span.spFundingType{color:green;font-weight:bold}

DIV.cashAdvSection{
	border:solid  #3399FF 1px;
	margin:10px;
	width:648px;
	
     background: -webkit-gradient(linear, 0 0, 0 bottom, from(#E7F2FA), to(#AAE7FD));
	background: -moz-linear-gradient(#E7F2FA, #AAE7FD);
	background: linear-gradient(#E7F2FA, #AAE7FD);
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr=#E7F2FA, endColorstr=#AAE7FD);
	
}

.cashAdvSection .tdLeft{
padding:8px;
}

.cashAdvSection .tdRight{
padding:8px;
}

.cashAdvSection table.tblRightBlock TD{
	border-bottom:solid #CCCCCC 1px;
}
</style>



<div class="TitleRow">
  	  <div class="toleft"><strong>MCA/Funding Services - 
	  <?php if ($_smarty_tpl->tpl_vars['statusTitle']->value) {
echo $_smarty_tpl->tpl_vars['statusTitle']->value;
} else { ?>All Accounts<?php }?>
	  
	  </strong></div>
  	  <div class="toright">&nbsp;
		<?php if (permitted('SUPERADMIN-RIGHTS')) {?>
          	<input type="button" value="Export" onclickx="myRedirect('<?php echo $_smarty_tpl->tpl_vars['exportLink']->value;?>
')" onclick="myExport()"/>
        <?php }?>      
        <?php echo $_smarty_tpl->getSubTemplate ('status/mca_instr.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

      </div>
	  
	  <!--add tehila-->
		<div class="toright">
				<input type="button" value="Design Report" onclickx="myRedirect('<?php echo $_smarty_tpl->tpl_vars['exportLink']->value;?>
')" onclick="myExport1()"/>
		</div>	
		<!--end tehila-->		
  	   
</div>



<TABLE WIDTH="100%">
  <TR >
    <TD align="center" class="tdValueColumn">
	  <form method="get" id="formFilt">
	  <input type="hidden" name="cmd" value="cashadv_list" />
<div class="boxLeft">
  <div class="fldTitle">Search by Users</div>
  <select name="owner_uid" onchange="this.form.submit()" style="width:90px">
    <option value="">All Users</option>
	      
	  <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['selUser']->value,'selected'=>$_smarty_tpl->tpl_vars['owner_uid']->value),$_smarty_tpl);?>

    
        </select>
</div>
	    
       <div class="boxLeft">
         <div class="fldTitle">Search by Lenders</div>
         <select name="lender_uid" onchange="this.form.submit()" style="width:90px">
          <option value="">All Lenders</option>
	        
	  <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['selLender']->value,'selected'=>$_smarty_tpl->tpl_vars['lender_uid']->value),$_smarty_tpl);?>

    
        </select>
       </div>	    
        
       <div class="boxLeft">
         <div class="fldTitle">Search by Type</div>
         <select name="FundingType" onchange="this.form.submit()" style="width:120px">
          <option value="">All Funding Types</option>
	        
	  <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['selFundingType']->value,'selected'=>$_smarty_tpl->tpl_vars['FundingType']->value),$_smarty_tpl);?>

    
        </select>
       </div>

       <div class="boxLeft">
         <div class="fldTitle">Search Status Level</div>
         <select name="status" onchange="this.form.submit()" style="width:120px">
          
	        
	  <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['selStatus']->value,'selected'=>$_smarty_tpl->tpl_vars['status']->value),$_smarty_tpl);?>

    
        </select>
       </div>

<!--add tehila
<div class="boxLeft">
	<div class="fldTitle">titel</div>

	<div class="toleft">&nbsp;
	    <input type="button" value="Edit Columns" onclickx="myRedirect('<?php echo $_smarty_tpl->tpl_vars['exportLink']->value;?>
')" onclick="myExport1()"/>
</div>
<!--end tehila-->

        
		<div class="toright">
           <div class="boxLeft">
             <div class="fldTitle">Start Date</div>
             <input class="rep_date" id="date1" type="text"
                name="date1" value="<?php echo $_smarty_tpl->tpl_vars['date1']->value;?>
" style="width:70px" maxlength="10" onchangeX="this.form.submit()" />
           </div>            
            
           <div class="boxLeft">
             <div class="fldTitle">End Date</div>
             <input class="rep_date" id="date2"
                type="text" name="date2" value="<?php echo $_smarty_tpl->tpl_vars['date2']->value;?>
" style="width:70px" maxlength="10" onchangeX="this.form.submit()" />
           </div>            
    
           <div class="boxLeft"><div class="fldTitle">&nbsp;</div>
             <input type="submit" value="Go"  style="width:38px"  />
           </div>
		</div>
	  </form>
	  </TD>
  </TR>
  <TR >
    <TD class="tdListNav"><?php echo $_smarty_tpl->tpl_vars['rep']->value['pagerHtml'];?>
</TD>
  </TR>
    
   <?php if ($_smarty_tpl->tpl_vars['AchworksNotifier']->value) {?>
   <tr><td><?php echo $_smarty_tpl->tpl_vars['AchworksNotifier']->value;?>
</td></tr>
   <?php }?>


    <TR >
    <TD class="tdListNav2"><?php if (permitted('ADMIN-RIGHTS')) {?><div class="navCheckAll"><input  name="checkbox" type="checkbox"  title="Check All" onclick="checkAll(this)" /></div><?php }?>
      <div class="navSortBy">
      	<a class="<?php if ($_smarty_tpl->tpl_vars['layout']->value==1) {?>disabled<?php }?>" href="cashadvance.php?cmd=cashadv_list&layout=1">1-Up</a> 
        - <a class="<?php if ($_smarty_tpl->tpl_vars['layout']->value==3) {?>disabled<?php }?>"href="cashadvance.php?cmd=cashadv_list&layout=3">3-Up</a> 
        
        Sort By: 
        <a href="<?php echo $_smarty_tpl->tpl_vars['rep']->value['this']->orderlink('id');?>
" class="<?php echo $_smarty_tpl->tpl_vars['rep']->value['this']->orderclass('id');?>
">Contract #</a>, 
        <a href="<?php echo $_smarty_tpl->tpl_vars['rep']->value['this']->orderlink('BusinessName');?>
" class="<?php echo $_smarty_tpl->tpl_vars['rep']->value['this']->orderclass('BusinessName');?>
">DBA Name</a>, 
        <a href="<?php echo $_smarty_tpl->tpl_vars['rep']->value['this']->orderlink('date');?>
" class="<?php echo $_smarty_tpl->tpl_vars['rep']->value['this']->orderclass('date');?>
">Date</a>, 
      <a href="<?php echo $_smarty_tpl->tpl_vars['rep']->value['this']->orderlink('status');?>
" class="<?php echo $_smarty_tpl->tpl_vars['rep']->value['this']->orderclass('status');?>
">Status</a>        </div></TD> 
    </TR>
</TABLE>






<form method="post">
  <input type="hidden" name="cmd" value="cashadv_del">


<?php if ($_smarty_tpl->tpl_vars['layout']->value==1) {?>

<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rep']->value['list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
    <?php echo $_smarty_tpl->getSubTemplate ('boxes/mca_box.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('item'=>$_smarty_tpl->tpl_vars['item']->value), 0);?>

<?php } ?>

<?php } else { ?>

<div class="appList3up">
<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rep']->value['list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
   <div class="appListSection appListSection_<?php echo $_smarty_tpl->tpl_vars['item']->value['StatusColor'];?>
 3up"><div class="level2">

		<div class="blockContainer">
            <?php if (permitted('SUPERADMIN-RIGHTS')) {?>
            <input <?php if (!$_smarty_tpl->tpl_vars['item']->value['allowDelete']) {?>disabled<?php }?>  name="sel[]" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['cashadv_id'];?>
" type="checkbox" />
            <?php }?>
            <a href="/cashadvance.php?cmd=cashadv_edit&app_id=<?php echo $_smarty_tpl->tpl_vars['app_id']->value;?>
&cashadv_id=<?php echo $_smarty_tpl->tpl_vars['item']->value['cashadv_id'];?>
" class="aMCALoan">MCA Acct # <?php echo $_smarty_tpl->tpl_vars['item']->value['cashadv_idStr'];?>
</a><br />
            
            <strong>DBA:</strong> <span class="spTooltip" onmouseover="tooltip.show('<div style=\'max-width:300px\'><?php echo smarty_function_func(array('name'=>'MCAInfoPopup','cashadv_id'=>$_smarty_tpl->tpl_vars['item']->value['cashadv_id']),$_smarty_tpl);?>
</div>');" onmouseout="tooltip.hide();"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['item']->value['DBAName'],24,'...',true);?>
</span>
            
            <br />
            <strong>Owner:</strong>  <span title="<?php echo $_smarty_tpl->tpl_vars['item']->value['OwnerName'];?>
"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['item']->value['OwnerName'],24,'...',true);?>
</span><br />
            <br />
            Funding Type: <span class="spFundingType">
            	
                <?php if ($_smarty_tpl->tpl_vars['item']->value['FundingProduct']=='Fixed Daily ACH') {?>Fixed ACH<?php }?>
                <?php if ($_smarty_tpl->tpl_vars['item']->value['FundingProduct']=='MCA') {?>CC TXN %<?php }?>
                <?php if ($_smarty_tpl->tpl_vars['item']->value['FundingProduct']=='LockBox') {?>LockBox/TXN %<?php }?>
                <?php if ($_smarty_tpl->tpl_vars['item']->value['FundingProduct']=='CCFixed') {?>Fixed + CC<?php }?>
                </span> <br />
            Funding: $<?php echo smarty_modifier_money((($tmp = @$_smarty_tpl->tpl_vars['item']->value['AmountRequested'])===null||$tmp==='' ? 0 : $tmp),2);?>
 <br />
            Payback: $<?php echo smarty_modifier_money((($tmp = @$_smarty_tpl->tpl_vars['item']->value['TotalPayback'])===null||$tmp==='' ? 0 : $tmp),2);?>
 (<?php echo (($tmp = @$_smarty_tpl->tpl_vars['item']->value['PaybackCoeff'])===null||$tmp==='' ? 0 : $tmp);?>
)<br />

            <?php if ($_smarty_tpl->tpl_vars['item']->value['FundingProduct']=='Fixed Daily ACH') {?>Daily ACH: <?php echo smarty_modifier_money($_smarty_tpl->tpl_vars['item']->value['perfPayments'],0);?>
 of <?php echo $_smarty_tpl->tpl_vars['item']->value['days'];?>
 Payments<br /><?php }?>
            <?php if ($_smarty_tpl->tpl_vars['item']->value['FundingProduct']=='MCA') {?>Daily CC: $<?php echo smarty_modifier_money((($tmp = @$_smarty_tpl->tpl_vars['item']->value['totalHold'])===null||$tmp==='' ? 0 : $tmp),2);?>
 of $<?php echo smarty_modifier_money((($tmp = @$_smarty_tpl->tpl_vars['item']->value['TotalPayback'])===null||$tmp==='' ? 0 : $tmp),2);?>
<br /><?php }?>
            <?php if ($_smarty_tpl->tpl_vars['item']->value['FundingProduct']=='LockBox') {?>Daily CC: $<?php echo smarty_modifier_money((($tmp = @$_smarty_tpl->tpl_vars['item']->value['totalHold'])===null||$tmp==='' ? 0 : $tmp),2);?>
 of $<?php echo smarty_modifier_money((($tmp = @$_smarty_tpl->tpl_vars['item']->value['TotalPayback'])===null||$tmp==='' ? 0 : $tmp),2);?>
<br /><?php }?>
            <?php if ($_smarty_tpl->tpl_vars['item']->value['FundingProduct']=='CCFixed') {?>
            	Daily ACH: <?php echo smarty_modifier_money($_smarty_tpl->tpl_vars['item']->value['perfPayments'],0);?>
 of <?php echo $_smarty_tpl->tpl_vars['item']->value['days'];?>
 Payments<br />
            	Daily CC: $<?php echo smarty_modifier_money((($tmp = @$_smarty_tpl->tpl_vars['item']->value['totalHold'])===null||$tmp==='' ? 0 : $tmp),2);?>
 of $<?php echo smarty_modifier_money((($tmp = @$_smarty_tpl->tpl_vars['item']->value['TotalPayback'])===null||$tmp==='' ? 0 : $tmp),2);?>
<br />
            <?php }?>
            
            
            <br />
            <strong>Status:</strong> <span class="spStatus spStatus_<?php echo $_smarty_tpl->tpl_vars['item']->value['Status'];?>
 nobr" title="<?php echo $_smarty_tpl->tpl_vars['item']->value['lastNote'];?>
">&nbsp;<strong><?php echo $_smarty_tpl->tpl_vars['item']->value['statusTitle'];?>
</strong></span>
            
            
            <br />
            <strong>Sales Rep:</strong> <span title="<?php echo $_smarty_tpl->tpl_vars['item']->value['UserName'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['UserName'];?>
</span>
            <br />

            Comm: $<?php echo smarty_modifier_money((($tmp = @$_smarty_tpl->tpl_vars['item']->value['RepComm'])===null||$tmp==='' ? 0 : $tmp),2);?>

		</div>
        
    </div>
    </div>
    
    
<?php } ?>
</div>


<?php }?>



<?php if (permitted('SUPERADMIN-RIGHTS')) {?>
    <TABLE WIDTH="100%">
    <tr class="trSubmitBar">
      <td>
        <input name="btnDelete" type="submit" onclick="return onDel(this.form)" value="Delete" /></td>
    </tr>
    </TABLE>
<?php }?>


</form>

<?php echo '<script'; ?>
 type="text/javascript">
    Calendar.setup({
        inputField     :    "date1",      // id of the input field
        ifFormat       :    "%m/%d/%Y",//"%Y-%m-%d",	// %H:%M",       // format of the input field
        showsTime      :    true,            // will display a time selector
        button         :    "date1",   // trigger for the calendar (button ID)
        singleClick    :    true,           // double-click mode
        step           :    1                // show all years in drop-down boxes (instead of every other year as default)
    });
    Calendar.setup({
        inputField     :    "date2",      // id of the input field
        ifFormat       :    "%m/%d/%Y",//"%Y-%m-%d",	// %H:%M",       // format of the input field
        showsTime      :    true,            // will display a time selector
        button         :    "date2",   // trigger for the calendar (button ID)
        singleClick    :    true,           // double-click mode
        step           :    1                // show all years in drop-down boxes (instead of every other year as default)
    });

<?php echo '</script'; ?>
>

<?php }} ?>
