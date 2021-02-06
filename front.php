<?php
  $id = $_GET['q'];
  $jsonfile = file_get_contents("notes/$id.json") or die('cannot open the file');
  $json = json_decode($jsonfile, true);
  $sText = $json['sNote'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Gloria+Hallelujah&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Permanent+Marker&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/loadani.css">
    <link rel="stylesheet" href="css/css.css">
    <link rel="stylesheet" href="css/fornt.css">
    <title>Anonymous Notes</title>
    <script>
    //ajex for those maderchod loading event bohout hi karab lag raha hai wo maderchod
    
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function() {
      console.log("State: ", this.readyState, "Status: ", this.status);
      if (this.readyState == 4 && this.status == 200) {
        var url = window.URL || window.webkitURL;
        document.querySelector("#postpng").src = url.createObjectURL(this.response);
        console.log(url.createObjectURL(this.response));
        document.getElementById("loading").style = "display:none";
        document.getElementById("main").style = "display:block/inline";
      }else if(this.readyState == 4){
        document.getElementById("loading").style = "display:none";
        document.getElementById("main").style = "display:block/inline";
      }
      else {
          
      }
    }
    xhr.open('GET', 'https://yourbuddyxyz.000webhostapp.com/post.png');
    xhr.responseType = 'blob';
    xhr.send();
    //
  </script>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#"><b>AnonymousNotes</b></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav" aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
    <!-- Collapsible content -->
    <div class="collapse navbar-collapse" id="basicExampleNav">

      <!-- Links -->
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="https://yourbuddyxyz.000webhostapp.com/index.php">Home
            <span class="sr-only">(current)</span>
          </a>
        </li>
      </ul>
    </div>
   </nav>
   <div id="loading" class="loading">
    <div class="box loadingio-spinner-double-ring-4x3bmhfhz0s">
      <div class="ldio-detv305mu">
        <div></div>
        <div></div>
        <div><div></div></div>
        <div><div></div></div>
      </div>
    </div>
  </div>
  <div id="main" class="container mt-4" style="display:none;">
  <div class="parent"><img id="postpng" src="post.png" style="width:100%" alt=""></div>
  <div class="container2" >
      <div class="textarea" style="padding-bottom: 0px;">
      <textarea readonly class="uText" id="text" name="" maxlength="512" wrap rows="6" cols="5" style="width:100%"><?php echo $sText?></textarea>
      </div>
    </div>
    <div class="container">
      <div class="row mt-4">
        <div class="col-6">
          <a class="notes-btn btn btn-lg btn-block box-shadow bg-dark text-light" href="https://yourbuddyxyz.000webhostapp.com/posts.php?q=<?php echo $id?>" >View Notes</a>
        </div>
        <div class="col-6"><a class="notes-btn btn btn-lg btn-block box-shadow bg-dark text-light" href="https://yourbuddyxyz.000webhostapp.com/newpost.php?q=<?php echo $id?>">Post</a></div>
      </div>
    </div>
    
  </div>
  
  <footer id="bottom-footer" class="page-footer font-small bg-light" >

    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">© 2020 Copyright:
      <a href="https://yourbuddyxyz.000webhostapp.com/index.php">Anonymous Notes</a>
    </div>
    <!-- Copyright -->

  </footer>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>  
</body>
</html>