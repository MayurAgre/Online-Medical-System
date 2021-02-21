<?php require_once"dbconfig.php";
if(isset($_SESSION['login']))
{

	
}
else
{
	header("location:login.php");
}

?>
<!DOCTYPE HTML>
<html>
<head>
<?php include"head.php";?> 
<script type="text/javascript" src="js/nicEdit-latest.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
  
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>


  <script type="text/javascript">
  $(document).ready(function () {
$('#dtBasicExample').DataTable();
$('.dataTables_length').addClass('bs-select');
});

  </script>
  <style>
  table.dataTable thead>tr>td.sorting,
table.dataTable thead>tr>td.sorting_asc,
table.dataTable thead>tr>td.sorting_desc,
table.dataTable thead>tr>th.sorting,
table.dataTable thead>tr>th.sorting_asc,
table.dataTable thead>tr>th.sorting_desc {
  padding-right: 30px
}

table.dataTable thead .sorting,
table.dataTable thead .sorting_asc,
table.dataTable thead .sorting_asc_disabled,
table.dataTable thead .sorting_desc,
table.dataTable thead .sorting_desc_disabled {
  cursor: pointer;
  position: relative
}

table.dataTable thead .sorting:after,
table.dataTable thead .sorting:before,
table.dataTable thead .sorting_asc:after,
table.dataTable thead .sorting_asc:before,
table.dataTable thead .sorting_asc_disabled:after,
table.dataTable thead .sorting_asc_disabled:before,
table.dataTable thead .sorting_desc:after,
table.dataTable thead .sorting_desc:before,
table.dataTable thead .sorting_desc_disabled:after,
table.dataTable thead .sorting_desc_disabled:before {
  position: absolute;
  bottom: .9em;
  display: block;
  opacity: .3
}

table.dataTable thead .sorting:before,
table.dataTable thead .sorting_asc:before,
table.dataTable thead .sorting_asc_disabled:before,
table.dataTable thead .sorting_desc:before,
table.dataTable thead .sorting_desc_disabled:before {
  right: 1em;
  content: "\f0de";
  font-family: FontAwesome;
  font-size: 1rem
}

table.dataTable thead .sorting:after,
table.dataTable thead .sorting_asc:after,
table.dataTable thead .sorting_asc_disabled:after,
table.dataTable thead .sorting_desc:after,
table.dataTable thead .sorting_desc_disabled:after {
  content: "\f0dd";
  font-family: FontAwesome;
  right: 16px;
  font-size: 1rem
}

table.dataTable thead .sorting_asc:before,
table.dataTable thead .sorting_desc:after {
  opacity: 1
}

table.dataTable thead .sorting_asc_disabled:before,
table.dataTable thead .sorting_desc_disabled:after {
  opacity: 0
}
  </style>
  </head>
<body style="background-color: #48dbfb;
background-image: linear-gradient(315deg, #48dbfb 0%, #d3d3d3 74%);height:100vh;">
<div class="page-container">
<div class="left-content">
<div class="inner-content">
<?php //include"header.php";?>
<div class="outter-wp">
<div class="sub-heard-part">
<ol class="breadcrumb m-b-0">
<li><a href="/ipminiproject/online_medicine_Shopping">Home</a></li>
<li class="active">Medicine List</li>
</ol>
</div>
<div class="graph-visual tables-main" style="margin-right:10px;box-shadow: inset 0 0px 0px rgba(0,0,0,.075),0 0 3px #00C6D7;">

<div class="graph">
<div class="block-page">
<p>
<h3 class="inner-tittle two" style="border-bottom:1px solid #000;">Medicine List</h3>
<a href="additem.php"><button class="btn btn-pill btn-primary" style="margin-left:0;margin-top:0px;margin-bottom:10px;">Add New Medicine</button></a>
<div class="form-body">
<table id="dtBasicExample"  class="table table-striped table-bordered" cellspacing="0" width="100%">
  <thead>
    <tr>
	<th class="th-sm">S.no.
      </th>
      <th class="th-sm">Title
      </th>
      <th class="th-sm">Category
      </th>
      <th class="th-sm">Image
      </th>
	  <th class="th-sm">price
      </th>
       
	  <th class="th-sm">Operation
      </th>
      
    </tr>
  </thead>
  <tbody>
  <?php 
  $result=select("select * from items");
  $n=1;
  while($r=mysqli_fetch_array($result))
  {  extract($r);
  ?>
    <tr>
      <td><?=$n?></td>
      <td><?=ucwords($Title)?></td>
      <td><?=$category?></td>
       <td><img src="images/<?=$image?>" style="height:40px"></td>
     
	  <td>&#8377;<?=$price?>  </td>
      
      <td>
         
        </a>&nbsp;&nbsp;&nbsp;
     <a href="myphp.php?delete=yes&id=<?=$elecid?>">
          <span class="glyphicon glyphicon-remove"></span>
        </a>
	  
	  
	  </td>
      
    </tr>
    
    <?php
	$n++;
  }
	?>
    
    
    </tbody>

</table>
</div>


</p>
</div>

</div>

</div>
</div>
<?php include"footer.php";?>

</div>
</div>
<?php include"side_bar.php";?>
</div>
<?php include"footer_script.php";?>

</body>
</html>