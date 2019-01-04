<?php 
function http_request($url){
        $ch = curl_init(); 
    curl_setopt($ch, CURLOPT_URL, $url);  
    curl_setopt($ch,CURLOPT_USERAGENT,'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.13) Gecko/20080311 Firefox/2.0.0.13');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
    $output = curl_exec($ch); 
    curl_close($ch);      
    return $output;
}

$profile = http_request("test666999.herokuapp.com/all");
$profile = json_decode($profile, TRUE);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Curl Data JSON</title>
</head>

<body>
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
