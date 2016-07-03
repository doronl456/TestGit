<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-07-03 02:55:33
         compiled from "/homepages/37/d619410358/htdocs/developer/template/status/cashadv_dba.html" */ ?>
<?php /*%%SmartyHeaderCode:1822827765778b6e5ca5db0-43379503%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e1c35e93a771c0b3c46e65c7a6e3b729db0bdf04' => 
    array (
      0 => '/homepages/37/d619410358/htdocs/developer/template/status/cashadv_dba.html',
      1 => 1466603464,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1822827765778b6e5ca5db0-43379503',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'approveValidationErr' => 0,
    'tab' => 0,
    'FundingProduct' => 0,
    'totalPerc' => 0,
    'cntLenders' => 0,
    'BusinessEmail' => 0,
    'cashadv_id' => 0,
    'cntMissingDocs' => 0,
    'permittedSA' => 0,
    'app_id' => 0,
    'checkListDone' => 0,
    'stat' => 0,
    'contact_id' => 0,
    'selVis' => 0,
    'sections' => 0,
    'section' => 0,
    'checklistStat' => 0,
    'leadsec' => 0,
    'item' => 0,
    'cashadv_idStr' => 0,
    'cashadv_idModifier' => 0,
    'Balance' => 0,
    'leadusers' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5778b6e5db1a50_97898098',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5778b6e5db1a50_97898098')) {function content_5778b6e5db1a50_97898098($_smarty_tpl) {?><?php if (!is_callable('smarty_function_js_include')) include '/homepages/37/d619410358/htdocs/developer/ext/smarty3/plugins/function.js_include.php';
if (!is_callable('smarty_function_js_data')) include '/homepages/37/d619410358/htdocs/developer/ext/smarty3/plugins/function.js_data.php';
if (!is_callable('smarty_block_mybox')) include '/homepages/37/d619410358/htdocs/developer/ext/smarty3/plugins/block.mybox.php';
if (!is_callable('smarty_modifier_cut')) include '/homepages/37/d619410358/htdocs/developer/ext/smarty3/plugins/modifier.cut.php';
if (!is_callable('smarty_modifier_money')) include '/homepages/37/d619410358/htdocs/developer/ext/smarty3/plugins/modifier.money.php';
if (!is_callable('smarty_function_html_options')) include '/homepages/37/d619410358/htdocs/developer/ext/smarty3/plugins/function.html_options.php';
if (!is_callable('smarty_modifier_num')) include '/homepages/37/d619410358/htdocs/developer/ext/smarty3/plugins/modifier.num.php';
if (!is_callable('smarty_function_my_call')) include '/homepages/37/d619410358/htdocs/developer/ext/smarty3/plugins/function.my_call.php';
?><style>
	.statBlock em { 
		color:blue;
	}
	.statBlock a {
		font-weight:bold;
	}
</style>

<!--add tehila -->
<?php echo smarty_function_js_include(array('src'=>'/js/form_validator.js'),$_smarty_tpl);?>

<?php echo smarty_function_js_include(array('src'=>'/uploader/css/jquery.fileupload-ui.css'),$_smarty_tpl);?>

<?php echo smarty_function_js_include(array('src'=>'/uploader/js/vendor/jquery.ui.widget.js'),$_smarty_tpl);?>

<?php echo smarty_function_js_include(array('src'=>'/uploader/js/jquery.iframe-transport.js'),$_smarty_tpl);?>

<?php echo smarty_function_js_include(array('src'=>'/uploader/js/jquery.fileupload.js'),$_smarty_tpl);?>

<?php echo smarty_function_js_include(array('src'=>'/css/upload.css'),$_smarty_tpl);?>

<!--end tehila -->

<?php echo smarty_function_js_include(array('src'=>'/js/lead.js'),$_smarty_tpl);?>

<?php echo $_smarty_tpl->getSubTemplate ('calendar.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>



<?php echo smarty_function_js_include(array('src'=>'/js/form_validator.js'),$_smarty_tpl);?>

<?php echo smarty_function_js_data(array('approveValidationErr'=>$_smarty_tpl->tpl_vars['approveValidationErr']->value,'tab'=>$_smarty_tpl->tpl_vars['tab']->value,'jsFundingProduct'=>$_smarty_tpl->tpl_vars['FundingProduct']->value,'totalPerc'=>$_smarty_tpl->tpl_vars['totalPerc']->value,'cntLenders'=>$_smarty_tpl->tpl_vars['cntLenders']->value,'BusinessEmail'=>$_smarty_tpl->tpl_vars['BusinessEmail']->value,'cashadv_id'=>$_smarty_tpl->tpl_vars['cashadv_id']->value,'cntMissingDocs'=>$_smarty_tpl->tpl_vars['cntMissingDocs']->value,'permittedSA'=>$_smarty_tpl->tpl_vars['permittedSA']->value),$_smarty_tpl);?>

<?php echo smarty_function_js_include(array('src'=>'/css/statusColorBox.css'),$_smarty_tpl);?>



<style>
.notesTable .v1{color:#3282e6}
</style>



<style>
.inpMinimal{background:#DDFFFF}
input.decFld{width:95%}

.HLred{color:red;}
.HLgreen{color:green;}

.financialBanksTable .tdListHeaders{font-size:8pt;}
.financialBanksTable input[type="text"] {text-align:right;width:100%}

.graySummary{
	background-color:#ccc;
	padding:4px;
	margin:8px 0px;
	font-size:12px;
}

</style>
<?php echo '<script'; ?>
 language="javascript">
//add tehila
var Attachments=[];
$(function () {
	$('#fileupload').fileupload({
        dataType: 'json',
        start: function (e) {
			$('#progress').show();
        },
        stop: function (e) {
			//alert('TEST - it will refresh page to save uploaded files');
			//$('#progress').hide();
			document.form1.jAttachments.value=JSON.stringify(Attachments);
			document.form1.submit();
        },
        done: function (e, data) {
			var origname=data.files[0].name;		
			var size=data.result.files[0].size;
			var file=data.result.files[0].name;
			Attachments.push({name:origname,size:size,file:file});
			showAttachments();
        },
        progressall: function (e, data) {
               var progress = parseInt(data.loaded / data.total * 100, 10);
               $('#progress .bar').css(
                   'width',
                   progress + '%'
               );
        },
    });
	

});

function showAttachments(){
//	alert(print_r(Attachments));
	var ss='';
	for(i in Attachments){
			var v=Attachments[i];
			var title=v.name;
			ss=ss+(ss?'<br>':'')+title
	}
	$('#uploadFilesList').html(ss);
}

//end tehila*/

