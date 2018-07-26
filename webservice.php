<php

$ws = new SoapClient('http://61.47.2.90/www/webservice/Service1.asmx?wsdl',array('trace'=>true));
try{
	$param = array('UserName'=>'santi','Password'=>'santi');
	$result = $ws->GetData($param)->CheckloginResult;
}catch(SoapFault $ex) {
	print &ex;

}
echo "result :" . $result;

?>