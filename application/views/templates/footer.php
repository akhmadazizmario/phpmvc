</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="login.html">Logout</a>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap core JavaScript-->
<script src="http://localhost/phpmvc/assets/vendor/jquery/jquery.min.js"></script>
<script src="http://localhost/phpmvc/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="http://localhost/phpmvc/assets/vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="http://localhost/phpmvc/assets/js/sb-admin-2.min.js"></script>

<!-- Page level plugins -->
<script src="http://localhost/phpmvc/assets/vendor/chart.js/Chart.min.js"></script>

<!-- Page level custom scripts -->
<script src="http://localhost/phpmvc/assets/js/demo/chart-area-demo.js"></script>
<script src="http://localhost/phpmvc/assets/js/demo/chart-pie-demo.js"></script>
<!--- mengubah search file di ubahprofil jadi file gambar -->
<script>
    $('.custom-file-input').on('change', function() {
        let fileName = $(this).val().split('//').pop();
        $(this).next('.custom-file-label').addClass('selected').html(fileName);
    });
</script>
<!-- Closee file gamber -->
</body>
<!----footer-------->
<footer>
    <div>
        <center>
            <i class="fa fa-copyright" style='font-size:20px;color:black'></i>copyright by aziz mario
            <!------END footer----->
    </div>
</footer>

</html>