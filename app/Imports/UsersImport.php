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
        return new send([
            'first_name'=>$row['first_name'],
            'last_name'=>$row['last_name'],
            'email'=>$row[ 'email'],
            'phone'=>$row[ 'phone'],
            'city'=>$row[ 'city'],
            'state'=>$row[ 'state'],
            'address'=>$row[ 'address'],
            'pincode'=>$row[ 'pincode'],
            'secondery_contact_details'=>$row[ "spersonal_name"].''.$row["personal_email"].''.$row[ "number"],$row[ "relationship"]
        
        ]);
    }
}
