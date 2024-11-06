<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        body{
  background:grey;
}

#box{
  width:400px;
  height:400px;
  background:orange;
  margin:0 auto;
  margin-top:3%;
  overflow:hidden;
}
    </style>
</head>

<body>
<div id = "box">Hello i am a box and i will show and hide</div>
  <button onclick="slideUp('box');">Slide Up</button>
  <button onclick="slideDown('box');">Slide Down</button>
</html>

</body>

<script>
function slideUp(el) {
  var elem = document.getElementById(el);
  elem.style.transition = "all 2s ease-in-out";
  elem.style.height = "0px";
}
function slideDown(el) {
  var elem = document.getElementById(el);
  elem.style.transition = "all 2s ease-in-out";
  elem.style.height = "400px";
}
</script>
</html>