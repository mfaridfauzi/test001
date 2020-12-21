<!DOCTYPE html>
<html lang="en">  
  
  <?php include '../include/querydb.inc.php'; ?>
  <?php include 'indexhtml_head.php'; ?>

  <body>

    <!-- ########## START: LEFT PANEL ########## -->
	<?php include 'index_leftpanel.php'; ?>    
    <!-- ########## END: LEFT PANEL ########## -->

    <!-- ########## START: HEAD PANEL ########## -->
	<?php include 'index_headpanel.php'; ?>    
    <!-- ########## END: HEAD PANEL ########## -->

    <!-- ########## START: RIGHT PANEL ########## -->
	<?php include 'index_rightpanel.php'; ?>    
    <!-- ########## END: RIGHT PANEL ########## --->
	
	<!-- ########## on submit form ########## --->
	<script language="javascript" type="text/javascript">
		function submitQR(){
			var prefix = document.genqr.qr_prefix.value;
			var nod = document.genqr.qr_digits.value;
			var startno = document.genqr.qr_startno.value;
			var lastno = document.genqr.qr_lastno.value;
			
			if(prefix==''){
				alert('Please fill in prefix for the QR codes.');
				document.genqr.qr_prefix.focus();
			} else if(nod==''){
				alert('Please select number of digits in your QR codes.');
				document.genqr.qr_digits.focus();
			} else if(startno==''){
				alert('Please fill in the first number of the QR codes.');
				document.genqr.qr_startno.focus();
			} else if(lastno==''){
				alert('Please fill in the last number of the QR codes.');
				document.genqr.qr_lastno.focus();
			} else if(lastno-startno < 0){
				alert('First/starting number MUST NOT LARGER than last number.');
			} else {
				document.genqr.action='../../qrgen/multipleqr2.php';
				document.genqr.submit();
			}
		}
	</script>
	
    <!-- ########## START: MAIN PANEL ########## -->
    <div class="br-mainpanel">
      <div class="br-pageheader pd-y-15 pd-l-20">
        <nav class="breadcrumb pd-0 mg-0 tx-12">
          <a class="breadcrumb-item" href="index.html">GeoTrees</a>
          <a class="breadcrumb-item" href="#">QR Code</a>
          <span class="breadcrumb-item active">Generator</span>
        </nav>
      </div><!-- br-pageheader -->
      <div class="pd-x-20 pd-sm-x-30 pd-t-20 pd-sm-t-30">
        <h4 class="tx-gray-800 mg-b-5">QR Code Generator</h4>
        <p class="mg-b-0">QR codes generator for GeoTrees Tree Inventory.</p>
      </div>

      <div class="br-pagebody">
        <div class="br-section-wrapper">
          <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10">Bulk QR Generator</h6>
          <!--p class="mg-b-30 tx-gray-600">Fill in the form with c.</p-->
		
		<form name="genqr" action="" method="post">
          <div class="form-layout form-layout-1">
            <div class="row mg-b-25">
              <div class="col-lg-8">
                <div class="form-group">
                  <label class="form-control-label">Prefix: <span class="tx-danger">*</span>(Max 5 Letter)</label>
                  <input class="form-control" type="text" name="qr_prefix" maxlength="6" placeholder="Enter QR Codes Prefix">
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Number of Digits: <span class="tx-danger">*</span>(Max 5)</label>
                  <select id="qr_digits" name="qr_digits" class="form-control" data-placeholder="Choose NoD">
                    <option label="Choose NoD"></option>
                    <option value="1">One (1)</option>
                    <option value="2">Two (2)</option>
                    <option value="3">Three (3)</option>
                    <option value="4">Four (4)</option>
                    <option value="5" selected>Five (5)</option>
                  </select>
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Starting Number: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="number" name="qr_startno" min="1" max="99999" placeholder="Enter starting number">
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Last Number: <span class="tx-danger">*</span>(Max number = 99999)</label>
                  <input class="form-control" type="number" name="qr_lastno" min="1" max="99999" placeholder="Enter last number">
                </div>
              </div><!-- col-8 -->
            </div><!-- row -->

            <div class="form-layout-footer">
              <button class="btn btn-info" onclick="submitQR()">Generate QR Codes</button>
              <button class="btn btn-secondary">Cancel</button>
            </div><!-- form-layout-footer -->
          </div><!-- form-layout -->
		</form>

        </div><!-- br-section-wrapper -->
      </div><!-- br-pagebody -->
      <footer class="br-footer">
        <div class="footer-left">
          <div class="mg-b-2">Copyright &copy; 2017. Bracket. All Rights Reserved.</div>
          <div>Attentively and carefully made by ThemePixels.</div>
        </div>
        <div class="footer-right d-flex align-items-center">
          <span class="tx-uppercase mg-r-10">Share:</span>
          <a target="_blank" class="pd-x-5" href="https://www.facebook.com/sharer/sharer.php?u=http%3A//themepixels.me/bracket/intro"><i class="fa fa-facebook tx-20"></i></a>
          <a target="_blank" class="pd-x-5" href="https://twitter.com/home?status=Bracket,%20your%20best%20choice%20for%20premium%20quality%20admin%20template%20from%20Bootstrap.%20Get%20it%20now%20at%20http%3A//themepixels.me/bracket/intro"><i class="fa fa-twitter tx-20"></i></a>
        </div>
      </footer>
    </div><!-- br-mainpanel -->
    <!-- ########## END: MAIN PANEL ########## -->

		<!-- : base -->
    <script src="../lib/jquery/jquery.js"></script>
    <script src="../lib/popper.js/popper.js"></script>
    <script src="../lib/bootstrap/bootstrap.js"></script>
    <script src="../lib/perfect-scrollbar/js/perfect-scrollbar.jquery.js"></script>
    <script src="../lib/moment/moment.js"></script>
    <script src="../lib/jquery-ui/jquery-ui.js"></script>
    <script src="../lib/jquery-switchbutton/jquery.switchButton.js"></script>
    <script src="../lib/peity/jquery.peity.js"></script>
    <script src="../lib/highlightjs/highlight.pack.js"></script>
    	<!-- : form-element -->
	<script src="../lib/select2/js/select2.min.js"></script>

		<!-- : basic bracket 2 -->
    <script src="../js/bracket.js"></script>
	
    <script>
      $(function(){
        'use strict'

        $('.form-layout .form-control').on('focusin', function(){
          $(this).closest('.form-group').addClass('form-group-active');
        });

        $('.form-layout .form-control').on('focusout', function(){
          $(this).closest('.form-group').removeClass('form-group-active');
        });

        // Select2
        $('#select2-a, #select2-b').select2({
          minimumResultsForSearch: Infinity
        });

        $('#select2-a').on('select2:opening', function (e) {
          $(this).closest('.form-group').addClass('form-group-active');
        });

        $('#select2-a').on('select2:closing', function (e) {
          $(this).closest('.form-group').removeClass('form-group-active');
        });

      });
    </script>
  </body>
</html>
