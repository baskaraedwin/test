<?php 
// -------------------- dasar curl----------------
   /* // persiapkan curl
    $ch = curl_init(); 

    // set url 
    curl_setopt($ch, CURLOPT_URL, "test666999.herokuapp.com/all");

    // return the transfer as a string 
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 

    // $output contains the output string 
    $output = curl_exec($ch); 

    // tutup curl 
    curl_close($ch);      

    // menampilkan hasil curl
    echo $output;
    */
// -------------------- dasar curl----------------

function http_request($url){
    // persiapkan curl
    $ch = curl_init(); 

    // set url 
    curl_setopt($ch, CURLOPT_URL, $url);
    
    // set user agent    
    curl_setopt($ch,CURLOPT_USERAGENT,'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.13) Gecko/20080311 Firefox/2.0.0.13');

    // return the transfer as a string 
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 

    // $output contains the output string 
    $output = curl_exec($ch); 

    // tutup curl 
    curl_close($ch);      

    // mengembalikan hasil curl
    return $output;
}

$profile = http_request("test666999.herokuapp.com/all");

// ubah string JSON menjadi array
$profile = json_decode($profile, TRUE);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Curl Data JSON</title>
</head>

<body>

<!--<p>
<?php echo print_r($profile[0]["name"]); ?><br>
<?php echo print_r($profile[0]["lat"]); ?><br>
<?php echo print_r($profile[0]["long"]); ?><br><br>
</p>-->
<div id="myDIV" class="header" align="center">
<form id="myInput" name="form1" onsubmit="return false">
  <label for="select1"></label>
  <select id="select1" name="select1">
    <option value="<?php echo print_r($profile[0]["name"]); ?>"><?php echo print_r($profile[0]["name"]); ?></option>
  	<option value="<?php echo print_r($profile[1]["name"]); ?>"><?php echo print_r($profile[1]["name"]); ?></option>
  	<option value="<?php echo print_r($profile[2]["name"]); ?>"><?php echo print_r($profile[2]["name"]); ?></option>
  	<option value="<?php echo print_r($profile[3]["name"]); ?>"><?php echo print_r($profile[3]["name"]); ?></option>
  	<option value="<?php echo print_r($profile[4]["name"]); ?>"><?php echo print_r($profile[4]["name"]); ?></option>
  	<option value="<?php echo print_r($profile[5]["name"]); ?>"><?php echo print_r($profile[5]["name"]); ?></option>
  	<option value="<?php echo print_r($profile[6]["name"]); ?>"><?php echo print_r($profile[6]["name"]); ?></option>
  </select> <br>
  <input type="submit" value="add more" onclick="newElement()">

</form>
</div>

<br>
<ul id="myUL">
  <li>mulai</li>
</ul>

<script>
// Create a "close" button and append it to each list item
var myNodelist = document.getElementsByTagName("LI");
var i;
for (i = 0; i < myNodelist.length; i++) {
  var span = document.createElement("SPAN");
  var txt = document.createTextNode("\u00D7");
  span.className = "close";
  span.appendChild(txt);
  myNodelist[i].appendChild(span);
}

function newElement() {
  var li = document.createElement("li");
  var inputValue = document.getElementById("select1").value;
  var t = document.createTextNode(inputValue);
  li.appendChild(t);
  if (inputValue === '') {
   
  } else {
    document.getElementById("myUL").appendChild(li);
  }
  document.getElementById("myInput").value = "";

  var span = document.createElement("SPAN");
  var txt = document.createTextNode("\u00D7");
  span.className = "close";
  span.appen
  li.appendChild(span);

  for (i = 0; i < close.length; i++) {
    close[i].onclick = function() {
      var div = this.parentElement;
      div.style.display = "none";
    }
  }
}
</script>



</body>
</html>