function emailACHBalanceClick(){
	if(BusinessEmail){
		//alert('Open PDF');
		myRedirect('/pdf/index.php?doc=MCADailyACHPayment&cashadv_id='+cashadv_id);
	}else{
		alert('This report cannot be emailed to the merchant because the email is missing on the DBA page.');
	}
}

function emailACHCCClick(){
	if(BusinessEmail){
		//alert('Open PDF');
		myRedirect('/pdf/index.php?doc=MCACreditCardBatchPayment&cashadv_id='+cashadv_id);
	}else{
		alert('This report cannot be emailed to the merchant because the email is missing on the DBA page.');
	}
}

var savedStatusCL=getCtrlValue('Status'); // add tehila
function myInit(){
	
	var e=el('OfficeCommPerc'); if(e) e.disabled=true;
	var blueitems=['AmountRequested','FactorRate',/*'OfficeCommPerc',*/'RepCommPerc','monthDeposit1','monthDeposit2','monthDeposit3','monthDeposit4','monthDeposit5','monthDeposit6','monthDeposit7','monthDeposit8','monthDeposit9','monthDeposit10','monthDeposit11','monthDeposit12','ManagementFeePerc','DailyResidualPerc','DeductCommissionsFrom','WithdrawalAmt'];
	var grayitems=['TotalPayback','TotalProfit','OfficeComm','RepComm','TotalCorpProfit','MonthlyBankDeposits', 'achPaybackMonths'];
	var i, o;
	for(i=0;i<blueitems.length;i++){
		o=el(blueitems[i]);
		if(!o) continue;
		o.className= o.className+' inpField';
		o.onchange=myOnChangeInputField;
		//alert(o.className);
	}
	for(i=0;i<grayitems.length;i++){
		o=el(grayitems[i]);
		if(!o) continue;
		o.className= o.className+' calcField';
		o.readOnly=true;
		//alert(o.className);
	}
	
	o=el('FundingProduct');
	if(o) o.onchange=function(){document.form1.submit()};
	myOnChangeInputField();
	
	
	var credMinItems=['cred1BorName','cred1BorLastName','cred1BorSSN','cred1CurAddress','cred1CurCity','cred1CurState','cred1CurZip','cred1BorSSN'];
	for(i=0;i<credMinItems.length;i++){
		o=el(credMinItems[i]);
		if(!o) continue;
		o.className= o.className+' inpMinimal';
	}
	

	o=el('Status');
	
	var savedStatus=getCtrlValue('Status');
	if(o){
		o.onchange=function(event){
			var err='';
			var errCL='';
			var s=getCtrlValue('Status');
			if(s=='Participation'||s=='Approved'||s=='Lender Debit'||s=='Merchant Credit'||s=='Agent Credit'
			||s=='Merchant Daily Debit'||s=='Lender Daily Credit'||s=='Completed'||s=='NSF Reject'){
				err='The CRM system will automatically change status of contract to Participation, Approved, and any of the ACH Billing status levels only after you add lenders to contract, add approval date, and add first daily ACH withdrawal date to the contract.';
			}
			
			if(savedStatus=='Lender Debit'||savedStatus=='Merchant Credit'||savedStatus=='Agent Credit'
			||savedStatus=='Merchant Daily Debit'||savedStatus=='Lender Daily Credit'||savedStatus=='Completed'||savedStatus=='NSF Reject'){
				err='You cannot change the status when this contract is active in the ACH Billing system';
			}
			 
			 //add tehila
			if(getCtrlValue('Status')=='Approved'&& !getCtrlValue('checkListDone')){
				errCL='The checkList is not complete!';
				}
				//end tehila
				
				
			if(err /*add tehila*/|| errCL/*end tehila*/){
				if (err) alert(err);
				/*add tehila*/
				if (errCL) alert (errCL);
				/*end tehila*/
				if(permittedSA && confirm('Allow Sysadmin user to change status manually?')){
				}else{
					setCtrlValue('Status',savedStatus);	
				}
			}
			
			myStatusChange2();			
		};
		myStatusChange2();
		//o.onchange();
	}


	o=el('InceptionDate');
	if(o) o.onchange=function(event){
		if(jsFundingProduct=='Fixed Daily ACH' || jsFundingProduct=='CCFixed'){
			var InceptionDate=getCtrlValue('InceptionDate');
	
			var s='';
			for(var i in approveValidationErr){
				s=s+ (s?', ':'')+ approveValidationErr[i];
			}

			if(InceptionDate && s){
				setCtrlValue('InceptionDate','');	
				alert('You cannot add an approval date until the following fields are completed:\n\n'+s);
			}
		}
		
		if(o.value && strToMoney(totalPerc)!=100.0){
			setCtrlValue('InceptionDate','');	
			alert('You cannot add Approval Date or First Withdrawal Date until you have added Syndicate Lender(s) to fund 100% of this contract.');
		}
		
	};


	o=el('achFirstWithdrawalDate');
	if(o) o.onchange=function(event){
			if(o.value && strToMoney(totalPerc)!=100.0){
				o.value='';
				el('f_achFirstWithdrawalDate_1').value='';
				alert('You cannot set-up the first ACH payment until you have added Syndicate Lender(s) to fund 100% of this contract.');
			}
			
			
	};



	
}


