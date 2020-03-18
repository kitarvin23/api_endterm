
<script rel="stylesheet" type="text/javascript" src="css/js/popper.min.js"></script>
<script rel="stylesheet" type="text/javascript" src="css/js/jquery-3.4.1.slim.min.js"></script>
<!-- important! dapat ang bootstrap.min.js ara sa dalom sang tanan-->
<script rel="stylesheet" type="text/javascript" src="css/js/bootstrap.min.js"></script>

<link rel="stylesheet" type="text/css" href="css/style2.css">
<?php
$json = file_get_contents("http://rdapi.herokuapp.com/product/read.php");

$data = json_decode($json,true);
$list = $data['records'];
 
if(isset($_POST['search'])){
   $search = $_POST['search'];
   $jsearch = file_get_contents('http://rdapi.herokuapp.com/product/search.php?s='.$search);
   $res = json_decode($jsearch,true);

   $list = $res['records'];
   
}else{
   $list = $data['records'];
}
?>

    <form Method="POST" class="example mt-4" action="index.php?navigation=product" style="margin:auto;max-width:300px">
<input type="text" class="form-control" placeholder="search" name="search">
    <div class="input-group-append">
      <button class="btn btn-success ml-auto" type="submit" name="submit">Go</button>  
     </div>
</form>



<div class="container">    

<h4> Product List </h4>   

  <table class="table table-striped">
    <thead>
    <tr>
        <th>ID</th>
        <th>Product</th>
        <th>Price</th>
    </tr>
    </thead>
    <tbody>
   <?php foreach($list as $value)
{
?>

<tr>
        <td><?php echo $value['id'];?></td>
        <td><a href="index.php?navigation=details&id=<?php echo $value['id'];?>"><?php echo $value['name'];?></a></td>
        <td><?php echo $value['price'];?></td>
    </tr>

<?php
}
?>
     
    </tbody>
  </table>
</div>