<?php
/**
 * Created by PhpStorm.
 * User: Moddy
 * Date: 17/01/2016
 * Time: 14:30
 */
 include("includes/connection.php");
 
?>
<?php $page="dashboard"; ?>
<!DOCTYPE html>
<html lang="en" class="app">
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">

		<!-- For IE -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<!-- For Resposive Device -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<title>Categories</title>
    <?php require"includes/header.php"; ?>
    

<!--[if lt IE 9]> <script src="js/ie/html5shiv.js"></script> <script src="js/ie/respond.min.js"></script> <script src="js/ie/excanvas.js"></script> <![endif]-->
</head>
<body class="home">
<!-- =======Header ======= -->
		<?php require"includes/header_info.php"; ?>
<!-- ======= /Header ======= -->
<!-- ======= mainmenu-area section ======= -->
		<?php require"includes/menu.php"; ?>

<!-- ======= /mainmenu-area section ======= -->
<!-- ======= revolution slider section ======= -->
	<!-- ======= Banner ======= -->
		<section class="history_sec">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						
						<?php 
                                                $key = "";

$book_title =  addslashes($_GET['category']);
                                                $query = "SELECT * FROM book,category where category.category_id=book.category_id   ";
$result = mysqli_query($mysqli, $query) or trigger_error("Query Failed! SQL: $query - Error: ". mysqli_error($mysqli), E_USER_ERROR);

?>                           <h2 style="text-transform: uppercase"><?php echo $book_title;    ?>    Books</h2>
                                                <table class="table table-condensed table-striped table-bordered table-responsive" id="example">
                                                <thead><tr><th>Title</th>
                                                        <th>Author</th>
                                                        <th>ISBN</th>
                                                        <th>Category_id</th>
                                                        <th>Category</th>
                                                        <th>Year Published</th></tr></thead>
 
                                                            <?php
 
if($result) {
	while($row = mysqli_fetch_assoc($result)) {
		//echo'Tito'. $row['accession_no'] . '<br>';
                 $id= $row['book_id'];$title=$row['book_title'];
                
	$author=$row['author'];
	$publishername=$row['publisher_name'];

	$isbn=$row['isbn'];
	$copy=$row['copyright_year'];
	$remarks=$row['category_id'];
	$copies=$row['book_copies'];
	$status=$row['status'];	
	
	$shelf = $row['book_title'];
        
      
?>
         
      <?php include 'modal_sample.php';?>    
    <tr>
        
        <td ><a href="#myModal<?php echo $id ?>" data-toggle="modal"><?php echo $row["book_title"]?></a></td>
      <td><?php echo $row["author"]?></td>
      <td><?php echo $row["isbn"]?></td>
      <td><?php echo$row["category_id"]?></td>
          <td><?php echo $row["classname"]?></td>
      <td><?php echo $row["copyright_year"]?></td>
    </tr>
 
            
      <?php 
      
	}
        
        ?>
    
        </table>
        
            <?php
} 
                                                ?>
					</div>
					
				</div>
			</div>
		</section>
<!-- ======= /Banner ======= -->
<!--====Footer===-->
<?php require"includes/footer.php"; ?>
<!--==./Footer==-->
</body>
</html>

