<?php
// this can be wrapped into a plugin


class RJinfoWave{

    // The url you wish to send the POST request to
    protected $url = 'https://api.rikjanssen.info/wave/v1/';
    protected $softid = 'SSAT';
    protected $interval = 86400; // check tomorrow
    protected $token;
    protected $siteName;
    protected $siteUrl;
    protected $output;

    // Check what data is available and fill in the blanks
    public function __construct(){

        $this->siteUrl = get_bloginfo('url');
        // run class
        $this->wave();

    }

    public function toggle($do='ACTIVATE'){

        // allowed inputs
        $hs = array(
            'ACTIVATE',
            'DEACTIVATE',
            'DELETE'
        );

        if(!in_array($do, $hs)){ return; }

        // The data you want to send
        $fields = [
            'POST'     => 'EDIT', // WAVE (sign up or update), DELETE (delete all request) or UNINSTALL (set SOFTID to 0)
            'DO'       => $do,
            'URL'      => $this->siteUrl,
            'TOKEN'      => '1cca2c58e411e589d22a3e8e17a2ac9f3a21d1b31b6406ed6e0b8bfafade60be',
            'SOFTID'   => $this->softid,
        ];

        //url-ify the data for the POST
        $fields_string = http_build_query($fields);

        //open connection
        $ch = curl_init();

        //set the url, number of POST vars, POST data
        curl_setopt($ch,CURLOPT_URL, $this->url);
        curl_setopt($ch,CURLOPT_POST, true);
        curl_setopt($ch,CURLOPT_POSTFIELDS, $fields_string);

        //So that curl_exec returns the contents of the cURL; rather than echoing it
        curl_setopt($ch,CURLOPT_RETURNTRANSFER, true); 

        //execute post
        $this->output = curl_exec($ch);
        return curl_exec($ch);

    }

    public function wave(){

        $this->waveAtAPI();
        $this->jsonDecode();
        $this->saveOptions();
        $this->resetTime();

    }

    public function waveAtAPI(){

        // The data you want to send
        $fields = [
            'POST'     => 'WAVE', // WAVE (sign up or update), DELETE (delete all request) or UNINSTALL (set SOFTID to 0)
            'URL'      => $this->siteUrl,
            'SOFTID'   => $this->softid,
        ];

        //url-ify the data for the POST
        $fields_string = http_build_query($fields);

        //open connection
        $ch = curl_init();

        //set the url, number of POST vars, POST data
        curl_setopt($ch,CURLOPT_URL, $this->url);
        curl_setopt($ch,CURLOPT_POST, true);
        curl_setopt($ch,CURLOPT_POSTFIELDS, $fields_string);

        //So that curl_exec returns the contents of the cURL; rather than echoing it
        curl_setopt($ch,CURLOPT_RETURNTRANSFER, true); 

        //execute post
        $this->output = curl_exec($ch);
        return curl_exec($ch);

    }

    protected function jsonDecode(){

        if($this->output==''){ return; }
        $this->output = json_decode($this->output);
        
    }

    protected function saveOptions(){

        if($this->output==''){ return; }
        $o = $this->output;

        // sanitize the array first
        foreach($o as $k=>$v){

            //$opt[$k] = $v; // sanitize

            // add the option

        }
        

    }

    protected function haveToken(){
        

        // do I have a token?
        
    }

    protected function resetTime(){
        

        // Manage the reset of the requst with a transient
        
    }

    public function show(){

        return $this->output;

    }

}

$r = new RJinfoWave();
$r->wave();
//print_r( $r->toggle('ACTIVATE') );
//print_r( $r->toggle('DELETE') );
//print_r( $r->toggle('DEACTIVATE') );
//print_r( $r->toggle('ACTIVATE') );
//var_dump( $r->waveAtAPI() );