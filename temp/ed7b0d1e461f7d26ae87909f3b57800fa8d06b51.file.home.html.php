<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-07-03 02:24:09
         compiled from "/homepages/37/d619410358/htdocs/developer/template/home.html" */ ?>
<?php /*%%SmartyHeaderCode:6742144075778af89d5e294-60190264%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ed7b0d1e461f7d26ae87909f3b57800fa8d06b51' => 
    array (
      0 => '/homepages/37/d619410358/htdocs/developer/template/home.html',
      1 => 1466056144,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6742144075778af89d5e294-60190264',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'jsQuotes' => 0,
    'confDayquotesTimer' => 0,
    'topAppProfit' => 0,
    'item' => 0,
    'topAppVol' => 0,
    'topAppNumtrans' => 0,
    'topAgentAccSub' => 0,
    'topAgentAcc' => 0,
    'topAgentRes' => 0,
    'topAgentCom' => 0,
    'topMcaAmount' => 0,
    'topMcaBal' => 0,
    'topMcaProf' => 0,
    'topTeamleaderLead' => 0,
    'topTeamleaderAppt' => 0,
    'topTeamleaderSold' => 0,
    'topTmLead' => 0,
    'topTmAppt' => 0,
    'topTmSold' => 0,
    'topLeadcloserLead' => 0,
    'topLeadcloserAppt' => 0,
    'topLeadcloserSold' => 0,
    'statList' => 0,
    'statProfList' => 0,
    'trafficEmbedUrl' => 0,
    'trafficEmbedCity' => 0,
    'trafficEmbedState' => 0,
    'sections' => 0,
    'sec_code' => 0,
    'section' => 0,
    'row' => 0,
    'leadstorelocatorCode' => 0,
    'articles' => 0,
    'TrainingVideos' => 0,
    'speakpipeCode' => 0,
    'olarkCode' => 0,
    'phpliveCode' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5778af8a051997_20571009',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5778af8a051997_20571009')) {function content_5778af8a051997_20571009($_smarty_tpl) {?><?php if (!is_callable('smarty_function_js_include')) include '/homepages/37/d619410358/htdocs/developer/ext/smarty3/plugins/function.js_include.php';
if (!is_callable('smarty_block_mybox')) include '/homepages/37/d619410358/htdocs/developer/ext/smarty3/plugins/block.mybox.php';
if (!is_callable('smarty_function_js_data')) include '/homepages/37/d619410358/htdocs/developer/ext/smarty3/plugins/function.js_data.php';
if (!is_callable('smarty_function_cycle')) include '/homepages/37/d619410358/htdocs/developer/ext/smarty3/plugins/function.cycle.php';
if (!is_callable('smarty_modifier_ucwords')) include '/homepages/37/d619410358/htdocs/developer/ext/smarty3/plugins/modifier.ucwords.php';
if (!is_callable('smarty_modifier_money')) include '/homepages/37/d619410358/htdocs/developer/ext/smarty3/plugins/modifier.money.php';
if (!is_callable('smarty_modifier_truncate')) include '/homepages/37/d619410358/htdocs/developer/ext/smarty3/plugins/modifier.truncate.php';
if (!is_callable('smarty_modifier_date_format')) include '/homepages/37/d619410358/htdocs/developer/ext/smarty3/plugins/modifier.date_format.php';
if (!is_callable('smarty_modifier_date')) include '/homepages/37/d619410358/htdocs/developer/ext/smarty3/plugins/modifier.date.php';
?><?php echo smarty_function_js_include(array('src'=>'/css/calendar.css'),$_smarty_tpl);?>

<?php echo smarty_function_js_include(array('src'=>'/css/homepage.css'),$_smarty_tpl);?>


<?php echo '<script'; ?>
 language="javascript">
	function statAppChange(){
		var statApp=getCtrlValue('statApp');
		el('tblAppProf').style.display= statApp=='Prof'?'':'none';
		el('tblAppVol').style.display= statApp=='Vol'?'':'none';
		el('tblAppNumtrans').style.display= statApp=='Numtrans'?'':'none';

		var statAgent=getCtrlValue('statAgent');
		el('tblAgentAccSub').style.display= statAgent=='AccSub'?'':'none';
		el('tblAgentAcc').style.display= statAgent=='Acc'?'':'none';
		el('tblAgentRes').style.display= statAgent=='Res'?'':'none';
		el('tblAgentCom').style.display= statAgent=='Com'?'':'none';

		var statMca=getCtrlValue('statMca');
		el('tblMcaAmount').style.display= statMca=='Amount'?'':'none';
		el('tblMcaBal').style.display= statMca=='Bal'?'':'none';
		el('tblMcaProf').style.display= statMca=='Prof'?'':'none';

// top 10
		var statTeamleader=getCtrlValue('statTeamleader');
		el('tblTeamleaderLead').style.display= statTeamleader=='Lead'?'':'none';
		el('tblTeamleaderAppt').style.display= statTeamleader=='Appt'?'':'none';
		el('tblTeamleaderSold').style.display= statTeamleader=='Sold'?'':'none';

		var statTm=getCtrlValue('statTm');
		el('tblTmLead').style.display= statTm=='Lead'?'':'none';
		el('tblTmAppt').style.display= statTm=='Appt'?'':'none';
		el('tblTmSold').style.display= statTm=='Sold'?'':'none';

		var statLeadcloser=getCtrlValue('statLeadcloser');
		el('tblLeadcloserLead').style.display= statLeadcloser=='Lead'?'':'none';
		el('tblLeadcloserAppt').style.display= statLeadcloser=='Appt'?'':'none';
		el('tblLeadcloserSold').style.display= statLeadcloser=='Sold'?'':'none';
	}


    $(document).ready(function() {



    });

<?php echo '</script'; ?>
>
<style>
</style>



<div class="mySortable HomePage">



<?php if (permitted('HOME-DailyQuotes')) {?>
	<?php $_smarty_tpl->smarty->_tag_stack[] = array('mybox', array('node'=>'HOME-DailyQuotes','title'=>'Daily Sales & Motivational Quotes','class'=>'box-one box-blue')); $_block_repeat=true; echo smarty_block_mybox(array('node'=>'HOME-DailyQuotes','title'=>'Daily Sales & Motivational Quotes','class'=>'box-one box-blue'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

		<?php echo smarty_function_js_data(array('jsQuotes'=>$_smarty_tpl->tpl_vars['jsQuotes']->value,'jsQuotesTimer'=>$_smarty_tpl->tpl_vars['confDayquotesTimer']->value),$_smarty_tpl);?>

		<div id="quoteDiv"></div>
		
		<?php echo '<script'; ?>
>
        var myQuoteI=0;
        myQuoteTimer();
        function myQuoteTimer(){
        	if(jsQuotes.length==0) return;
        	var d=document.getElementById('quoteDiv');
        	if(!d) return;
        	if(!jsQuotes[myQuoteI]){myQuoteI=0;}
        	var s=jsQuotes[myQuoteI]['txt'];
        //	d.innerHTML='Quote #'+(jsQuotes[myQuoteI]['id'])+': '+s;
        	d.innerHTML=s;
        	myQuoteI++;

        //    alert(myFlashTextTag);
        	window.setTimeout("myQuoteTimer()",jsQuotesTimer*1000,"javascript");
        }
		<?php echo '</script'; ?>
>
		
	<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_mybox(array('node'=>'HOME-DailyQuotes','title'=>'Daily Sales & Motivational Quotes','class'=>'box-one box-blue'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<?php }?>



<?php if (permitted('HOME-top25App')) {?>

	<?php $_smarty_tpl->smarty->_tag_stack[] = array('mybox', array('node'=>'HOME-top25App','title'=>'Top 25 Merchants','class'=>'box-three box-1 box-green')); $_block_repeat=true; echo smarty_block_mybox(array('node'=>'HOME-top25App','title'=>'Top 25 Merchants','class'=>'box-three box-1 box-green'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

	  <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td class="tdListHeaders" align="center">
		  <select style="width:195px" onchange="statAppChange()" name="statApp">
		  <option value="Prof" selected>by Total Profit $</option>
		  <option value="Vol" >by Volume $</option>
		  <option value="Numtrans" >by Avg TXN $</option>
		  </select>		  </td>
          </tr>
		  <tr>
		  <td>
			  <table id="tblAppProf" class="myStat25" width="100%" border="0" cellspacing="0" cellpadding="0">
				<tr>
				  <td class="tdListHeaders myDbaHeader">Merchant Name</td>
				  <td class="tdListHeaders myAmtHeader"><div align="right">Total $</div></td>
				</tr>
				<?php echo smarty_function_cycle(array('values'=>'even,odd','reset'=>true,'print'=>false),$_smarty_tpl);?>

				<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['topAppProfit']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
				<tr class="<?php echo smarty_function_cycle(array('values'=>'even,odd'),$_smarty_tpl);?>
" >
				  <td><div class="myDbaCell"><?php echo smarty_modifier_ucwords($_smarty_tpl->tpl_vars['item']->value['BusinessName']);?>
</div></td>
				  <td><div class="myAmtCell"><?php echo smarty_modifier_money($_smarty_tpl->tpl_vars['item']->value['amount'],2);?>
</div></td>
				</tr>
				<?php } ?>
			  </table>

			  <table id="tblAppVol" class="myStat25" style="display:none" width="100%" border="0" cellspacing="0" cellpadding="0">
				<tr>
				  <td class="tdListHeaders myDbaHeader">Merchant Name</td>
				  <td class="tdListHeaders myAmtHeader"><div align="right">Total $</div></td>
				</tr>
				<?php echo smarty_function_cycle(array('values'=>'even,odd','reset'=>true,'print'=>false),$_smarty_tpl);?>

				<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['topAppVol']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
				<tr class="<?php echo smarty_function_cycle(array('values'=>'even,odd'),$_smarty_tpl);?>
" >
				  <td><div class="myDbaCell"><?php echo smarty_modifier_ucwords($_smarty_tpl->tpl_vars['item']->value['BusinessName']);?>
</div></td>
				  <td><div class="myAmtCell"><?php echo smarty_modifier_money($_smarty_tpl->tpl_vars['item']->value['volume'],2);?>
</div></td>
				</tr>
				<?php } ?>
			  </table>

			  <table id="tblAppNumtrans" class="myStat25" style="display:none" width="100%" border="0" cellspacing="0" cellpadding="0">
				<tr>
				  <td class="tdListHeaders myDbaHeader">Merchant Name</td>
				  <td class="tdListHeaders myAmtHeader"><div align="right"># Trans</div></td>
				</tr>
				<?php echo smarty_function_cycle(array('values'=>'even,odd','reset'=>true,'print'=>false),$_smarty_tpl);?>

				<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['topAppNumtrans']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
				<tr class="<?php echo smarty_function_cycle(array('values'=>'even,odd'),$_smarty_tpl);?>
" >
				  <td><div class="myDbaCell"><?php echo smarty_modifier_ucwords($_smarty_tpl->tpl_vars['item']->value['BusinessName']);?>
</div></td>
				  <td><div class="myAmtCell"><?php echo smarty_modifier_money($_smarty_tpl->tpl_vars['item']->value['numTrans'],0);?>
</div></td>
				</tr>
				<?php } ?>
			  </table>

		  </td>
		  </tr>
        
      </table>
	<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_mybox(array('node'=>'HOME-top25App','title'=>'Top 25 Merchants','class'=>'box-three box-1 box-green'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }?>

<?php if (permitted('HOME-top25Agent')) {?>
	<?php $_smarty_tpl->smarty->_tag_stack[] = array('mybox', array('node'=>'HOME-top25Agent','title'=>'Top 25  Sales Agents','class'=>'box-three box-2 box-green')); $_block_repeat=true; echo smarty_block_mybox(array('node'=>'HOME-top25Agent','title'=>'Top 25  Sales Agents','class'=>'box-three box-2 box-green'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

	<table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td class="tdListHeaders" align="center">
		  <select style="width:195px" onchange="statAppChange()" name="statAgent">
		  <option value="AccSub" selected>by Account Submitted</option>
		  <option value="Acc" >by Approved Accounts</option>
		  <option value="Res" >by Residuals</option>
		  <option value="Com" >by Commissions</option>
		  </select>		  </td>
          </tr>
		  <tr>
		  <td>

			  <table id="tblAgentAccSub" class="myStat25" width="100%" border="0" cellspacing="0" cellpadding="0">
				<tr>
				  <td class="tdListHeaders myDbaHeader">User Name</td>
				  <td class="tdListHeaders myAmtHeader"><div align="right">Total #</div></td>
				</tr>
				<?php echo smarty_function_cycle(array('values'=>'even,odd','reset'=>true,'print'=>false),$_smarty_tpl);?>

				<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['topAgentAccSub']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
				<tr class="<?php echo smarty_function_cycle(array('values'=>'even,odd'),$_smarty_tpl);?>
" >
				  <td><div class="myDbaCell"><?php echo $_smarty_tpl->tpl_vars['item']->value['UserName'];?>
</div></td>
				  <td><div class="myAmtCell"><?php echo smarty_modifier_money($_smarty_tpl->tpl_vars['item']->value['cnt'],0);?>
</div></td>
				</tr>
				<?php } ?>
			  </table>


			  <table id="tblAgentAcc" class="myStat25" style="display:none" width="100%" border="0" cellspacing="0" cellpadding="0">
				<tr>
				  <td class="tdListHeaders myDbaHeader">User Name</td>
				  <td class="tdListHeaders myAmtHeader"><div align="right">Total #</div></td>
				</tr>
				<?php echo smarty_function_cycle(array('values'=>'even,odd','reset'=>true,'print'=>false),$_smarty_tpl);?>

				<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['topAgentAcc']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
				<tr class="<?php echo smarty_function_cycle(array('values'=>'even,odd'),$_smarty_tpl);?>
" >
				  <td><div class="myDbaCell"><?php echo $_smarty_tpl->tpl_vars['item']->value['UserName'];?>
</div></td>
				  <td><div class="myAmtCell"><?php echo smarty_modifier_money($_smarty_tpl->tpl_vars['item']->value['cnt'],0);?>
</div></td>
				</tr>
				<?php } ?>
			  </table>

			  <table id="tblAgentRes" class="myStat25" style="display:none" width="100%" border="0" cellspacing="0" cellpadding="0">
				<tr>
				  <td class="tdListHeaders myDbaHeader">User Name</td>
				  <td class="tdListHeaders myAmtHeader"><div align="right">Amount $</div></td>
				</tr>
				<?php echo smarty_function_cycle(array('values'=>'even,odd','reset'=>true,'print'=>false),$_smarty_tpl);?>

				<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['topAgentRes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
				<tr class="<?php echo smarty_function_cycle(array('values'=>'even,odd'),$_smarty_tpl);?>
" >
				  <td><div class="myDbaCell"><?php echo smarty_modifier_ucwords($_smarty_tpl->tpl_vars['item']->value['UserName']);?>
</div></td>
				  <td><div class="myAmtCell"><?php echo smarty_modifier_money($_smarty_tpl->tpl_vars['item']->value['amount'],2);?>
</div></td>
				</tr>
				<?php } ?>
			  </table>

			  <table id="tblAgentCom" class="myStat25" style="display:none" width="100%" border="0" cellspacing="0" cellpadding="0">
				<tr>
				  <td class="tdListHeaders myDbaHeader">User Name</td>
				  <td class="tdListHeaders myAmtHeader"><div align="right">Comm $</div></td>
				</tr>
				<?php echo smarty_function_cycle(array('values'=>'even,odd','reset'=>true,'print'=>false),$_smarty_tpl);?>

				<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['topAgentCom']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
				<tr class="<?php echo smarty_function_cycle(array('values'=>'even,odd'),$_smarty_tpl);?>
" >
				  <td><div class="myDbaCell"><?php echo smarty_modifier_ucwords($_smarty_tpl->tpl_vars['item']->value['UserName']);?>
</div></td>
				  <td><div class="myAmtCell"><?php echo smarty_modifier_money($_smarty_tpl->tpl_vars['item']->value['amount'],2);?>
</div></td>
				</tr>
				<?php } ?>
			  </table>

		  </td>
		  </tr>
        
    </table>
	<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_mybox(array('node'=>'HOME-top25Agent','title'=>'Top 25  Sales Agents','class'=>'box-three box-2 box-green'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }?>

<?php if (permitted('HOME-top25MCA')) {?>
	<?php $_smarty_tpl->smarty->_tag_stack[] = array('mybox', array('node'=>'HOME-top25MCA','title'=>'Top 25 MCA Accounts','class'=>'box-three box-3 box-green')); $_block_repeat=true; echo smarty_block_mybox(array('node'=>'HOME-top25MCA','title'=>'Top 25 MCA Accounts','class'=>'box-three box-3 box-green'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

	<table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td class="tdListHeaders" align="center">
		  <select style="width:195px" onchange="statAppChange()" name="statMca">
		  <option value="Amount" selected>by Funding Amount $</option>
		  <option value="Bal" >by Balance $</option>
		  <option value="Prof" >by Profit $</option>
		  </select>		  </td>
          </tr>
		  <tr>
		  <td>
			  <table id="tblMcaAmount" class="myStat25" width="100%" border="0" cellspacing="0" cellpadding="0">
				<tr>
				  <td class="tdListHeaders myDbaHeader">Merchant Name</td>
				  <td class="tdListHeaders myAmtHeader"><div align="right">Total $</div></td>
				</tr>
				<?php echo smarty_function_cycle(array('values'=>'even,odd','reset'=>true,'print'=>false),$_smarty_tpl);?>

				<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['topMcaAmount']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
				<tr class="<?php echo smarty_function_cycle(array('values'=>'even,odd'),$_smarty_tpl);?>
" >
				  <td><div class="myDbaCell"><?php echo smarty_modifier_ucwords($_smarty_tpl->tpl_vars['item']->value['BusinessName']);?>
</div></td>
				  <td><div class="myAmtCell"><?php echo smarty_modifier_money($_smarty_tpl->tpl_vars['item']->value['amount'],2);?>
</div></td>
				</tr>
				<?php } ?>
			  </table>

			  <table id="tblMcaBal" class="myStat25" style="display:none" width="100%" border="0" cellspacing="0" cellpadding="0">
				<tr>
				  <td class="tdListHeaders myDbaHeader">Merchant Name</td>
				  <td class="tdListHeaders myAmtHeader"><div align="right">Balance $</div></td>
				</tr>
				<?php echo smarty_function_cycle(array('values'=>'even,odd','reset'=>true,'print'=>false),$_smarty_tpl);?>

				<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['topMcaBal']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
				<tr class="<?php echo smarty_function_cycle(array('values'=>'even,odd'),$_smarty_tpl);?>
" >
				  <td><div class="myDbaCell"><?php echo smarty_modifier_ucwords($_smarty_tpl->tpl_vars['item']->value['BusinessName']);?>
</div></td>
				  <td><div class="myAmtCell"><?php echo smarty_modifier_money($_smarty_tpl->tpl_vars['item']->value['bal'],2);?>
</div></td>
				</tr>
				<?php } ?>
			  </table>

			  <table id="tblMcaProf" class="myStat25" style="display:none" width="100%" border="0" cellspacing="0" cellpadding="0">
				<tr>
				  <td class="tdListHeaders myDbaHeader">Merchant Name</td>
				  <td class="tdListHeaders myAmtHeader"><div align="right">Amount $</div></td>
				</tr>
				<?php echo smarty_function_cycle(array('values'=>'even,odd','reset'=>true,'print'=>false),$_smarty_tpl);?>

				<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['topMcaProf']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
				<tr class="<?php echo smarty_function_cycle(array('values'=>'even,odd'),$_smarty_tpl);?>
" >
				  <td><div class="myDbaCell"><?php echo smarty_modifier_ucwords($_smarty_tpl->tpl_vars['item']->value['BusinessName']);?>
</div></td>
				  <td><div class="myAmtCell"><?php echo smarty_modifier_money($_smarty_tpl->tpl_vars['item']->value['profit'],2);?>
</div></td>
				</tr>
				<?php } ?>
			  </table>

		  </td>
		  </tr>
        
      </table>
	<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_mybox(array('node'=>'HOME-top25MCA','title'=>'Top 25 MCA Accounts','class'=>'box-three box-3 box-green'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }?>  








<?php if (permitted('HOME-top10Teamleader')) {?>
	<?php $_smarty_tpl->smarty->_tag_stack[] = array('mybox', array('node'=>'HOME-top10Teamleader','title'=>'Top 10 Team Leaders','class'=>'box-three box-1 box-red')); $_block_repeat=true; echo smarty_block_mybox(array('node'=>'HOME-top10Teamleader','title'=>'Top 10 Team Leaders','class'=>'box-three box-1 box-red'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

	  <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td class="tdListHeaders" align="center">
		  <select style="width:195px" onchange="statAppChange()" name="statTeamleader">
		  <option value="Lead" selected>by Leads</option>
		  <option value="Appt" >by Appointments</option>
		  <option value="Sold" >by Sold Leads</option>
		  </select>		  </td>
          </tr>
		  <tr>
		  <td>

			  <table id="tblTeamleaderLead" class="myStat25" width="100%" border="0" cellspacing="0" cellpadding="0">
				<tr>
				  <td class="tdListHeaders myDbaHeader">User Name</td>
				  <td class="tdListHeaders myAmtHeader"><div align="right">Total #</div></td>
				</tr>
				<?php echo smarty_function_cycle(array('values'=>'even,odd','reset'=>true,'print'=>false),$_smarty_tpl);?>

				<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['topTeamleaderLead']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
				<tr class="<?php echo smarty_function_cycle(array('values'=>'even,odd'),$_smarty_tpl);?>
" >
				  <td><div class="myDbaCell"><?php echo $_smarty_tpl->tpl_vars['item']->value['UserName'];?>
</div></td>
				  <td><div class="myAmtCell"><?php echo smarty_modifier_money($_smarty_tpl->tpl_vars['item']->value['cnt'],0);?>
</div></td>
				</tr>
				<?php } ?>
			  </table>


			  <table id="tblTeamleaderAppt" class="myStat25" style="display:none" width="100%" border="0" cellspacing="0" cellpadding="0">
				<tr>
				  <td class="tdListHeaders myDbaHeader">User Name</td>
				  <td class="tdListHeaders myAmtHeader"><div align="right">Total #</div></td>
				</tr>
				<?php echo smarty_function_cycle(array('values'=>'even,odd','reset'=>true,'print'=>false),$_smarty_tpl);?>

				<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['topTeamleaderAppt']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
				<tr class="<?php echo smarty_function_cycle(array('values'=>'even,odd'),$_smarty_tpl);?>
" >
				  <td><div class="myDbaCell"><?php echo $_smarty_tpl->tpl_vars['item']->value['UserName'];?>
</div></td>
				  <td><div class="myAmtCell"><?php echo smarty_modifier_money($_smarty_tpl->tpl_vars['item']->value['cnt'],0);?>
</div></td>
				</tr>
				<?php } ?>
			  </table>

			  <table id="tblTeamleaderSold" class="myStat25" style="display:none" width="100%" border="0" cellspacing="0" cellpadding="0">
				<tr>
				  <td class="tdListHeaders myDbaHeader">User Name</td>
				  <td class="tdListHeaders myAmtHeader"><div align="right">Total #</div></td>
				</tr>
				<?php echo smarty_function_cycle(array('values'=>'even,odd','reset'=>true,'print'=>false),$_smarty_tpl);?>

				<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['topTeamleaderSold']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
				<tr class="<?php echo smarty_function_cycle(array('values'=>'even,odd'),$_smarty_tpl);?>
" >
				  <td><div class="myDbaCell"><?php echo smarty_modifier_ucwords($_smarty_tpl->tpl_vars['item']->value['UserName']);?>
</div></td>
				  <td><div class="myAmtCell"><?php echo smarty_modifier_money($_smarty_tpl->tpl_vars['item']->value['cnt'],0);?>
</div></td>
				</tr>
				<?php } ?>
			  </table>

		  </td>
		  </tr>
        
      </table>
	<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_mybox(array('node'=>'HOME-top10Teamleader','title'=>'Top 10 Team Leaders','class'=>'box-three box-1 box-red'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }?>



<?php if (permitted('HOME-top10Tm')) {?>
	<?php $_smarty_tpl->smarty->_tag_stack[] = array('mybox', array('node'=>'HOME-top10Tm','title'=>'Top 10 Telemarketers','class'=>'box-three box-2 top10box box-red')); $_block_repeat=true; echo smarty_block_mybox(array('node'=>'HOME-top10Tm','title'=>'Top 10 Telemarketers','class'=>'box-three box-2 top10box box-red'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

	  <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td class="tdListHeaders" align="center">
		  <select style="width:195px" onchange="statAppChange()" name="statTm">
		  <option value="Lead" selected>by Leads</option>
		  <option value="Appt" >by Appointments</option>
		  <option value="Sold" >by Sold Leads</option>
		  </select>		  </td>
          </tr>
		  <tr>
		  <td>

			  <table id="tblTmLead" class="myStat25" width="100%" border="0" cellspacing="0" cellpadding="0">
				<tr>
				  <td class="tdListHeaders myDbaHeader">User Name</td>
				  <td class="tdListHeaders myAmtHeader"><div align="right">Total #</div></td>
				</tr>
				<?php echo smarty_function_cycle(array('values'=>'even,odd','reset'=>true,'print'=>false),$_smarty_tpl);?>

				<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['topTmLead']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
				<tr class="<?php echo smarty_function_cycle(array('values'=>'even,odd'),$_smarty_tpl);?>
" >
				  <td><div class="myDbaCell"><?php echo $_smarty_tpl->tpl_vars['item']->value['UserName'];?>
</div></td>
				  <td><div class="myAmtCell"><?php echo smarty_modifier_money($_smarty_tpl->tpl_vars['item']->value['cnt'],0);?>
</div></td>
				</tr>
				<?php } ?>
			  </table>


			  <table id="tblTmAppt" class="myStat25" style="display:none" width="100%" border="0" cellspacing="0" cellpadding="0">
				<tr>
				  <td class="tdListHeaders myDbaHeader">User Name</td>
				  <td class="tdListHeaders myAmtHeader"><div align="right">Total #</div></td>
				</tr>
				<?php echo smarty_function_cycle(array('values'=>'even,odd','reset'=>true,'print'=>false),$_smarty_tpl);?>

				<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['topTmAppt']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
				<tr class="<?php echo smarty_function_cycle(array('values'=>'even,odd'),$_smarty_tpl);?>
" >
				  <td><div class="myDbaCell"><?php echo $_smarty_tpl->tpl_vars['item']->value['UserName'];?>
</div></td>
				  <td><div class="myAmtCell"><?php echo smarty_modifier_money($_smarty_tpl->tpl_vars['item']->value['cnt'],0);?>
</div></td>
				</tr>
				<?php } ?>
			  </table>

			  <table id="tblTmSold" class="myStat25" style="display:none" width="100%" border="0" cellspacing="0" cellpadding="0">
				<tr>
				  <td class="tdListHeaders myDbaHeader">User Name</td>
				  <td class="tdListHeaders myAmtHeader"><div align="right">Total #</div></td>
				</tr>
				<?php echo smarty_function_cycle(array('values'=>'even,odd','reset'=>true,'print'=>false),$_smarty_tpl);?>

				<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['topTmSold']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
				<tr class="<?php echo smarty_function_cycle(array('values'=>'even,odd'),$_smarty_tpl);?>
" >
				  <td><div class="myDbaCell"><?php echo smarty_modifier_ucwords($_smarty_tpl->tpl_vars['item']->value['UserName']);?>
</div></td>
				  <td><div class="myAmtCell"><?php echo smarty_modifier_money($_smarty_tpl->tpl_vars['item']->value['cnt'],0);?>
</div></td>
				</tr>
				<?php } ?>
			  </table>

		  </td>
		  </tr>
        
      </table>
	<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_mybox(array('node'=>'HOME-top10Tm','title'=>'Top 10 Telemarketers','class'=>'box-three box-2 top10box box-red'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }?>


<?php if (permitted('HOME-top10Leadcloser')) {?>
	<?php $_smarty_tpl->smarty->_tag_stack[] = array('mybox', array('node'=>'HOME-top10Leadcloser','title'=>'Top 10 Lead Closers','class'=>'box-three box-3 top10box box-red')); $_block_repeat=true; echo smarty_block_mybox(array('node'=>'HOME-top10Leadcloser','title'=>'Top 10 Lead Closers','class'=>'box-three box-3 top10box box-red'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

	  <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td class="tdListHeaders" align="center">
		  <select style="width:195px" onchange="statAppChange()" name="statLeadcloser">
		  <option value="Lead" selected>by Leads</option>
		  <option value="Appt" >by Appointments</option>
		  <option value="Sold" >by Sold Leads</option>
		  </select>		  </td>
          </tr>
		  <tr>
		  <td>

			  <table id="tblLeadcloserLead" class="myStat25" width="100%" border="0" cellspacing="0" cellpadding="0">
				<tr>
				  <td class="tdListHeaders myDbaHeader">User Name</td>
				  <td class="tdListHeaders myAmtHeader"><div align="right">Total #</div></td>
				</tr>
				<?php echo smarty_function_cycle(array('values'=>'even,odd','reset'=>true,'print'=>false),$_smarty_tpl);?>

				<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['topLeadcloserLead']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
				<tr class="<?php echo smarty_function_cycle(array('values'=>'even,odd'),$_smarty_tpl);?>
" >
				  <td><div class="myDbaCell"><?php echo $_smarty_tpl->tpl_vars['item']->value['UserName'];?>
</div></td>
				  <td><div class="myAmtCell"><?php echo smarty_modifier_money($_smarty_tpl->tpl_vars['item']->value['cnt'],0);?>
</div></td>
				</tr>
				<?php } ?>
			  </table>


			  <table id="tblLeadcloserAppt" class="myStat25" style="display:none" width="100%" border="0" cellspacing="0" cellpadding="0">
				<tr>
				  <td class="tdListHeaders myDbaHeader">User Name</td>
				  <td class="tdListHeaders myAmtHeader"><div align="right">Total #</div></td>
				</tr>
				<?php echo smarty_function_cycle(array('values'=>'even,odd','reset'=>true,'print'=>false),$_smarty_tpl);?>

				<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['topLeadcloserAppt']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
				<tr class="<?php echo smarty_function_cycle(array('values'=>'even,odd'),$_smarty_tpl);?>
" >
				  <td><div class="myDbaCell"><?php echo $_smarty_tpl->tpl_vars['item']->value['UserName'];?>
</div></td>
				  <td><div class="myAmtCell"><?php echo smarty_modifier_money($_smarty_tpl->tpl_vars['item']->value['cnt'],0);?>
</div></td>
				</tr>
				<?php } ?>
			  </table>

			  <table id="tblLeadcloserSold" class="myStat25" style="display:none" width="100%" border="0" cellspacing="0" cellpadding="0">
				<tr>
				  <td class="tdListHeaders myDbaHeader">User Name</td>
				  <td class="tdListHeaders myAmtHeader"><div align="right">Total #</div></td>
				</tr>
				<?php echo smarty_function_cycle(array('values'=>'even,odd','reset'=>true,'print'=>false),$_smarty_tpl);?>

				<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['topLeadcloserSold']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
				<tr class="<?php echo smarty_function_cycle(array('values'=>'even,odd'),$_smarty_tpl);?>
" >
				  <td><div class="myDbaCell"><?php echo smarty_modifier_ucwords($_smarty_tpl->tpl_vars['item']->value['UserName']);?>
</div></td>
				  <td><div class="myAmtCell"><?php echo smarty_modifier_money($_smarty_tpl->tpl_vars['item']->value['cnt'],0);?>
</div></td>
				</tr>
				<?php } ?>
			  </table>

		  </td>
		  </tr>
        
      </table>
	<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_mybox(array('node'=>'HOME-top10Leadcloser','title'=>'Top 10 Lead Closers','class'=>'box-three box-3 top10box box-red'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }?>






<?php if (permitted('HOME-NewMerchBoard')) {?>
	<?php $_smarty_tpl->smarty->_tag_stack[] = array('mybox', array('node'=>'HOME-NewMerchBoard','title'=>'New Merchant Boarding & Underwriting Statistics','class'=>'box-one box-yellow')); $_block_repeat=true; echo smarty_block_mybox(array('node'=>'HOME-NewMerchBoard','title'=>'New Merchant Boarding & Underwriting Statistics','class'=>'box-one box-yellow'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<table  width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td class="tdListHeaders">&nbsp;</td>
          <td align="right" class="tdListHeaders quickStatCell"><strong>Today</strong></td>
          <td align="right" class="tdListHeaders quickStatCell"><strong>MTD</strong></td>
          <td align="right" class="tdListHeaders quickStatCell"><strong>Last Month </strong></td>
          <td align="right" class="tdListHeaders quickStatCell"><strong>YTD</strong></td>
          <td align="right" class="tdListHeaders quickStatCell"><strong>Last Year </strong></td>
          <td align="right" class="tdListHeaders quickStatCell"><strong>Life Time </strong></td>
        </tr>
<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['statList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
        <tr class="trOut">
          <td align="left" class="tdValueColumn "><?php echo $_smarty_tpl->tpl_vars['item']->value['statusTitle'];?>
</td>
          <td class="tdValueColumn quickStatCell"><div align="right"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['item']->value['cntToday'])===null||$tmp==='' ? 0 : $tmp);?>
</div></td>
          <td class="tdValueColumn quickStatCell"><div align="right"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['item']->value['cntMTD'])===null||$tmp==='' ? 0 : $tmp);?>
</div></td>
          <td class="tdValueColumn quickStatCell"><div align="right"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['item']->value['cntLastMonth'])===null||$tmp==='' ? 0 : $tmp);?>
</div></td>
          <td class="tdValueColumn quickStatCell"><div align="right"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['item']->value['cntYTD'])===null||$tmp==='' ? 0 : $tmp);?>
</div></td>
          <td class="tdValueColumn quickStatCell"><div align="right"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['item']->value['cntLastYear'])===null||$tmp==='' ? 0 : $tmp);?>
</div></td>
          <td class="tdValueColumn quickStatCell"><div align="right"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['item']->value['cntALL'])===null||$tmp==='' ? 0 : $tmp);?>
</div></td>
        </tr>
<?php } ?>        
      </table>			
	<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_mybox(array('node'=>'HOME-NewMerchBoard','title'=>'New Merchant Boarding & Underwriting Statistics','class'=>'box-one box-yellow'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }?>


<?php if (permitted('HOME-ApprovedMerch')) {?>
	<?php $_smarty_tpl->smarty->_tag_stack[] = array('mybox', array('node'=>'HOME-ApprovedMerch','title'=>'Approved Merchants - Bonuses, Commissions, & Lease Funding','class'=>'box-one box-green')); $_block_repeat=true; echo smarty_block_mybox(array('node'=>'HOME-ApprovedMerch','title'=>'Approved Merchants - Bonuses, Commissions, & Lease Funding','class'=>'box-one box-green'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<table  width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td class="tdListHeaders">&nbsp;</td>
                <td align="right" class="tdListHeaders quickStatCell"><strong>Today</strong></td>
                <td align="right" class="tdListHeaders quickStatCell"><strong>MTD</strong></td>
                <td align="right" class="tdListHeaders quickStatCell"><strong>Last Month </strong></td>
                <td align="right" class="tdListHeaders quickStatCell"><strong>YTD</strong></td>
                <td align="right" class="tdListHeaders quickStatCell"><strong>Last Year </strong></td>
                <td align="right" class="tdListHeaders quickStatCell"><strong>Life Time </strong></td>
              </tr>
            <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['statProfList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
            <tr class="trOut">
              <td align="left" class="tdValueColumn "><?php echo $_smarty_tpl->tpl_vars['item']->value['statusTitle'];?>
</td>
              <td class="tdValueColumn quickStatCell"><div align="right"><?php echo smarty_modifier_money($_smarty_tpl->tpl_vars['item']->value['cntToday']);?>
</div></td>
              <td class="tdValueColumn quickStatCell"><div align="right"><?php echo smarty_modifier_money($_smarty_tpl->tpl_vars['item']->value['cntMTD']);?>
</div></td>
              <td class="tdValueColumn quickStatCell"><div align="right"><?php echo smarty_modifier_money($_smarty_tpl->tpl_vars['item']->value['cntLastMonth']);?>
</div></td>
              <td class="tdValueColumn quickStatCell"><div align="right"><?php echo smarty_modifier_money($_smarty_tpl->tpl_vars['item']->value['cntYTD']);?>
</div></td>
              <td class="tdValueColumn quickStatCell"><div align="right"><?php echo smarty_modifier_money($_smarty_tpl->tpl_vars['item']->value['cntLastYear']);?>
</div></td>
              <td class="tdValueColumn quickStatCell"><div align="right"><?php echo smarty_modifier_money($_smarty_tpl->tpl_vars['item']->value['cntALL']);?>
</div></td>
            </tr>
            <?php } ?>
          </table>
	<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_mybox(array('node'=>'HOME-ApprovedMerch','title'=>'Approved Merchants - Bonuses, Commissions, & Lease Funding','class'=>'box-one box-green'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }?>




<?php if ($_smarty_tpl->tpl_vars['trafficEmbedUrl']->value) {?>
	<?php $_smarty_tpl->smarty->_tag_stack[] = array('mybox', array('node'=>'test','title'=>"Daily Traffic Map Report for ".((string)$_smarty_tpl->tpl_vars['trafficEmbedCity']->value).", ".((string)$_smarty_tpl->tpl_vars['trafficEmbedState']->value),'class'=>'box-one box-red')); $_block_repeat=true; echo smarty_block_mybox(array('node'=>'test','title'=>"Daily Traffic Map Report for ".((string)$_smarty_tpl->tpl_vars['trafficEmbedCity']->value).", ".((string)$_smarty_tpl->tpl_vars['trafficEmbedState']->value),'class'=>'box-one box-red'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

	<iframe style="height: 500px; width: 100%;" src="<?php echo $_smarty_tpl->tpl_vars['trafficEmbedUrl']->value;?>
" marginwidth="0" marginheight="0" frameborder="0" scrolling="no"></iframe>		
	<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_mybox(array('node'=>'test','title'=>"Daily Traffic Map Report for ".((string)$_smarty_tpl->tpl_vars['trafficEmbedCity']->value).", ".((string)$_smarty_tpl->tpl_vars['trafficEmbedState']->value),'class'=>'box-one box-red'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }?>




<?php  $_smarty_tpl->tpl_vars['section'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['section']->_loop = false;
 $_smarty_tpl->tpl_vars['sec_code'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['sections']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['section']->key => $_smarty_tpl->tpl_vars['section']->value) {
$_smarty_tpl->tpl_vars['section']->_loop = true;
 $_smarty_tpl->tpl_vars['sec_code']->value = $_smarty_tpl->tpl_vars['section']->key;
?>
	<?php $_smarty_tpl->smarty->_tag_stack[] = array('mybox', array('node'=>"HOME-Icons-".((string)$_smarty_tpl->tpl_vars['sec_code']->value),'title'=>$_smarty_tpl->tpl_vars['section']->value['title'],'class'=>'box-one box-green')); $_block_repeat=true; echo smarty_block_mybox(array('node'=>"HOME-Icons-".((string)$_smarty_tpl->tpl_vars['sec_code']->value),'title'=>$_smarty_tpl->tpl_vars['section']->value['title'],'class'=>'box-one box-green'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<table class="tblIcons" border="0" cellspacing="0" cellpadding="0" width="100%">
    <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['section']->value['items3']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
    <tr> 
	  <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['row']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
      <td><?php if ($_smarty_tpl->tpl_vars['item']->value['img']) {?>
          <div class="myicon_home"><a href="javascript:;" onclick="window.location.href='<?php echo $_smarty_tpl->tpl_vars['item']->value['url'];?>
'"><img border="0" src="<?php echo $_smarty_tpl->tpl_vars['item']->value['img'];?>
" />
          <div class="title"><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</div>
          </a></div>
        <?php }?>	  </td>
      <?php } ?>	  </tr>
    <?php } ?>
  </table>

	<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_mybox(array('node'=>"HOME-Icons-".((string)$_smarty_tpl->tpl_vars['sec_code']->value),'title'=>$_smarty_tpl->tpl_vars['section']->value['title'],'class'=>'box-one box-green'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php } ?>  






<?php if ($_smarty_tpl->tpl_vars['leadstorelocatorCode']->value) {?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('mybox', array('node'=>"home_storelocator",'title'=>"Store Locator by Zip Code",'class'=>"box-one box-blue")); $_block_repeat=true; echo smarty_block_mybox(array('node'=>"home_storelocator",'title'=>"Store Locator by Zip Code",'class'=>"box-one box-blue"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

	<iframe scrolling="no" style='text-align:center;padding:4px;width:100%;height:50px;' frameborder="0" src="/linkcodes.php?cmd=leadstorelocatorCode"
                      OnLoad="var h=this.contentWindow.document.body.scrollHeight+0;this.style.height=h+'px'"></iframe>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_mybox(array('node'=>"home_storelocator",'title'=>"Store Locator by Zip Code",'class'=>"box-one box-blue"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
  
<?php }?>



<?php if (permitted('HOME-TopNews')) {?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('mybox', array('node'=>"home_toparticles",'title'=>"Most Recent News Articles",'class'=>"box-one box-gray")); $_block_repeat=true; echo smarty_block_mybox(array('node'=>"home_toparticles",'title'=>"Most Recent News Articles",'class'=>"box-one box-gray"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

	<?php echo smarty_function_js_include(array('src'=>'/css/articles.css'),$_smarty_tpl);?>

<div class="articles-page">
    <div class="container clearfix">
        <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['articles']->value['list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
            <div class="vid-box <?php echo $_smarty_tpl->tpl_vars['item']->value['color'];?>
" onclick="myRedirect('<?php echo $_smarty_tpl->tpl_vars['item']->value['url'];?>
')">
                <div class="vid">
                    <?php if ($_smarty_tpl->tpl_vars['item']->value['img']) {?>
                    <img border="0" order="0" widthX="200" heightX="170" src="<?php echo $_smarty_tpl->tpl_vars['item']->value['img'];?>
" />
                    <?php }?>
                </div>
                
                <div class="info">
                    <div class="title"><?php echo smarty_modifier_truncate(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['item']->value['news']),100);?>
</div>
                    <div class="cntviews"> 
                 Article #<?php echo $_smarty_tpl->tpl_vars['item']->value['news_id'];?>
 </div>
                    <div class="date"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['item']->value['post_date'],"%m/%d/%Y %H:%M %p");?>
</div>
                </div>
            </div>            
        <?php } ?>    
    </div>
</div>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_mybox(array('node'=>"home_toparticles",'title'=>"Most Recent News Articles",'class'=>"box-one box-gray"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
  
<?php }?>



<?php if (permitted('HOME-TopVideos')) {?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('mybox', array('node'=>"home_toptrainvideo",'title'=>"Most Recent Training Videos",'class'=>"box-one box-gray")); $_block_repeat=true; echo smarty_block_mybox(array('node'=>"home_toptrainvideo",'title'=>"Most Recent Training Videos",'class'=>"box-one box-gray"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

	<?php echo smarty_function_js_include(array('src'=>'/css/trainingvideo.css'),$_smarty_tpl);?>

<div class="training-vid">
    <div class="container">
        <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['TrainingVideos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
            <div class="vid-box <?php echo $_smarty_tpl->tpl_vars['item']->value['color'];?>
" onclick="myRedirect('<?php echo $_smarty_tpl->tpl_vars['item']->value['link'];?>
')">
                <div class="vid">
                    <img src="http://i1.ytimg.com/vi/<?php echo $_smarty_tpl->tpl_vars['item']->value['youtube_code'];?>
/default.jpg" width="120" height="90" border="0"/>
                </div>
                
                <div class="info">
                    <div class="title"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</div>
                    <div class="cntviews"><?php echo smarty_modifier_money($_smarty_tpl->tpl_vars['item']->value['cntViews'],0);?>
 views</div>
                    <div class="date"><?php echo smarty_modifier_date($_smarty_tpl->tpl_vars['item']->value['time_created'],'datetime');?>
</div>
                </div>
            </div>            
        <?php } ?>    
    </div>
</div>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_mybox(array('node'=>"home_toptrainvideo",'title'=>"Most Recent Training Videos",'class'=>"box-one box-gray"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }?>


</div>







<?php echo '<script'; ?>
 language="javascript">


mybox_sortableInit('.mySortable.HomePage');

<?php echo '</script'; ?>
>




<?php echo $_smarty_tpl->tpl_vars['speakpipeCode']->value;?>

<?php echo $_smarty_tpl->tpl_vars['olarkCode']->value;?>

<?php echo $_smarty_tpl->tpl_vars['phpliveCode']->value;?>




<?php }} ?>
