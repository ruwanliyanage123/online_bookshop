<!DOCTYPE html>
<html>
<head>
<!-- <link rel="stylesheet" href="<?=base_url('assets/css/alerts/sweetalert.css')?>" type="text/css"/> -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">

</head>
<body>
<?php echo "<script type=\"text/javascript\">

setTimeout(function () { 
swal({
  title: 'YOUR REGISTRATION IS SUCCESFULLY',
  text: 'congratulations!',
  type: 'warning',
  confirmButtonText: 'OK'
},
function(isConfirm){
  if (isConfirm) {
    window.location.href = 'moveToCustomerDashboard';
  }
}); }, 1);

</script>";

?>

</body>
</html>