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
                <h5 class="modal-title" id="exampleModalLabel">
                    Cerrar sesión
                </h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                Selecciona "Cerrar sesión" debajo, si en realidad quieres cerrar tu sesión.
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">
                    Cancelar
                </button>
                <a class="btn btn-primary" href="<?php echo $_ENV['APP_URL'] . "/logout"?>">
                    Cerrar sesión
                </a>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap core JavaScript -->
<script src="/assets/core/jquery/jquery.min.js"></script>
<script src="/assets/core/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript -->
<script src="/assets/core/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages -->
<script src="/assets/core/js/sb-admin-2.min.js"></script>

<!-- Product Tour Toggle  -->
<script>
    $(document).ready(function() {
        if (localStorage.getItem("product-tour-is-active") === null) {
            localStorage.setItem('product-tour-is-active', "false");
        }
    });
</script>