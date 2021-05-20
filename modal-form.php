<!-- The Modal start -->
<div id="myModal" class="modal">
	<!-- Modal content -->
  	<div class="modal-content">

    	<span class="close">&times;</span>
    	<!--Pop up Form-->
    	<form action="modal-appointment-handler.php" method="POST" name="AppointmentForm" onsubmit="validation()">
    		<div class="row">
	      		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		    		<div class="form-group">
					    <label>Student Reg No:</label>
					    <input type="text" class="form-control" name="regNo" placeholder="Enter your Registration Number">
				  	</div>
				</div>
			</div>

			<div class="row">
		  		<div class="col-12">
		  			<button type="submit" name="submit" class="btn btn-success btn-block">ADD</button>
		  		</div>
			</div>
		</form> 
  	</div>
</div>