function myStatusChange2(){
			if(getCtrlValue('Status')=='Declined'){
					el('DeclineReason').disabled=false;
					el('DealLostReason').disabled=false;
			}else{
					el('DeclineReason').disabled=true;
					el('DealLostReason').disabled=true;
			}
			//tehila for task: substatus
			if(getCtrlValue('Status')=='Pre-Approved'){
					el('PreApprovedSubStatus').disabled=false;
			}else{
					el('PreApprovedSubStatus').disabled=true;
			}
			if(getCtrlValue('Status')=='Merchant Daily Debit'){
					el('PreDailyDebitSubStatus').disabled=false;
			}else{
					el('PreDailyDebitSubStatus').disabled=true;
			}
			if(getCtrlValue('Status')=='Contract IN'){
					el('PreContractINSubStatus').disabled=false;
			}else{
					el('PreContractINSubStatus').disabled=true;
			}
			if(getCtrlValue('Status')=='Underwriting'){
					el('PreUnderwritingSubStatus').disabled=false;
			}else{
					el('PreUnderwritingSubStatus').disabled=true;
			}
			//end
}

function myOnChangeInputField(){
	
	if(el('AmountRequested')){
		var AmountRequested= strToMoney(getCtrlValue('AmountRequested'));
	
		var TotalPayback = AmountRequested * strToMoney(getCtrlValue('FactorRate'));
		var TotalProfit  = TotalPayback - AmountRequested;
		if(getCtrlValue('DeductCommissionsFrom')=='FUNDING'){
			var OfficeComm = AmountRequested * strToMoney(getCtrlValue('OfficeCommPerc'))/100.0 ;
			var RepComm = AmountRequested * strToMoney(getCtrlValue('RepCommPerc'))/100.0 ;
		}else{
			var OfficeComm = TotalPayback * strToMoney(getCtrlValue('OfficeCommPerc'))/100.0 ;
			var RepComm = TotalPayback * strToMoney(getCtrlValue('RepCommPerc'))/100.0 ;
		}
		var TotalCorpProfit = TotalProfit - OfficeComm - RepComm;
		
		var aSum=0; var aCnt=0; var i; var a;
		for(i=1;i<=12;i++){
			a=strToMoney(getCtrlValue('monthDeposit'+i));
			if(a!=0){aSum+=a;aCnt++};
		}
		var MonthlyBankDeposits=aCnt? aSum/aCnt : 0;
		
		setCtrlValue('AmountRequested',formatCurrency(AmountRequested,''));
		setCtrlValue('TotalPayback',formatCurrency(TotalPayback,''));
		setCtrlValue('TotalProfit',formatCurrency(TotalProfit,''));
		setCtrlValue('OfficeComm',formatCurrency(OfficeComm,''));
		setCtrlValue('RepComm',formatCurrency(RepComm,''));
		setCtrlValue('TotalCorpProfit',formatCurrency(TotalCorpProfit,''));
		setCtrlValue('MonthlyBankDeposits',formatCurrency(MonthlyBankDeposits,''));
		
		if(getCtrlValue('FundingProduct')=='MCA'){
		}
		
		if(getCtrlValue('FundingProduct')=='Fixed Daily ACH' || getCtrlValue('FundingProduct')=='CCFixed'){
			var days= sDiv(TotalPayback,  strToMoney(getCtrlValue('WithdrawalAmt')));
			var days1=Math.ceil(days);
//			var days1=parseInt(getCtrlValue('achPaybackMonths'));
//			var WithdrawalAmt=sDiv(TotalPayback,  days1);
						
			var DailyResidualPerc=strToMoney(getCtrlValue('DailyResidualPerc'));
			var DailyResidualPercAmt=TotalPayback * DailyResidualPerc / 100;
			var DailyResidualPercAmtDaily= sDiv(DailyResidualPercAmt, days1);
			var ManagementFeePerc=strToMoney(getCtrlValue('ManagementFeePerc'));
			var ManagementFeePercAmt=TotalPayback * ManagementFeePerc / 100;
			var ManagementFeePercAmtDaily= sDiv(ManagementFeePercAmt , days1);
			
			
			
			//out
			setCtrlValue('achPaybackMonths',days1);
			//setCtrlValue('WithdrawalAmt',formatCurrency(WithdrawalAmt,'$'));
			el('spDailyRes').innerHTML= formatCurrency(DailyResidualPercAmt,'$') + ' / ' + formatCurrency(DailyResidualPercAmtDaily,'$') +' ('+days1+')' ; 
			el('spManFee').innerHTML= formatCurrency(ManagementFeePercAmt,'$') + ' / ' + formatCurrency(ManagementFeePercAmtDaily,'$') +' ('+days1+')' ;
		}
	}	
	
}

