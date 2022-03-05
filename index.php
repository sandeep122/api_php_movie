

<?php
$movie= $_POST['movie'];
#echo json_encode("$movie");]
#$movie="money heist";
$movie=str_replace(' ','%20',$movie);
$curl=curl_init();
#echo "$movie";exit;    
curl_setopt_array($curl,[CURLOPT_URL=>"https://mdblist.p.rapidapi.com/?s=".$movie,
CURLOPT_RETURNTRANSFER => true,
CURLOPT_FOLLOWLOCATION => true,
CURLOPT_ENCODING => "",
CURLOPT_MAXREDIRS => 10,
CURLOPT_TIMEOUT => 30,  
CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
CURLOPT_CUSTOMREQUEST => "GET",
CURLOPT_HTTPHEADER => [
    "x-rapidapi-host: mdblist.p.rapidapi.com",
    "x-rapidapi-key: 58953ca82amshff54863aa2d9305p193405jsnc6a5c76a2a03"
],
]);
$response=curl_exec($curl);
$err=curl_error($curl);
curl_close($curl);
if($err){
    echo "error";
}
else{
    echo json_encode("$response");
}


?>
