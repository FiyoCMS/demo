<?php
/**
* @version		2.0
* @package		Fiyo CMS
* @copyright	Copyright (C) 2014 Fiyo CMS.
* @license		GNU/GPL, see LICENSE.
**/

defined('_FINDEX_') or die('Access Denied');

?>	
<script type="text/javascript" charset="utf-8">
$(function() {	
	$(".approve").click(function(e){
		$(".action").val("approve");
	});
	$(".delete").click(function(e){
		$(".action").val("delete");
	});
	$("#form").submit(function(e){
		e.preventDefault();
		var ff = this;
		var checked = $('input[name="check[]"]:checked').length > 0;
		if(checked) {
			$('#confirmDelete').modal('show');	
			$('#confirm').on('click', function(){
				ff.submit();
			});		
		} else {
			noticeabs("<?php echo alert('error',Please_Select_Item); ?>");
			$('input[name="check[]"]').next().addClass('input-error');
			return false;
		}
	});
	
	if ($.isFunction($.fn.dataTable)) {		
		$('table.data').show();
		oTable = $('table.data').dataTable({
			"bProcessing": true,
			"bServerSide": true,
			"sAjaxSource": "?app=permalink&api=list",
			"bJQueryUI": true,
			"sPaginationType": "full_numbers",
			"fnDrawCallback": function( oSettings ) {	
				$("tr").click(function(e){
					var i =$("td:first-child",this).find("input[type='checkbox']");					
					var c = i.is(':checked');
					selectCheck();
					if($(e.target).is('.switch *, a[href]')) {					   
					} else {
						if(c) {
							i.prop('checked', 0);		
							$(this).removeClass('active');			
						}
						else {
							i.prop('checked', 1);
							$(this).addClass('active');
						}
					}
				});		
				$('[data-toggle=tooltip]').tooltip();
				$('[data-tooltip=tooltip]').tooltip();
				$('.tips').tooltip();
				
				$(".locker label").click(function(){
					var parent = $(this).parents('.switch');
					var id = $('.number',parent).attr('value');	
					var value = $('.type',parent).attr('value');
					if(value == 0) value = 1; else value = 0;
					$.ajax({
						url: "?app=permalink&api=status",
						data: "stat="+value+"&id="+id,
						success: function(data){
							$('.type',parent).attr('value',1);					
							notice(data);		
						}
					});
				});
							
				$(".cb-enable").click(function(){		
					var parent = $(this).parents('.switch');
					$('.cb-disable',parent).removeClass('selected');
					$(this).addClass('selected');
					$('.checkbox',parent).attr('checked', false);	
				});
				$(".cb-disable").click(function(){		
					var parent = $(this).parents('.switch');
					$('.cb-enable',parent).removeClass('selected');
					$(this).addClass('selected');
					$('.checkbox',parent).attr('checked', false);	
				});
		
				
				$('input[type="checkbox"],input[type="radio"]').wrap("<label>");
				$('input[type="checkbox"],input[type="radio"]').after("<span class='input-check'>");
				$('table.data tbody a[href]').on('click', function(e){
				   if ($(this).attr('target') !== '_blank'){
					e.preventDefault();	
					loadUrl(this);
				   }				
				});
			}
		});
		$('table.data th input[type="checkbox"]').parents('th').unbind('click.DT');
		if ($.isFunction($.fn.chosen) ) {
			$("select").chosen({disable_search_threshold: 10});
		}				
	}
});
</script>
<div id="stat"></div>
<form method="POST" id="form">
	<div id="app_header">
		<div class="warp_app_header">		
		  <div class="app_title">Permalink Manager</div>
		  <div class="app_link">			
			<!--button type="submit" class="btn btn-success approve" title="<?php echo Save; ?>" value="<?php echo Approve; ?>" name="approve_comment"><i class="icon-check"></i> <?php echo Approve; ?></button-->	
			<button type="submit" class="delete btn btn-danger" title="<?php echo Delete; ?>" value="<?php echo Delete; ?>" name="delete"><i class="icon-trash"></i> &nbsp;<?php echo Delete; ?></button>
			
		  </div> 	
		  <?php printAlert(); ?>
		</div>
	</div>
	<table class="data">
		<thead>
			<tr>								  
				<th width="3%" class="no" colspan="0" id="ck">  
					<input type="checkbox" id="checkall" target="check[]"></th>				
				<th style="width:40% !important;">Permalink</th>
				<th style="width:40% !important; ">Link</th>
				<th style="width:15% !important; text-align: center">Lock</th>
				<th style="width:5% !important; text-align: center">PID</th>
			</tr>
		</thead>	
		<tbody>
			<tr><td colspan="6" align="center">Loading...</td></tr>	
        </tbody>			
	</table>
</form>