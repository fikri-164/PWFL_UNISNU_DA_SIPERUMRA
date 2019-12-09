      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website 2019</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>



  <!-- Bootstrap core JavaScript-->
  <script src="<?php echo base_url ('assets/vendor/jquery/jquery.min.js')?>"></script>
  <script src="<?php echo base_url ('assets/ckeditor/ckeditor.js')?>"></script>
  <script src="<?php echo base_url ('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?php echo base_url('assets/vendor/jquery-easing/jquery.easing.min.js') ?>"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?php echo base_url('assets/js/sb-admin-2.min.js') ?>"></script>

  <!-- Page level plugins -->
  <script src="<?php echo base_url('assets/vendor/chart.js/Chart.min.js') ?>"></script>

  <!-- Page level custom scripts -->
  <script src="<?php echo base_url('assets/js/demo/chart-area-demo.js') ?>"></script>
  <script src="<?php echo base_url('assets/js/demo/chart-pie-demo.js') ?>"></script>
  <script src="<?php echo base_url('assets/js/demo/chart-bar-demo.js') ?>"></script>
   <!-- Page level plugins -->
  <script src="<?php echo base_url('assets/vendor/datatables/jquery.dataTables.min.js') ?>"></script>
  <script src="<?php echo base_url('assets/vendor/datatables/dataTables.bootstrap4.min.js') ?>"></script>

  <!-- Page level custom scripts -->
  <script src="<?php echo base_url('assets/js/demo/datatables-demo.js') ?>"></script>


  <script src="<?php echo base_url('assets/jquery/jquery-2.2.3.min.js')?>"></script>
  <script src="<?php echo base_url('assets/datatables/js/jquery.dataTables.min.js')?>"></script>
  <script type="text/javascript">
      var table;
      $(document).ready(function() {
   
          //datatables
          table = $('#table').DataTable({ 
   
              "processing": true, 
              "serverSide": true, 
              "order": [], 
               
              "ajax": {
                  "url": "<?php echo site_url('c_dt_serverside/get_data_user')?>",
                  "type": "POST"
              },
   
               
              "columnDefs": [
              { 
                  "targets": [ 0 ], 
                  "orderable": false, 
              },
              ],
   
          });
   
      });
   
  </script>
  <script type="text/javascript">
  $(function() {

    $('#msg').slideDown('slow').delay(4000).slideUp('slow');
  });
  </script>
  <script>   
  $('#notifications').slideDown('slow').delay(3000).slideUp('slow');
  </script>
</body>

</html>
