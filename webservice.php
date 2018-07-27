<?php 
header('Content-Type: text/plain'); 

try { 
            $options = array( 
                'soap_version'=>SOAP_1_1, 
                'exceptions'=>true, 
                'trace'=>1, 
                'cache_wsdl'=>WSDL_CACHE_NONE 
            ); 
            $client = new SoapClient('http://61.47.2.90/www/webservice/ServiceJson.asmx?wsdl', $options); 
    // Note where 'Get' and 'request' tags are in the XML 
            
        } catch (Exception $e) { 
            echo "<h2>Exception Error!</h2>"; 
            echo $e->getMessage(); 
        } 

//echo 'running HelloWorld :';                                      

try { 
    $param = array('UserName'=>'santi','Password'=>'santi');
   $response=$client->GetData($param); 
   
   
} 
catch (Exception $e) 
{ 
    echo 'Caught exception: ',  $e->getMessage(), "\n"; 
} 

print_r($response); 
?> 
