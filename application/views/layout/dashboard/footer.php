<!-- Bootstrap core JavaScript-->
<script src="<?= base_url('assets/dashboard/vendor/jquery/jquery.min.js') ?>"></script>
<script src="<?= base_url('assets/dashboard/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>

<!-- Core plugin JavaScript-->
<script src="<?= base_url('assets/dashboard/vendor/jquery-easing/jquery.easing.min.js') ?>"></script>

<!-- Custom scripts for all pages-->
<script src="<?= base_url('assets/dashboard/js/sb-admin-2.min.js') ?>"></script>

<!-- DataTables -->
<script src="<?= base_url('assets/dashboard/vendor/datatables/dataTables.bootstrap4.min.js') ?>"></script>
<!-- SweetAlert -->
<script src="<?= base_url('assets/dashboard/vendor/sweetalert/js/sweetalert.min.js') ?>"></script>

</body>

</html>


<script>
    // # number format javascript
    function FormatCurrency(ctrl) {
        //Check if arrow keys are pressed - we want to allow navigation around textbox using arrow keys
        if (event.keyCode == 37 || event.keyCode == 38 || event.keyCode == 39 || event.keyCode == 40) {
            return;
        }

        var val = ctrl.value;

        val = val.replace(/,/g, "")
        ctrl.value = "";
        val += '';
        x = val.split('.');
        x1 = x[0];
        x2 = x.length > 1 ? '.' + x[1] : '';

        var rgx = /(\d+)(\d{3})/;

        while (rgx.test(x1)) {
            x1 = x1.replace(rgx, '$1' + ',' + '$2');
        }

        ctrl.value = x1 + x2;
    }

    function CheckNumeric() {
        return event.keyCode >= 48 && event.keyCode <= 57;
    }
    // # number format javascript
</script>