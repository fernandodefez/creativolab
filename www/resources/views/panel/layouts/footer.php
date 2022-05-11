<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
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
                <a class="btn btn-primary" href="<?php echo $_ENV['APP_URL'] . "/logout"?>">Logout</a>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap core JavaScript-->
<script src="/assets/vendor/jquery/jquery.min.js"></script>
<script src="/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="/assets/vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="/assets/js/sb-admin-2.min.js"></script>

<!-- Product Tour Toggle  -->
<script>
    $(document).ready(function() {
        if (localStorage.getItem("product-tour-is-active") === null) {
            $("#tourToggleArea").html("" +
                "<button class='btn btn-danger btn-sm font-weight-bold' role='button' id='tourToggleOff'>"
                + " Desactivar guía " +
                "</button>");
        } else if (localStorage.getItem("product-tour-is-active") === "false"){
            $("#tourToggleArea").html("" +
                "<button class='btn btn-success btn-sm font-weight-bold' role='button' id='tourToggleOn'>"
                + " Activar guía " +
                "</button>");
        } else {
            $("#tourToggleArea").html("" +
                "<button class='btn btn-danger btn-sm font-weight-bold' role='button' id='tourToggleOff'>"
                + " Desactivar guía " +
                "</button>");
        }

        $("#tourToggleOff").click(function() {
            $("#tourToggleOff").hide();
            $("#tourToggleOn").show();
            localStorage.setItem('product-tour-is-active', "false");
            location.reload();
        });
        $("#tourToggleOn").click(function() {
            $("#tourToggleOn").hide();
            $("#tourToggleOff").show();
            localStorage.setItem('product-tour-is-active', "true");
            location.reload();
        });
    });
</script>