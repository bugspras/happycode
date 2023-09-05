<?php

class Model extends CI_Model{
        

    public function auth($username, $password) 
    {
     try {
        $curl = curl_init();
        curl_setopt_array($curl, array(
          CURLOPT_URL => 'http://localhost:3000/auth?username='.$username.'&password='.$password.'',
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => '',
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => 'GET',
        ));
        $response = curl_exec($curl);
        curl_close($curl);
        return $response;
     } catch (Exception $e) {
         return $e->getMessage();
     }
    }

    public function list($id = null) 
    {
     try {
        if($id){
            $curl = curl_init();
            curl_setopt_array($curl, array(
            CURLOPT_URL => 'http://localhost:3000/user?id='.$id.'',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
            ));
            $response = curl_exec($curl);
            curl_close($curl);
            return $response;
        }else{
            $curl = curl_init();
            curl_setopt_array($curl, array(
            CURLOPT_URL => 'http://localhost:3000/user',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
            ));
            $response = curl_exec($curl);
            curl_close($curl);
            return $response;
        }
     } catch (Exception $e) {
        return $e->getMessage();
     }
    }
    
    public function insert($data, $filename) 
    {
        try {
            $email = $data['email'];
            $username = $data['username'];
            $fullname = $data['fullname'];
            $password = $data['password'];
            $curl = curl_init();
            curl_setopt_array($curl, array(
            CURLOPT_URL => 'http://localhost:3000/user',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => 'email='.$email.'&username='.$username.'&photo='.$filename.'&fullname='.$fullname.'&password='.$password.'',
            CURLOPT_HTTPHEADER => array(
                'Content-Type: application/x-www-form-urlencoded'
            ),
            ));
            $response = curl_exec($curl);
            curl_close($curl);
            echo $response;

        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }

    public function update($data, $filename) 
    {
        try {
            $id = $data['id'];
            $email = $data['email'];
            $username = $data['username'];
            $photo = $data['photo'];
            $fullname = $data['fullname'];
            $password = $data['password'];
            $curl = curl_init();
            curl_setopt_array($curl, array(
              CURLOPT_URL => 'http://localhost:3000/user',
              CURLOPT_RETURNTRANSFER => true,
              CURLOPT_ENCODING => '',
              CURLOPT_MAXREDIRS => 10,
              CURLOPT_TIMEOUT => 0,
              CURLOPT_FOLLOWLOCATION => true,
              CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
              CURLOPT_CUSTOMREQUEST => 'PUT',
              CURLOPT_POSTFIELDS => 'id='.$id.'&email='.$email.'&username='.$username.'&photo='.$filename.'&fullname='.$fullname.'&password='.$password.'',
              CURLOPT_HTTPHEADER => array(
                'Content-Type: application/x-www-form-urlencoded'
              ),
            ));
            $response = curl_exec($curl);
            curl_close($curl);
            echo $response;
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }

    public function delete($id) 
    {
        try {
            $curl = curl_init();
            curl_setopt_array($curl, array(
              CURLOPT_URL => 'http://localhost:3000/user?id='.$id.'',
              CURLOPT_RETURNTRANSFER => true,
              CURLOPT_ENCODING => '',
              CURLOPT_MAXREDIRS => 10,
              CURLOPT_TIMEOUT => 0,
              CURLOPT_FOLLOWLOCATION => true,
              CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
              CURLOPT_CUSTOMREQUEST => 'DELETE',
            ));
            $response = curl_exec($curl);
            curl_close($curl);
            echo $response;
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
}