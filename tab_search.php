<?php
include('db/config.php');

$output = '';
if(isset($_POST["query"]))
{
 $search = mysqli_real_escape_string($connection, $_POST["query"]);
 $query = "SELECT * FROM institute_data 
WHERE  id  LIKE '%".$search."%'
  OR course LIKE '%".$search."%' 
  OR institute LIKE '%".$search."%' 
 ";}
else
{
 $query = "SELECT * FROM institute_data";
}
$result = mysqli_query($connection, $query);
if(mysqli_num_rows($result) > 0)
{
 while($row = mysqli_fetch_array($result))
 {
    $image = (!empty($row['photo'])) ? 'img/' . $row['photo'] : 'img/jav.jpg';
    $course = $row['course'];
    $institute = $row['institute'];
    $location = $row['location'];
    $batch_date = $row['batch_date'];
  $output .= '
  <div class="row  card-course h-95 mb-0 pt-0">
    <div class="">
      <div class="overlay rounded  mb-2 mt-0">
        <img class="img-fluid" src="'.$image.'" alt="Sample image">
        <a>
          <div class="mask rgba-white-slight"></div>
        </a>
      </div>
    </div>
    <div class="p-2">
      <a href="#!" class="">
        <p class="font-weight-bold mb-1 skc"><i class="fas fa-map pr-2"></i>'.$course.'</p>
</a>
<h5 class="mb-1"><strong>'.$row["institute"].'</h5>
<p class="mb-1 small"><a href="#!" class="font-weight-bold skc">Location: </a>'.$institute.'</p>
<p class="mb-1 small"><a href="#!" class="font-weight-bold skc">Batch Date: </a>'.$batch_date.'</p>
<p class="dark-grey-text small p-2"> </p>
<!-- Read more button -->
</div>
</div>
  ';
 }
 echo $output;
}
else
{
 echo 'Record Not Found';
}
?>