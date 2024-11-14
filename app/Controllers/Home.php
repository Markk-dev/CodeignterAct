<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Home extends BaseController
{
    public function homepage()
    {
        return view('InputData');
    }

    public function displayName()
    {
        // Retrieving data from the URL using GET
        $studID = $this->request->getGet('studID');
        $fname = $this->request->getGet('fname');
        $lname = $this->request->getGet('lname');
        $address = $this->request->getGet('address');
        $birthday = $this->request->getGet('birthday');
        $gender = $this->request->getGet('gender');
        $mobile = $this->request->getGet('mobile');
        $email = $this->request->getGet('email');
        $status = $this->request->getGet('status');
        
        // Pass data to the view
        return view('DisplayData', [
            'studID' => $studID,
            'fname' => $fname,
            'lname' => $lname,
            'address' => $address,
            'birthday' => $birthday,
            'gender' => $gender,
            'mobile' => $mobile,
            'email' => $email,
            'status' => $status
        ]);
    }
}