function myFormSubmit(f){
//	if(el('InceptionDate') && getCtrlValue('InceptionDate') && cntMissingDocs>0){
//		alert('You cannot add approval date for this merchant because '+cntMissingDocs+' required documentations are missing.');
//		return false;
//	}

	if(!el('DeclineReason').disabled && !getCtrlValue('DeclineReason')){
		alert('Underwriting Decline Reason Is Required');
		return false;
	}

	/*add tehila
	var err='';
	if(getCtrlValue('Status')=='Approved'&& !getCtrlValue('checkListDone')){
		err='The checkList is not complete!';
		}
	if (err){
	alert(err);
	if(permittedSA && confirm('Allow Sysadmin user to change status manually?'))
	{}
	else{
		setCtrlValue('Status',savedStatusCL);
		return false;	
		}
	}
	//end tehila*/
	myXXX_SaveBeep();
	return true;
}


function AddSyndClick(){
	var obj=el('newSynd[perc]');
	var val=obj.value*1;
//	alert(obj.value+','+syndTotalperc*1);
	if(val + syndTotalperc*1>100.0){
		alert('The funding '+val*1+'% you entered has exceeded the amount needed to fund this account.  Please select correct funding % ');
		obj.focus();
		return false;
	}		
	return true;
}


function checklistModified(name){
	//alert(name);
	setCtrlValue('checklist['+name+'][isModified]','1');
}


function mySendClick(cashadv_id,creditOptionsValid){
		if(creditOptionsValid){
	  		if(myCreditValidate() && confirm('Are you sure to send request?')){
				  document.form1.subcmd.value='postCredit';
				  myXXX_SaveBeep();
				  document.form1.submit();
				 //myRedirect('/creditreport.php?cmd=post&cashadv_id='+cashadv_id);
			}				 
		}else{
			alert('You do not have an account setup and activated with ACRAnet credit reporting company.  Please contact ACRAnet.com to setup a new account and add your new account info in the CRM\'s administrative setup/configuration section.');
		}

}

function myCreditValidate(){
	if(!getCtrlValue('cred1BorName')){alert('Borrower Name is Required'); return false;}
	if(!getCtrlValue('cred1BorLastName')){alert('Borrower Last Name is Required'); return false;}
	if(!getCtrlValue('cred1BorSSN')){alert('Borrower SSN is Required'); return false;}
	e=checkSSN(getCtrlValue('cred1BorSSN'),true);
	if (e){alert('Borrower SSN is Invalid'); return false;}
		
	return true;
}


function checkAllLenders(cb){
		var e=document.getElementsByName('selLender[]');
		for(i=0;i<e.length;i++) e[i].checked=cb.checked;;
}

var decTrackChange=false;
function decOnChange(trackChange){
		var decAmountRequested = strToMoney(getCtrlValue('decAmountRequested'));
		var decFactorRate = strToMoney(getCtrlValue('decFactorRate'));
		var decACHDays= strToMoney(getCtrlValue('decACHDays'));
		var decPaybackAmt=decAmountRequested*decFactorRate;
		var decDailyACH=sDiv(decPaybackAmt,decACHDays);
		setCtrlValue('decPaybackAmt',formatCurrency(decPaybackAmt,''));
		setCtrlValue('decDailyACH',formatCurrency(decDailyACH,''));
	
		
		var readonly=getCtrlValue('decSelection')=='2'?false:true;
		var fields=['decAmountRequested','decFactorRate','decACHDays'];
		for(var i in fields){
			if(o=el(fields[i])){
				o.readOnly=readonly;
				myRemoveClass(o,readonly?'inpField':'calcField');
				myAddClass(o,readonly?'calcField':'inpField');
			}
		}
		
		switch(getCtrlValue('decSelection')){
			case '1':
				el('trDecNotes').style.display='none';
				break;
			case '2':
				el('trDecNotes').style.display='';
				el('divDecNotesTitle1').style.display='';
				el('divDecNotesTitle2').style.display='none';
				break;
			case '3':
				el('trDecNotes').style.display='';
				el('divDecNotesTitle1').style.display='none';
				el('divDecNotesTitle2').style.display='';
				break;
		}
		

		if(trackChange) decTrackChange=true;	
}


function decSubmitResponse(){
	if(getCtrlValue('decSelection')=='2' && decTrackChange==false){
		alert('You must first make a change to the funding amount, factor rate, and/or # days of ACH withdrawal fields first before you can submit your response.');
		return;
	}
	
  myXXX_SaveBeep();
  document.form1.submit();
}



