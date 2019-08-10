
<div id="successmodal" class="modal fade" style="display: none;">
	<div class="modal-dialog modal-confirm">
		<div class="modal-content">
			<div class="modal-header">
				<div class="icon-box">
					<i class="material-icons"></i>
				</div>				
				<h4 class="modal-title">Registration Success!</h4>	
			</div>
			<div class="modal-body">
				<p class="text-center">Please Login to your Account</p>
			</div>
			<div class="modal-footer">
				<button class="btn btn-success btn-block" onclick="window.location.href='<?php echo base_url();?>login'">Login</button>
			</div>
		</div>
	</div>
</div>
<div id="errormodal" class="modal fade">
	<div class="modal-dialog modal-confirm">
		<div class="modal-content">
			<div class="modal-headers">
				<div class="icon-box" >
					<i class="material-icons">&#xE5CD;</i>
				</div>
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			</div>
			<div class="modal-body text-center">
				<h4>Error !</h4>	
				<p>Something Error, Please Try Again</p>
				<button class="btn btn-success" data-dismiss="modal">OK</button>
			</div>
		</div>
	</div>
</div>     
		<script type="text/javascript">
			var form = $("#formregister");
			form.validate({
			    errorPlacement: function errorPlacement(error, element) { element.before(error); },
			    rules: {
			        confirm: {
			            equalTo: "#password"
			        }
			    }
			});
			form.children("div").steps({
			    headerTag: "h3",
			    bodyTag: "section",
			    transitionEffect: "slideLeft",
			    onStepChanging: function (event, currentIndex, newIndex)
			    {
			        form.validate().settings.ignore = ":disabled,:hidden";
			        return form.valid();
			    },
			    onFinishing: function (event, currentIndex)
			    {
			        form.validate().settings.ignore = ":disabled";
			        return form.valid();
			    },
			    onFinished: function (event, currentIndex)
			    {
			        $("#formregister").submit();
			    }
			});
	</script>
	<script type="text/javascript">
		$( function() {
			var data = ["Silver","Gold","Platinum","Black","VIP","VVIP"];	
			$( "#memtype" ).autocomplete({
		      		source: data
			});
		} );	

		var cc = $('#cc');

		cc.validateCreditCard(function(result)
	    {
	        $('#cctype').val(result.card_type.name);
	    });
	</script>
	<script type="text/javascript">
	<?php
	if (isset($status)) {
		if ($status == 1) {
			echo "
				$(window).on('load',function(){        
			   		$('#successmodal').modal('show');
			    }); 
			";
		}else if ($status  == 2){
			echo "
				$(window).on('load',function(){        
			   		$('#errormodal').modal('show');
			    }); 
			";
		}
	}	
	?></script>
</body>
</html>