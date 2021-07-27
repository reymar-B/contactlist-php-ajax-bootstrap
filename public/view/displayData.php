<?php

$data = show();
$value="";
$value = '<table id= "show-data" class="table table-dark table-striped-md">
      <thead>
      <tr>
        <th scope="col"> Name </th>
        <th scope="col"> Email </th>
        <th scope="col"> Phone </th>
        <th scope="col"> Action </th>
      </tr>
      </thead>';
    foreach( $data as $row ){
      $value.=
        '<tbody>
        <tr>
          <td>'.$row['contact_name'].'</td>
          <td>'.$row['contact_email'].'</td>
          <td>'.$row['contact_number'] .'</td>
          <td> <button id="edit" contacts-id='. $row['id'].' type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#contacts-edit">
          <i class="fa fa-pencil" style=" font-size: 20px "></i>
          </button> </td>
        </tr>
        </tbody>';}
      $value.='</table>';
      echo json_encode(['status'=>'success', 'data'=>$value]);
    
?>