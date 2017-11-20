<?php if ($cek > 0) { ?>
<div class="font16 marginsmallbottom">Pilih Bank Tujuan :</div>
<div class="form-group">
   <select name="bank" class="form-control input-lg creambg" id="bank" onchange="changerek()">
      <?php foreach ($metode as $keym) { ?>
      <option value="<?php echo $keym->id_metode ;?>"><?php echo $keym->bank ;?></option>
      <?php }?>
   </select>
</div>
<script>
$( document ).ready(function() {
  var x = document.getElementById("bank").value;
     $("#norek").load("norek/"+x,function(data){
        $("#norek").html(data);
   });
});
</script>
<?php }  else {
   }?>
