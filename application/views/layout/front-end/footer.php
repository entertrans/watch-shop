<!-- FOOTER -->
</main>

</body>

</html>

<script src="<?= base_url('assets/front-end/jquery/jquery.min.js') ?>"></script>
<script src="<?= base_url('assets/front-end/vendor/bootstrap-4.4.1/js/bootstrap.min.js') ?>"></script>


<!-- SCRIPT BUAT VALIDASI -->
<script>
	function checknumber(){
		return event.keyCode >= 48 && event.keyCode <= 57 ;
	}
</script>
<!-- END OF SCRIPT BUAT VALIDASI -->

<!-- SCRIPT BUAT ONGKIR -->
<script>
$(document).ready(function(){

  $("#propinsi_asal").click(function(){
    $.post("<?php echo base_url(); ?>index.php/checkout/getCity/"+$('#propinsi_asal').val(),function(obj){
      $('#origin').html(obj);
    });
      
  });

  $("#propinsi_tujuan").click(function(){
    $.post("<?php echo base_url(); ?>index.php/checkout/getCity/"+$('#propinsi_tujuan').val(),function(obj){
      $('#destination').html(obj);
    });
      
  });

  /*
  $("#cari").click(function(){
    $.post("<?php echo base_url(); ?>index.php/rajaongkir/getCost/"+$('#origin').val()+'&dest='+$('#destination').val()+'&berat='+$('#berat').val()+'&courier='+$('#courier').val(),function(obj){
      $('#hasil').html(obj);
    });
  });

  */  
});
</script>