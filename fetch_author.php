<?php  
 $connect = mysqli_connect("localhost", "root", "", "admin_opac");  
 $output = '';  
 $sql = "SELECT * FROM book WHERE author LIKE '%".$_POST["search"]."%' ";  
 $result = mysqli_query($connect, $sql);  
 if(mysqli_num_rows($result) > 0)  
 {  
      $output .= '<h4 align="center">Search Result</h4>';  
      $output .= '<div class="table-responsive">  
                          <table class="table table-bordered table-stripped table-responsive">  
                               <tr>  
                                    <th>ISBN</th>  
                                    <th>Book Title</th>  
                                    <th>Author</th>  
                                    <th>Category number</th>  
                                    <th>Publisher</th>  
                                    
                                    <th>Status</th>
                               </tr>';  
      while($row = mysqli_fetch_array($result))  
      {  
           $output .= '  
                <tr>  
                    <td>'.$row["isbn"].'</td>  
                     <td>'.$row["book_title"].'</td>  
                     <td>'.$row["author"].'</td>  
                     <td>'.$row["category_id"].'</td>  
                     <td>'.$row["publisher_name"].'</td>  
                     
                     <td>'.$row["status"].'</td>
                </tr>  
           ';  
      }  
      echo $output;  
 }  
 else  
 {  
      echo 'Data Not Found';  
 }  
 ?>  