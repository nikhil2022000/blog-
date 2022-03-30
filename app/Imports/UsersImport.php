<?php

namespace App\Imports;

use App\Models\send;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

    class UsersImport implements ToModel ,WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
       // echo"<pre>";print_r($row);die;
       $spersonal_name=$row['spersonal_name'];
       $personal_email=$row['personal_email'];
       $number=$row['number'];
       $relationship=$row['relationship'];
      $send= json_encode(array('spersonal_name'=>$spersonal_name, 'personal_email'=>$personal_email,'number'=>$number ,'relationship'=> $relationship));
        
      
       //echo '<pre>';print_r($perok);die;
        return new send([
            'first_name'=>$row['first_name'],
            'last_name'=>$row['last_name'],
            'email'=>$row[ 'email'],
            'phone'=>$row[ 'phone'],
            'city'=>$row[ 'city'],
            'state'=>$row[ 'state'],
            'address'=>$row[ 'address'],
            'pincode'=>$row[ 'pincode'],
             'secondery_contact_details'=>$send,
    ]);
    }
}
