<button type="button" class="btn btn-danger" onclick="regis('<?php echo $id; ?>', '<?php echo $grad; ?>')"><i class="fa fa-trash"></i></button> 


<script>
function regis(id, grad) {
                $.ajax({
                    url: 'process.php',
                    method: 'POST',
                    data: {id: id, grad: 'A'},
                    success: function (resp)
                    {
                        if (resp == '1') {
                            window.location.href = "index.php";
                        }
                    }
                })
            }
 </script>
