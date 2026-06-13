<?php
require_once '../inc/connection.php';
 

$sql = "SELECT * FROM `users`";
$res = mysqli_query($con , $sql);

if (mysqli_num_rows($res) > 0 ) {
   echo '
       <table class="table table-hover" id="myTable">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Username</th>
                </tr>
            </thead>
            <tbody>
   '; while ($row = mysqli_fetch_assoc($res)) {
      echo '
          <tr>
                <th scope="row">' . $row["id"] . '</th>
                <td>' . $row["name"] . '</td>
                <td>' . $row["username"] . '</td>
                <td>
                    <a 
                        href="vendor_update.php?id=' . $row["id"] . '" 
                        class="btn btn-outline-warning">
                        <i class="bi bi-pencil-square"></i>
                    </a>
                    <button 
                        class="btn btn-outline-danger"
                        onclick="deleteVendor(' . $row["id"] . ')"
                        >
                        <i class="bi bi-trash"></i>
                    </button>
                </td>
            </tr>
      ';
   }
   echo '
            </tbody>
        </table>
    ';
} else {
   echo '
       <div class="alert alert-warning">
           No data found !!
       </div>
   ';
}















//  $data = [];
//  if ($type == '012') {
//     $sql = "SELECT * FROM `users`";
//     print_r($sql);
//     // $run = mysqli_query($con ,$sql);

//     //     if ($row = mysqli_num_rows($run)) {
//     // array_push($data,$row);
//     //     }
//     // echo json_encode($data);
//  } else {
//     echo 'pehle wale me dikkat hai';
//  }


?>