function selLenderClick(obj){
	//var a=getCtrlValue('selLender['+uid+']');
	//alert(obj.value+','+obj.checked);
	var uid=obj.value;
	el('trSelLender_'+uid).style.display=obj.checked?'':'none';
}



<?php echo '</script'; ?>
>
<style>
SPAN.spMCALoan{font-size:12pt;font-weight:bold;color:#3366cc;}
</style>




<form name="form1" method="post" enctype="multipart/form-data" onsubmit="return myFormSubmit(this)">
    <input type=hidden name="cashadv_id" value="<?php echo $_smarty_tpl->tpl_vars['cashadv_id']->value;?>
">
    <input type=hidden name="app_id" value="<?php echo $_smarty_tpl->tpl_vars['app_id']->value;?>
">
    <input type=hidden name="tab" value="<?php echo $_smarty_tpl->tpl_vars['tab']->value;?>
">
    <input type=hidden name="cmd" value="cashadv_submit">
    <input type=hidden name="subcmd" value="">
	<!--add tehila-->
	<input type=hidden name="checkListDone" value="<?php echo $_smarty_tpl->tpl_vars['checkListDone']->value;?>
">
	<input type="hidden" name="jAttachments" />
	<!--end tehila-->

<?php echo $_smarty_tpl->getSubTemplate ('status/cashadv_header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>'MCA Application Summary'), 0);?>




<div class="mySortable mca_dba">


<?php $_smarty_tpl->smarty->_tag_stack[] = array('mybox', array('node'=>"mca_dbasummarystat",'title'=>"Summary",'class'=>"box-one")); $_block_repeat=true; echo smarty_block_mybox(array('node'=>"mca_dbasummarystat",'title'=>"Summary",'class'=>"box-one"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<div class="statBlock">

<div class="graySummary">Approved Funding $ <?php if ($_smarty_tpl->tpl_vars['stat']->value['Lenders']) {?><em><?php echo smarty_modifier_cut($_smarty_tpl->tpl_vars['stat']->value['Lenders'],430);?>
</em><?php }?>

<div class="toright"><a href="/cashadvance.php?cmd=cashadv_edit&cashadv_id=<?php echo $_smarty_tpl->tpl_vars['cashadv_id']->value;?>
&tab=funding"><?php echo smarty_modifier_money($_smarty_tpl->tpl_vars['stat']->value['ApprovedFunding']);?>
</a></div></div>

<div class="graySummary">Payback Amount $ <div class="toright"><a href="/cashadvance.php?cmd=cashadv_edit&cashadv_id=<?php echo $_smarty_tpl->tpl_vars['cashadv_id']->value;?>
&tab=funding"><?php echo smarty_modifier_money($_smarty_tpl->tpl_vars['stat']->value['PaybackAmount']);?>
</a></div></div>

<div class="graySummary">Total Paid Back $ <div class="toright"><a href="/cashadvance.php?cmd=cashadv_edit&cashadv_id=<?php echo $_smarty_tpl->tpl_vars['cashadv_id']->value;?>
&tab=funding"><?php echo smarty_modifier_money($_smarty_tpl->tpl_vars['stat']->value['TotalPaidBack']);?>
</a></div></div>

<div class="graySummary">PaidBack Balance Due$ <div class="toright"><a href="/cashadvance.php?cmd=cashadv_edit&cashadv_id=<?php echo $_smarty_tpl->tpl_vars['cashadv_id']->value;?>
&tab=funding"><?php echo smarty_modifier_money($_smarty_tpl->tpl_vars['stat']->value['PaybackBalance']);?>
</a></div></div>

<div class="graySummary">Fixed Daily ACH Amount $ <div class="toright"><a href="/cashadvance.php?cmd=cashadv_edit&cashadv_id=<?php echo $_smarty_tpl->tpl_vars['cashadv_id']->value;?>
&tab=funding"><?php echo smarty_modifier_money($_smarty_tpl->tpl_vars['stat']->value['FixedDailyACH']);?>
</a></div></div>

<div class="graySummary">User Commissions $ <?php if ($_smarty_tpl->tpl_vars['stat']->value['Users']) {?><em><?php echo smarty_modifier_cut($_smarty_tpl->tpl_vars['stat']->value['Users'],430);?>
</em><?php }?><div class="toright"><a href="/cashadvance.php?cmd=cashadv_edit&cashadv_id=<?php echo $_smarty_tpl->tpl_vars['cashadv_id']->value;?>
&tab=funding"><?php echo smarty_modifier_money($_smarty_tpl->tpl_vars['stat']->value['UserCommissions']);?>
</a></div></div>

<div class="graySummary">Additional User Commissions $ <?php if ($_smarty_tpl->tpl_vars['stat']->value['UsersA']) {?><em><?php echo smarty_modifier_cut($_smarty_tpl->tpl_vars['stat']->value['UsersA'],430);?>
</em><?php }?><div class="toright"><a href="/cashadvance.php?cmd=cashadv_edit&cashadv_id=<?php echo $_smarty_tpl->tpl_vars['cashadv_id']->value;?>
&tab=funding"><?php echo smarty_modifier_money($_smarty_tpl->tpl_vars['stat']->value['AdditionalUserCommissions']);?>
</a></div></div>

<div class="graySummary">Merchant Administrative & Underwriting Fees <div class="toright"><a href="/cashadvance.php?cmd=cashadv_edit&cashadv_id=<?php echo $_smarty_tpl->tpl_vars['cashadv_id']->value;?>
&tab=funding"><?php echo smarty_modifier_money($_smarty_tpl->tpl_vars['stat']->value['MerchAdmFees']);?>
</a></div></div>

<div class="graySummary">Lender One-Time Mgmt Fees $ <?php if ($_smarty_tpl->tpl_vars['stat']->value['Lenders1']) {?><em><?php echo smarty_modifier_cut($_smarty_tpl->tpl_vars['stat']->value['Lenders1'],430);?>
</em><?php }?><div class="toright"><a href="/cashadvance.php?cmd=cashadv_edit&cashadv_id=<?php echo $_smarty_tpl->tpl_vars['cashadv_id']->value;?>
&tab=synd"><?php echo smarty_modifier_money($_smarty_tpl->tpl_vars['stat']->value['LendOneTimeFee']);?>
</a></div></div>

<div class="graySummary">Lender Daily Mgmt Fees $ <?php if ($_smarty_tpl->tpl_vars['stat']->value['Lenders2']) {?><em><?php echo smarty_modifier_cut($_smarty_tpl->tpl_vars['stat']->value['Lenders2'],430);?>
</em><?php }?><div class="toright"><a href="/cashadvance.php?cmd=cashadv_edit&cashadv_id=<?php echo $_smarty_tpl->tpl_vars['cashadv_id']->value;?>
&tab=synd"><?php echo smarty_modifier_money($_smarty_tpl->tpl_vars['stat']->value['LendDailyFee']);?>
</a></div></div>

<div class="graySummary">Lender One-Time Admin Fees $ <?php if ($_smarty_tpl->tpl_vars['stat']->value['Lenders3']) {?><em><?php echo smarty_modifier_cut($_smarty_tpl->tpl_vars['stat']->value['Lenders3'],430);?>
</em><?php }?><div class="toright"><a href="/cashadvance.php?cmd=cashadv_edit&cashadv_id=<?php echo $_smarty_tpl->tpl_vars['cashadv_id']->value;?>
&tab=synd"><?php echo smarty_modifier_money($_smarty_tpl->tpl_vars['stat']->value['LendAdmFee']);?>
</a></div></div>
</div>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_mybox(array('node'=>"mca_dbasummarystat",'title'=>"Summary",'class'=>"box-one"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


   <!--add tehila -add note-->
<?php $_smarty_tpl->smarty->_tag_stack[] = array('mybox', array('node'=>"mcanotes_add",'title'=>"Add a Note",'class'=>"box-one box-blue")); $_block_repeat=true; echo smarty_block_mybox(array('node'=>"mcanotes_add",'title'=>"Add a Note",'class'=>"box-one box-blue"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<table width="100%" >       
        <input type="hidden" name="cmd2" value="submit_note" />
        <input type="hidden" name="contact_id" value="<?php echo $_smarty_tpl->tpl_vars['contact_id']->value;?>
" />

<?php if (permitted('ADMIN-RIGHTS')) {?>
       <tr >
          <td align="center" class="tdValueColumn">
          
          <select name="note_vis">
          <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['selVis']->value),$_smarty_tpl);?>

          </select>
          
          </td>
        </tr>
<?php }?>        
        
        <tr >
          <td align="center" class="tdValueColumn"><span class="nobr">
            <textarea name="note_text" rows="5" class="w_3_3"></textarea>
          </span></td>
        </tr>
      </table>
	<div class="footer"><input type="submit" name="btnAddNote" value="Submit Note" /></div>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_mybox(array('node'=>"mcanotes_add",'title'=>"Add a Note",'class'=>"box-one box-blue"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<!--end tehila-->


<!--add tehila docs uplodeed-->
<?php $_smarty_tpl->smarty->_tag_stack[] = array('mybox', array('node'=>"mcadocs_docpwupl",'title'=>"Documents/Paperwork Uploaded",'class'=>"box-one box-blue")); $_block_repeat=true; echo smarty_block_mybox(array('node'=>"mcadocs_docpwupl",'title'=>"Documents/Paperwork Uploaded",'class'=>"box-one box-blue"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <table  border="0"  cellspacing="0" cellpadding="0" width="100%">
      <tr >
        <td colspan="5" class="tdValueColumn">

		<table class="tblMultipleUpload">
            <tr><td class="c1">
            <span class="fileinput-button" style=''>
                <input type="button" value="Upload Multiple Docs" class="std"> 
                <input id="fileupload" type="file" name="files[]" data-url="/uploader/server/" multiple>
            </span>
            </td>
            <td class="c2"><div id="progress" class="progressBar"><div class="bar"></div></div></td></tr>
            <tr>
              <td colspan="2" class="c3"><div id="uploadFilesList"></div></td>
            </tr>
        </table>
            
            
            </td>
      </tr>
     
    </table>
  <div class="footer">
	  <div class="toleft">
        <?php if (permitted('ADMIN-RIGHTS')) {?>
		<input type="button" value="Show All Docs" class="std" onclick="myRedirect('/cashadvance.php?cmd=cashadv_edit&cashadv_id=<?php echo $_smarty_tpl->tpl_vars['cashadv_id']->value;?>
&tab=userdoc')"> 
		<?php }?>  
    </div>
        <?php if (permitted('ADMIN-RIGHTS')) {?>
            <input  type="submit" value="Save" />
        <?php }?>  
    </div>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_mybox(array('node'=>"mcadocs_docpwupl",'title'=>"Documents/Paperwork Uploaded",'class'=>"box-one box-blue"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
 




<!--end tehila-->




<?php  $_smarty_tpl->tpl_vars['section'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['section']->_loop = false;
 $_smarty_tpl->tpl_vars['k_sec'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['sections']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['section']->key => $_smarty_tpl->tpl_vars['section']->value) {
$_smarty_tpl->tpl_vars['section']->_loop = true;
 $_smarty_tpl->tpl_vars['k_sec']->value = $_smarty_tpl->tpl_vars['section']->key;
?>        

<?php $_smarty_tpl->smarty->_tag_stack[] = array('mybox', array('node'=>"mcadba_".((string)$_smarty_tpl->tpl_vars['section']->value['section_code']),'title'=>$_smarty_tpl->tpl_vars['section']->value['title'],'class'=>"box-one box-".((string)$_smarty_tpl->tpl_vars['section']->value['color']))); $_block_repeat=true; echo smarty_block_mybox(array('node'=>"mcadba_".((string)$_smarty_tpl->tpl_vars['section']->value['section_code']),'title'=>$_smarty_tpl->tpl_vars['section']->value['title'],'class'=>"box-one box-".((string)$_smarty_tpl->tpl_vars['section']->value['color'])), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>



<?php if ($_smarty_tpl->tpl_vars['section']->value['section_code']=='DBA_STATUS') {?>    
<TABLE width="100%" class="tblFields">
    <tr>
		<TD class="tdListHeaders">
		<div class="toleft">Required Docs for Underwriting: <a href="/cashadvance.php?cmd=cashadv_edit&cashadv_id=<?php echo $_smarty_tpl->tpl_vars['cashadv_id']->value;?>
&tab=checklist"><?php echo smarty_modifier_num($_smarty_tpl->tpl_vars['checklistStat']->value['cntTotal'],2);?>
</a> Total  |  <a href="/cashadvance.php?cmd=cashadv_edit&cashadv_id=<?php echo $_smarty_tpl->tpl_vars['cashadv_id']->value;?>
&tab=checklist"><?php echo smarty_modifier_num($_smarty_tpl->tpl_vars['checklistStat']->value['cntReceived'],2);?>
</a> Received | <a href="/cashadvance.php?cmd=cashadv_edit&cashadv_id=<?php echo $_smarty_tpl->tpl_vars['cashadv_id']->value;?>
&tab=checklist"><?php echo smarty_modifier_num($_smarty_tpl->tpl_vars['checklistStat']->value['cntMissing'],2);?>
</a> Missing</div>
		<div class="toright"><a href="javascript:;" onclick="showPopUp('/cashadvance.php?cmd=checklist_required_popup&cashadv_id=<?php echo $_smarty_tpl->tpl_vars['cashadv_id']->value;?>
',700,600);">View All Req'd Docs</a> 
        | <a href="/cashadvance.php?cmd=cashadv_edit&cashadv_id=<?php echo $_smarty_tpl->tpl_vars['cashadv_id']->value;?>
&tab=checklist">Manage</a></div>

					</TD>
	</tr>	
</TABLE>    
<?php }?>




	
	<?php if ($_smarty_tpl->tpl_vars['section']->value['type']=='fields') {?>    
	<div>
    	<?php echo $_smarty_tpl->tpl_vars['section']->value['html'];?>
		
    </div>
<?php }?>

 

<?php if ($_smarty_tpl->tpl_vars['section']->value['type']=='lead') {?>
<?php $_smarty_tpl->tpl_vars['leadsec'] = new Smarty_variable($_smarty_tpl->tpl_vars['section']->value['leadSection'], null, 0);?>
	<table width="100%">
    <TR colspan="3"  id="tr_lead_section_body_<?php echo $_smarty_tpl->tpl_vars['leadsec']->value['section_code'];?>
">
      <TD>
	  
	    <div class="boxHolder">
		<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['leadsec']->value['list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
			<?php if ($_smarty_tpl->tpl_vars['item']->value['cellHTML']) {?>
				<?php echo $_smarty_tpl->tpl_vars['item']->value['cellHTML'];?>

			<?php } else { ?>				
            	<div class="box_<?php echo $_smarty_tpl->tpl_vars['item']->value['size'];?>
_<?php echo $_smarty_tpl->tpl_vars['leadsec']->value['numCol'];?>
">
          		<?php echo $_smarty_tpl->tpl_vars['item']->value['html'];?>

		    	</div>	
			<?php }?>	
		<?php } ?>        
		</div>

	  </TD>
	</TR>
    </table>
<?php }?>


	<div class="footer">
		<?php if ($_smarty_tpl->tpl_vars['section']->value['section_code']=='DBA_STATUS') {?>
		<div class="toleft">
      <a href="javascript:;" onclick="if(confirm('You have chosen to close out Contract # <?php echo $_smarty_tpl->tpl_vars['cashadv_idStr']->value;
echo $_smarty_tpl->tpl_vars['cashadv_idModifier']->value;?>
,  with an active payback balance of $<?php echo smarty_modifier_money($_smarty_tpl->tpl_vars['Balance']->value,2);?>
 still outstanding.  The MCA system will create a new contract and apply the balance of $<?php echo smarty_modifier_money($_smarty_tpl->tpl_vars['Balance']->value,2);?>
 to this new contract.  When the Renewal Contract is ready to deposit the approved funding amount to the merchant, the outstanding balance of $<?php echo smarty_modifier_money($_smarty_tpl->tpl_vars['Balance']->value,2);?>
 will be deducted from the funding amount to be deposited to the merchants bank account to close out the old contract.\n\nThe old contract status will remain in its current ACH billing status until the new renewal contract status has changed to \'Approved\'. When the new contract status is \'Approved\', the old contract will close with a status of \'Completed\'.\n\nAre you sure you want to proceed?')) myRedirect('/cashadvance.php?cmd=do_renew&cashadv_id=<?php echo $_smarty_tpl->tpl_vars['cashadv_id']->value;?>
')" title="Renew Contract">Renew</a>
		|


      <a href="javascript:;" onclick="if(confirm('You have chosen to duplicate Contract # <?php echo $_smarty_tpl->tpl_vars['cashadv_idStr']->value;
echo $_smarty_tpl->tpl_vars['cashadv_idModifier']->value;?>
.  The MCA system will create a new contract. \n\nAre you sure you want to proceed?')) myRedirect('/cashadvance.php?cmd=do_clone&cashadv_id=<?php echo $_smarty_tpl->tpl_vars['cashadv_id']->value;?>
')">Duplicate</a>
		|


	  <a href="/cashadvance.php?cmd=manpay&cashadv_id=<?php echo $_smarty_tpl->tpl_vars['cashadv_id']->value;?>
"   >Early Payoff</a>
        </div>
        
        
	  <a href="javascript:;" onclick="emailACHBalanceClick()"  title="Email ACH Balance Report to Client" >Email ACH Report</a>
		|

	  <a href="javascript:;" onclick="emailACHCCClick()"   title="Email CC Batch Balance Report to Client">Email CC Report</a>
		|
        
        
        <?php }?>  




		<?php if ($_smarty_tpl->tpl_vars['section']->value['section_code']=='DBA_INFO') {?>
        	<a href="javascript:;" 
		onclick="showPopUp('/dymo/popup.php?type=mca&id=<?php echo $_smarty_tpl->tpl_vars['cashadv_id']->value;?>
',700,700)">Print Dymo Label</a>     
        |
        
        
        <?php }?>
        
      
      <?php if ($_smarty_tpl->tpl_vars['section']->value['isEdit']) {?>
		
      	<a href="javascript:;" onclick="if(myFormSubmit(document.form1)) document.form1.submit()">Save</a>
      <?php } else { ?>
      	
			<a href="javascript:;" 
          onclick="document.location.href='/cashadvance.php?cmd=cashadv_edit&app_id=<?php echo $_smarty_tpl->tpl_vars['app_id']->value;?>
&cashadv_id=<?php echo $_smarty_tpl->tpl_vars['cashadv_id']->value;?>
&tab=dba&mode=edit'">Edit</a>
      <?php }?>
      
	</div>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_mybox(array('node'=>"mcadba_".((string)$_smarty_tpl->tpl_vars['section']->value['section_code']),'title'=>$_smarty_tpl->tpl_vars['section']->value['title'],'class'=>"box-one box-".((string)$_smarty_tpl->tpl_vars['section']->value['color'])), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>





<?php } ?>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('mybox', array('node'=>"cashadv_dba_leadusers",'title'=>"Users Involved in this MCA Contract (from Lead to MCA Contract Boarding)",'class'=>"box-one")); $_block_repeat=true; echo smarty_block_mybox(array('node'=>"cashadv_dba_leadusers",'title'=>"Users Involved in this MCA Contract (from Lead to MCA Contract Boarding)",'class'=>"box-one"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<table width="100%">
    <tr>
	<td class="tdListHeaders">User Name</td>
	<td class="tdListHeaders">User Type</td>
	<td class="tdListHeaders">Email</td>
	<td class="tdListHeaders">Phone</td>
    </tr>
  	<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['leadusers']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
    <tr>
	<td class="tdValueColumn"><a href="/user.php?cmd=edit_user&uid=<?php echo $_smarty_tpl->tpl_vars['item']->value['uid'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</a></td>
	<td class="tdValueColumn"><?php echo $_smarty_tpl->tpl_vars['item']->value['type'];?>
</td>
	<td class="tdValueColumn"><?php echo $_smarty_tpl->tpl_vars['item']->value['phone'];?>
 <?php echo smarty_function_my_call(array('phone'=>$_smarty_tpl->tpl_vars['item']->value['phone']),$_smarty_tpl);?>
</td>
	<td class="tdValueColumn"><a href="mailto:<?php echo $_smarty_tpl->tpl_vars['item']->value['email'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['email'];?>
</a></td>
    </tr>
    <?php } ?>
  </table>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_mybox(array('node'=>"cashadv_dba_leadusers",'title'=>"Users Involved in this MCA Contract (from Lead to MCA Contract Boarding)",'class'=>"box-one"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>




</div>
<?php echo '<script'; ?>
>mybox_sortableInit('.mySortable.mca_dba');<?php echo '</script'; ?>
>


</form>


<?php echo '<script'; ?>
 language="javascript">myInit();
<?php echo '</script'; ?>
>
<?php }} ?>
