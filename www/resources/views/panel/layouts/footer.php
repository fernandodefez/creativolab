<!-- Bootstrap core JavaScript-->
<script src="/assets/vendor/jquery/jquery.min.js"></script>
<script src="/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="/assets/vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="/assets/js/sb-admin-2.min.js"></script>

<!-- Page level plugins -->
<script src="/assets/vendor/chart.js/Chart.min.js"></script>

<!-- Page level custom scripts -->
<script src="/assets/js/demo/chart-area-demo.js"></script>
<script src="/assets/js/demo/chart-pie-demo.js"></script>

<script>
    $(document).ready(function() {
        console.log(localStorage.getItem("product-tour-is-active") === null ? "nulo" : "no nulo");
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