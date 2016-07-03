<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-07-03 02:55:23
         compiled from "/homepages/37/d619410358/htdocs/developer/template/status/mca_report.html" */ ?>
<?php /*%%SmartyHeaderCode:473430025778b60fc21859-94330711%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '25b7e41fed58047d84de9d3e571c8144d6c7474f' => 
    array (
      0 => '/homepages/37/d619410358/htdocs/developer/template/status/mca_report.html',
      1 => 1467528922,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '473430025778b60fc21859-94330711',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5778b60fce8eb1_02009448',
  'variables' => 
  array (
    'url_data' => 0,
    'index_cl' => 0,
    'SEC_1' => 0,
    'SEC_2' => 0,
    'SEC_3' => 0,
    'SEC_4' => 0,
    'allcol' => 0,
    'checklist' => 0,
    'item' => 0,
    'list' => 0,
    'checkListItem' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5778b60fce8eb1_02009448')) {function content_5778b60fce8eb1_02009448($_smarty_tpl) {?><?php if (!is_callable('smarty_function_js_data')) include '/homepages/37/d619410358/htdocs/developer/ext/smarty3/plugins/function.js_data.php';
if (!is_callable('smarty_modifier_date_format')) include '/homepages/37/d619410358/htdocs/developer/ext/smarty3/plugins/modifier.date_format.php';
if (!is_callable('smarty_modifier_money')) include '/homepages/37/d619410358/htdocs/developer/ext/smarty3/plugins/modifier.money.php';
?><!--in production
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/s/dt/pdfmake-0.1.18,dt-1.10.10,b-1.1.0,b-colvis-1.1.0,b-flash-1.1.0,b-html5-1.1.0,b-print-1.1.0,cr-1.3.0,r-2.0.0/datatables.min.css"/>
 
<?php echo '<script'; ?>
 type="text/javascript" src="https://cdn.datatables.net/s/dt/pdfmake-0.1.18,dt-1.10.10,b-1.1.0,b-colvis-1.1.0,b-flash-1.1.0,b-html5-1.1.0,b-print-1.1.0,cr-1.3.0,r-2.0.0/datatables.min.js"><?php echo '</script'; ?>
>
-->


<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/s/dt/pdfmake-0.1.18,dt-1.10.10,b-1.1.0,b-colvis-1.1.0,b-flash-1.1.0,b-html5-1.1.0,b-print-1.1.0,cr-1.3.0,r-2.0.0/datatables.css"/>


<?php echo '<script'; ?>
 type="text/javascript" src="https://cdn.datatables.net/s/dt/pdfmake-0.1.18,dt-1.10.10,b-1.1.0,b-colvis-1.1.0,b-flash-1.1.0,b-html5-1.1.0,b-print-1.1.0,cr-1.3.0,r-2.0.0/datatables.js"><?php echo '</script'; ?>
>
<?php echo smarty_function_js_data(array('url_data'=>$_smarty_tpl->tpl_vars['url_data']->value),$_smarty_tpl);?>

<style>

div.dt-button-collection a.dt-button.active:not(.disabled) {
    background-color: #B74949;
    background-image: -webkit-linear-gradient(top, #7489D6 0%, #dadada 100%);
	}
.dataTables_wrapper .dataTables_filter {
    position: absolute;
    left: 400px;
	float: left;
	margin-left:20px;
	margin-top: 15px;
}
a.dt-button.buttons-collection {
    margin-left: 10px;
    margin-top: 10px;
	margin-buttom: 10px;
    margin-right: 10px;
}
a.dt-button.buttons-collection.buttons-colvis.checklist-btn {
    margin: inherit;
    border: blue;
	visibility: hidden;
}
.dt-button-collection.fixed.two-column.columns-delete::before {
    content: "choose format file you do want to export";
}
.dt-button-collection::before {
    content: "Delete columns you don't want to export";
}
.dt-button-collection.sec-checklist::before {
    content: "select checklist section ";
}
/*#example_paginate {
    position: relative;
    right: 94%;
}*/
</style>

<?php echo '<script'; ?>
  type="text/javascript">



