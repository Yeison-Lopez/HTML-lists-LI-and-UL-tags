<!DOCTYPE html>
<html lang="es">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <title>STORE</title>


</head>

<body class="home">

  <!---->

<ul id="list">
</ul>

<a onclick="addLIelements()">Press me </a>

<script type="text/javascript">

function addLIelements(){
  var b={};
  var d={};
  var e={};
  var c="list_element"
  var ul= document.getElementById("list");
  for(j=1;j<=10;j++){
    b['li_'+j]=document.createElement("li");
    b['li_'+j].setAttribute("class","page-item");
    b['li_'+j].setAttribute("id",c.concat(j));
    b['li_'+j].appendChild(document.createTextNode(j));
    ul.appendChild(b['li_'+j]);
    //Adding additional tags to the li created
    d['ain'+j]=document.getElementById(c.concat(j));
    e['a'+j]=document.createElement("a");
    e['a'+j].setAttribute("class","page-link");
    e['a'+j].setAttribute("onclick","test("+j+","+j+")");
    d['ain'+j].appendChild(e['a'+j]);
  }
}

</script>


</body>
</html>
