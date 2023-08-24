<!DOCTYPE html>
<html>
<title>payment option</title>
<head>
<style>
body  {
  backdrop-filter: blur(3px);
  background-color: lightYellow;

}
input[type=submit] {
    padding:15px 30px; 
    background:#ccc; 
    border:0 none;
    cursor:pointer;
    -webkit-border-radius: 10px;
    border-radius:40px; 
}
h3 {
	text-align: center;
}
.flex-parent {
  display: flex;
}

.jc-center {
  justify-content: center;
}

button.margin-right {
  margin-right: 20px;
}
</style>
</head>
<body style="text-align:center">
<h1>Choose payment option</h1> 
    <div class="flex-parent jc-center">
    <form method="POST" action="cash.php">
      <input type="submit" value="Cash"/>
	  </form>
	      <form method="POST" action="card.php">
      <input type="submit" value="Card"/>
    </form>
    </div>
  </body>
</html>