    function landbank_check($username,$password){
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "https://msociety.io/api.landbank/true.php?username=$username&password=$password");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $output = curl_exec($ch);
        curl_close($ch);
        $obj = json_decode($output);
        $status = $obj->message;
        return $status;
    }