$(document).ready(function() {

	var url=url_data;//"&owner_uid=1&lender_uid=&FundingType=&status=&date1=&date2=";
	
	var i=0;
    var colVisArr =i;
	for (i+1; i<=40; i++){
	 colVisArr=colVisArr+","+i;
	 icolVisArr=i;
	}

	//var j=<?php echo $_smarty_tpl->tpl_vars['index_cl']->value;?>
;
	var checklistColVisArr1 =icolVisArr+1;
	for (icolVisArr; i<=(icolVisArr+<?php echo $_smarty_tpl->tpl_vars['SEC_1']->value;?>
); i++){
	 checklistColVisArr1=checklistColVisArr1+","+i;
	 ichecklistColVisArr1=i;
	}
	
	var checklistColVisArr2 =ichecklistColVisArr1+1;
	for (ichecklistColVisArr1; i<=(ichecklistColVisArr1+<?php echo $_smarty_tpl->tpl_vars['SEC_2']->value;?>
); i++){
	 checklistColVisArr2=checklistColVisArr2+","+i;
	 ichecklistColVisArr2=i;
	}
	var checklistColVisArr3 =ichecklistColVisArr2+1;
	for (ichecklistColVisArr2; i<=(ichecklistColVisArr2+<?php echo $_smarty_tpl->tpl_vars['SEC_3']->value;?>
); i++){
	 checklistColVisArr3=checklistColVisArr3+","+i;
	 ichecklistColVisArr3=i;
	}
	var checklistColVisArr4 =ichecklistColVisArr3+1;
	for (ichecklistColVisArr3; i<=(ichecklistColVisArr3+<?php echo $_smarty_tpl->tpl_vars['SEC_4']->value;?>
); i++){
	 checklistColVisArr4=checklistColVisArr4+","+i;
	 ichecklistColVisArr4=i;
	}

	
    $('#example').DataTable({
		dom: 'Bfrtpli',
		columnDefs: [
            {
                "targets": [ <?php echo $_smarty_tpl->tpl_vars['allcol']->value;?>
 ],
                "visible": false,
                "searchable": false
            }
        ],
		buttons:[
			
			{	
				extend: 'collection',
				collectionLayout: 'sec-checklist',
				text: 'Checklist',
				buttons:[
					{
					text: 'Underwriting Supporting Documents',
					action: function ( e, dt, node, config ) {
                    $(".checklist-btn")[0].click();}
					},
					{
					text: 'Credit Card Processing Switch',
					action: function ( e, dt, node, config ) {
                    $(".checklist-btn")[1].click();}
					},
					{
					text: 'Funding Tasks',
					action: function ( e, dt, node, config ) {
                    $(".checklist-btn")[2].click();}
					},
					{
					text: 'Other Tasks',
					action: function ( e, dt, node, config ) {
                    $(".checklist-btn")[3].click();}
					},
				]
			},
			
			{
				extend:'colvis',
				text: 'select colums',
				collectionLayout: 'fixed three-column ',
				columns: [colVisArr]
			},
			{
				text: 'Export',
                action: function ( e, dt, node, config ) {
                   window.location = "../cashadvance.php?"+url+"&format=export";
				   // window.location ('../cashadvance.php?cmd=cashadv_list&owner_uid=110&lender_uid=&FundingType=&status=&date1=&date2=&cmd=repcolumns&format=export');
                }
			},
			{
				extend:'colvis',
				className: 'checklist-btn',
				text: 'Underwriting Supporting Documents',
				collectionLayout: 'fixed two-column',
				columns: [checklistColVisArr1]
			},
			{
				extend:'colvis',
				className: 'checklist-btn',
				text: 'Credit Card Processing Switch',
				collectionLayout: 'fixed two-column',
				columns: [checklistColVisArr2]
			},
			{
				extend:'colvis',
				text: 'Funding Tasks',
				className: 'checklist-btn',
				collectionLayout: 'fixed three-column',
				columns: [checklistColVisArr3]
			},
			{
				extend:'colvis',
				text: 'Other Tasks',
				className: 'checklist-btn',
				collectionLayout: 'fixed three-column',
				columns: [checklistColVisArr4]
			}
			
			
			
        ]
	});

} );

<?php echo '</script'; ?>
>

<table id="example" class="display" cellspacing="0" width="100%">
       <thead>
			<tr>
				<th> Receive Date </th>
                <th> Approval Date </th>
                <th>Funding Date</th>
                <th>First ACH Withdrawal</th>
                <th>Lead Source</th>
                <th>Status</th>
				<th>Sales Rep</th>
                <th>Lender</th>
				<th>Contract #</th>
                <th>DBA Name</th>
				<th>Address</th>
                <th>City</th>
                <th>State</th>
				<th>Zip Code</th>
                <th>Owner Name 1</th>
				<th>Owner Phone 1</th>
				<th>Owner Address 1</th>
				<th>Owner City 1</th>
				<th>Owner Name 2</th>
				<th>Owner Phone 2</th>
				<th>Owner Address 2</th>
				<th>Owner City 2</th>
                <th>Phone</th>
				<th>Fax</th>
				<th>Email</th>
                <th>Funding Amt Requested</th>
                <th>Payback Amount</th>
				<th>Factor Rate</th>
				<th># ACH Payments</th>
				<th>Bank Name</th>
				<th>Bank Account #</th>
				<th>Routing #</th>
				<th>Commission</th>
				<th>Daily Residual %</th>
				<th>Business Start Date</th>
				<th>Total Monthly Bank Deposits $</th>
				<th>Avg Daily Bank Balance $</th>
				<th>Monthly Avg Credit Card Vol $</th>
				<th>Monthly Avg Credit Card Trans #</th>
				<th>Federal Tax ID #</th>
				<th>Social Security #</th>
				<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['checklist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
				<th><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</th>
				<?php } ?>
			
				</tr>
        </thead>
        <tfoot>
            <tr>
				<th>Receive Date</th>
                <th>Approval Date</th>
                <th>Funding Date</th>
                <th>First ACH Withdrawal</th>
                <th>Lead Source</th>
                <th>Status</th>
				<th>Sales Rep</th>
                <th>Lender</th>
				<th>Contract #</th>
                <th>DBA Name</th>
				<th>Address</th>
                <th>City</th>
                <th>State</th>
				<th>Zip Code</th>
                <th>Owner Name 1</th>
				<th>Owner Phone 1</th>
				<th>Owner Address 1</th>
				<th>Owner City 1</th>
				<th>Owner Name 2</th>
				<th>Owner Phone 2</th>
				<th>Owner Address 2</th>
				<th>Owner City 2</th>
                <th>Phone</th>
				<th>Fax</th>
				<th>Email</th>
                <th>Funding Amt Requested</th>
                <th>Payback Amount</th>
				<th>Factor Rate</th>
				<th># ACH Payments</th>
				<th>Bank Name</th>
				<th>Bank Account #</th>
				<th>Routing #</th>
				<th>Commission</th>
				<th>Daily Residual %</th>
				<th>Business Start Date</th>
				<th>Total Monthly Bank Deposits $</th>
				<th>Avg Daily Bank Balance $</th>
				<th>Monthly Avg Credit Card Vol $</th>
				<th>Monthly Avg Credit Card Trans #</th>
				<th>Federal Tax ID #</th>
				<th>Social Security #</th>
				<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['checklist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
				<th><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</th>
				<?php } ?>
			

			</tr>
        </tfoot>
        	<tbody>
		<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
			<tr>
				<td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['item']->value['Receive Date'],'%b %d, %Y');?>
