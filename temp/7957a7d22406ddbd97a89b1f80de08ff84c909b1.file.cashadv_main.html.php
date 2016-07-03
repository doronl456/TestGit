<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-07-03 03:18:47
         compiled from "/homepages/37/d619410358/htdocs/developer/template/status/cashadv_main.html" */ ?>
<?php /*%%SmartyHeaderCode:385400195778bc5773a508-86270968%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7957a7d22406ddbd97a89b1f80de08ff84c909b1' => 
    array (
      0 => '/homepages/37/d619410358/htdocs/developer/template/status/cashadv_main.html',
      1 => 1466056150,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '385400195778bc5773a508-86270968',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'chart1' => 0,
    'chart2' => 0,
    'stat' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5778bc577a1a79_93645878',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5778bc577a1a79_93645878')) {function content_5778bc577a1a79_93645878($_smarty_tpl) {?><?php if (!is_callable('smarty_function_js_include')) include '/homepages/37/d619410358/htdocs/developer/ext/smarty3/plugins/function.js_include.php';
if (!is_callable('smarty_function_js_data')) include '/homepages/37/d619410358/htdocs/developer/ext/smarty3/plugins/function.js_data.php';
?><?php echo smarty_function_js_include(array('src'=>'/css/listboxes.css'),$_smarty_tpl);?>

<?php echo smarty_function_js_include(array('src'=>'/css/statslots.css'),$_smarty_tpl);?>

<?php echo $_smarty_tpl->getSubTemplate ("jqChart.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo smarty_function_js_data(array('chart1'=>$_smarty_tpl->tpl_vars['chart1']->value,'chart2'=>$_smarty_tpl->tpl_vars['chart2']->value),$_smarty_tpl);?>






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


$(document).ready(function() {

        var background = {
            type: 'linearGradient',
            x0: 0,
            y0: 0,
            x1: 0,
            y1: 1,
            colorStops: [{offset: 0, color: '#d2e6c9'},
                {offset: 1, color: 'white'}]
        };

        $('#jqChart1').jqChart({
            title: {text: 'Merchant Cash Advance Account Status by Month'},
            border: {strokeStyle: '#6ba851'},
            background: background,
            animation: {duration: 1},
            shadows: {
                enabled: true
            },
            axes: [
                {
                    type: 'linear',
                    location: 'left',
					minimum: 0

                }
            ],
            series: [
                {
                    title: 'Approved',
                    type: 'column',
                    data: [
						[chart1[0].month, chart1[0].a], 
						[chart1[1].month, chart1[1].a], 
						[chart1[2].month, chart1[2].a], 
						[chart1[3].month, chart1[3].a], 
						[chart1[4].month, chart1[4].a], 
						[chart1[5].month, chart1[5].a], 
						[chart1[6].month, chart1[6].a], 
						[chart1[7].month, chart1[7].a], 
						[chart1[8].month, chart1[8].a], 
						[chart1[9].month, chart1[9].a], 
						[chart1[10].month, chart1[10].a], 
						[chart1[11].month, chart1[11].a]
						]
                },
                {
                    title: 'Underwriting',
                    type: 'column',
                    data: [
						[chart1[0].month, chart1[0].u], 
						[chart1[1].month, chart1[1].u], 
						[chart1[2].month, chart1[2].u], 
						[chart1[3].month, chart1[3].u], 
						[chart1[4].month, chart1[4].u], 
						[chart1[5].month, chart1[5].u], 
						[chart1[6].month, chart1[6].u], 
						[chart1[7].month, chart1[7].u], 
						[chart1[8].month, chart1[8].u], 
						[chart1[9].month, chart1[9].u], 
						[chart1[10].month, chart1[10].u], 
						[chart1[11].month, chart1[11].u]
						]
                },
                {
                    title: 'Declined',
                    type: 'column',
                    data: [
						[chart1[0].month, chart1[0].d], 
						[chart1[1].month, chart1[1].d], 
						[chart1[2].month, chart1[2].d], 
						[chart1[3].month, chart1[3].d], 
						[chart1[4].month, chart1[4].d], 
						[chart1[5].month, chart1[5].d], 
						[chart1[6].month, chart1[6].d], 
						[chart1[7].month, chart1[7].d], 
						[chart1[8].month, chart1[8].d], 
						[chart1[9].month, chart1[9].d], 
						[chart1[10].month, chart1[10].d], 
						[chart1[11].month, chart1[11].d]
						]
                }
				
				
            ]
        });
        $('#jqChart2').jqChart({
            title: {text: 'Total Approved Merchant Funding by Month'},
            border: {strokeStyle: '#6ba851'},
            background: background,
            animation: {duration: 1},
            shadows: {
                enabled: true
            },
            axes: [
                {
                    type: 'linear',
                    location: 'left',
					minimum: 0

                }
            ],
            series: [
                {
                    title: 'Funding Amount',
                    type: 'column',
                    data: [
						[chart1[0].month, chart2[0].a], 
						[chart1[1].month, chart2[1].a], 
						[chart1[2].month, chart2[2].a], 
						[chart1[3].month, chart2[3].a], 
						[chart1[4].month, chart2[4].a], 
						[chart1[5].month, chart2[5].a], 
						[chart1[6].month, chart2[6].a], 
						[chart1[7].month, chart2[7].a], 
						[chart1[8].month, chart2[8].a], 
						[chart1[9].month, chart2[9].a], 
						[chart1[10].month, chart2[10].a], 
						[chart1[11].month, chart2[11].a]
						]
                }
				
            ]
        });





});



<?php echo '</script'; ?>
>
















<div class="TitleRow">
	MCA/Funding Services 
  	  <div class="toright">
		
		
              
        <?php echo $_smarty_tpl->getSubTemplate ('status/mca_instr.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

      </div>	  	   
</div>



<div id="jqChart1" style=" height: 220px;margin-bottom:8px"></div>
<div id="jqChart2" style=" height: 220px;margin-bottom:8px"></div>


<TABLE ID="Table9" BORDER="0"  CELLSPACING=0 CELLPADDING=0 WIDTH="100%">
  <TR >
  <TD>
  
  <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['stat']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
  <div class="statSlot">
	<?php if ($_smarty_tpl->tpl_vars['item']->value['title']) {?>
	<div class='statBox'>
    	<div class="body body_<?php echo $_smarty_tpl->tpl_vars['item']->value['color'];?>
">
        <?php echo $_smarty_tpl->tpl_vars['item']->value['value'];?>

        </div>
        <div class="boxfooter">
        <?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>

        </div>
    </div>
    <?php }?>
  </div>
  <?php } ?>
  
  </TD>
  </TR>
  <TR >
    <TD><div class="instructions">
    
    All statistics above will show company wide totals for ALL contracts with any of the following statuses:  Approved, Funded, 
Lender Debit, Merchant Credit, Agent Credit, Merchant Daily Debit, Lender Daily Credit, or Completed
    
    </div></TD>
  </TR>
</TABLE>
<?php }} ?>