</td>
                <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['item']->value['Approval Date'],'%b %d, %Y');?>
</td>
                <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['item']->value['Funding Date'],'%b %d, %Y');?>
</td>
				<td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['item']->value['First ACH Withdrawal'],'%b %d, %Y');?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['item']->value['LeadSource'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['item']->value['Status'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['item']->value['Sales Rep'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['item']->value['Lender'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['item']->value['cashadv_idStr'];?>
</td><!--cashadv_idStr; title:contract-->
                <td><a href="/cashadvance.php?cmd=cashadv_edit&app_id=<?php echo $_smarty_tpl->tpl_vars['item']->value['app_id'];?>
&cashadv_id=<?php echo $_smarty_tpl->tpl_vars['item']->value['cashadv_idStr'];?>
&tab=dba"><?php echo $_smarty_tpl->tpl_vars['item']->value['DBA Name'];?>
</a></td>
                <td><?php echo $_smarty_tpl->tpl_vars['item']->value['Address'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['item']->value['City'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['item']->value['State'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['item']->value['Zip Code'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['item']->value['Owner Name 1'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['item']->value['Owner Phone 1'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['item']->value['Owner Address 1'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['item']->value['Owner City 1'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['item']->value['Owner Name 2'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['item']->value['Owner Phone 2'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['item']->value['Owner Address 2'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['item']->value['Owner City 2'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['item']->value['Phone'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['item']->value['Fax'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['item']->value['Email'];?>
</td>
                <td>$<?php echo smarty_modifier_money($_smarty_tpl->tpl_vars['item']->value['Funding Amount'],2);?>
</td>
                <td>$<?php echo smarty_modifier_money($_smarty_tpl->tpl_vars['item']->value['Payback Amount'],2);?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['item']->value['Factor Rate'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['item']->value['# ACH Payments'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['item']->value['Bank Name'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['item']->value['Bank Account #'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['item']->value['Routing #'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['item']->value['Commission'];?>
</td>
				<td><?php echo smarty_modifier_money($_smarty_tpl->tpl_vars['item']->value['Daily Residual %'],2);?>
%</td>
                <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['item']->value['Business Start Date'],'%b %d, %Y');?>
</td>
                <td>$<?php echo smarty_modifier_money($_smarty_tpl->tpl_vars['item']->value['Total Monthly Bank Deposits '],2);?>
</td>
				<td>$<?php echo smarty_modifier_money($_smarty_tpl->tpl_vars['item']->value['Avg Daily Bank Balance $'],2);?>
</td>
                <td>$<?php echo smarty_modifier_money($_smarty_tpl->tpl_vars['item']->value['Monthly Avg Credit Card Vol $'],2);?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['item']->value['Monthly Avg Credit Card Trans #'];?>
</td>
                <!--<td><?php echo $_smarty_tpl->tpl_vars['item']->value['MonthlyGrossSales'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['item']->value['OkToEmail'];?>
</td>-->
				<td><?php echo $_smarty_tpl->tpl_vars['item']->value['TaxID'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['item']->value['OwnerSSN'];?>
</td>
				<?php  $_smarty_tpl->tpl_vars['checkListItem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['checkListItem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['checklist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['checkListItem']->key => $_smarty_tpl->tpl_vars['checkListItem']->value) {
$_smarty_tpl->tpl_vars['checkListItem']->_loop = true;
?>
				<td><?php echo $_smarty_tpl->tpl_vars['item']->value[$_smarty_tpl->tpl_vars['checkListItem']->value['name']];?>
</td>
				<?php } ?>
			</tr>
		<?php } ?> 
		</tbody>	
				
          
         </table>
	<?php }} ?>
