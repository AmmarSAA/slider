<!DOCTYPE html>
<html>
<head>
    <title>Slide Generator</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/main.css">
    <script src="js/vendor/jquery-1.12.0.min.js"></script>
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="js/bootstrap.min.js"></script>

    <style>
    
    .ruet
    {
        background-color:#008040;
        border-bottom: 6px solid #004f27;
        height:50px;
        width:100px;
        color:#ffffff;
        font-weight: bold;
        font-size:18px;      
        text-align:center;
        border-radius:5px;
        padding:10px 20px 10px 20px;
    }

    .ruet:hover
    {
       background-color: #008040;
       border-bottom-width: 4px; 
    }

    a:link
    {
      color:#ffffff;
      text-decoration:none;
    } 

    .ruet:active
    {
        border-bottom-width:1px;
        background-color: #00a653;
    } 

    .sidenav {
        height: 100%;
        width: 0;
        position: fixed;
        z-index: 1;
        top: 0;
        left: 0;
        background-color: rgb(40,40,40);
        box-shadow: 5px 5px 5px grey;
        overflow-x: hidden;
        transition: 0.5s;
        padding-top: 60px;
    }

    .sidenav a {
        padding: 8px 8px 8px 32px;
        text-decoration: none;
        font-size: 18px;
        color: white;
        display: block;
        transition: 0.3s;
    }

    .sidenav a:hover, .offcanvas a:focus{
        color: white;
        background-color: #3F51B5;  
    }

    .sidenav .closebtn {
        position: absolute;
        top: 0;
        right: 20px;
        font-size: 30px;
        margin-left: 50px;
    }

    .nav
    {
       border-radius: 0px;
       background-color: #3F51B5;
       border:none;
    }

    .foot
    {
        background-color: rgb(40,40,40);
        padding: 20px;
        color: white;
        text-align: center;
        clear: left;
        max-width: 100%;
        margin-top:500px;
           
    }

    .bh
    {
        font-size:30px;
        cursor:pointer;
        color: white; 
        margin-left: 20px;
        padding:5px;

    }
    .ch
    {
        font-size: 25px; 
        margin-left:15px;
    }
    .bh:hover
    {
        background-color: black;
    }

    @media only screen and (max-width:400px)
    {
        .ch
        {
            font-size:20px;
            margin-left:2px;
        }
    }
    
    </style>
</head>
<body>
    <section id="main" style="margin-top:100px;">
        <div class="container">
            <header>
                <h1>Slide Generator</h1>
            </header>
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">  
                        <label for="bn"></label>   
                        <form action="includes/view.php" method="POST" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="">SR#</label>
                                <input type="number" class="form-control" name="faname" placeholder="Your SR#" required>
                            </div><!--<br>-->
                            <div class="form-group">
                                <label for="bn">Doctor Name:</label>
                                <input type="text" class="form-control" name="fname" placeholder="Doctor Name" required>
                            </div><!--<br>-->
                            <div class="form-group">
                                <label for="en">Qualificaiton:</label>
                                <input type="text" class="form-control" name="ename" placeholder="Qualificaiton" required>
                            </div><!--<br>-->
                            <div class="form-group">
                                <label for="">Timings:</label>
                                <textarea class="form-control" name="mname" placeholder="Timings"></textarea>
                            </div><!--<br>
                            <div class="form-group">
                                <label for="">Your Date Of Birth</label>
                                <input type="date" class="form-control" name="dname" placeholder="Your Date Of Birth (English)" required>
                            </div><br>
                            <div class="form-group">
                            <label for="">Your CNIC Number</label>
                            <input type="text"  class="form-control" name="nid" placeholder="Your ID Number (English)" required>
                            </div><br><br>-->
                            <div class="form-group">
                                <label for="">Your Digital Signature (English)</label>
                                <input type="text" class="form-control" name="si" placeholder="Your Digital Signature (English) " required>
                            </div><br><!--<br>-->
                            <div class="form-group">
                                <label for="">Upload Doctor's Picture</label>
                                <b></b> <input type="file" name="file" required>
                            </div><br>
                            <input type="submit" class="btn btn-success" name="" value="Submit">
                        </form>
                    </div>
                </div>
           </div>
        </div>
    </section>
    <footer class="foot">
        <center><p>Copyright &copy;2022<br>Developed By <a href="https://github.com/ammarsaa">Ammar S.A.A</a></p></center>
    </footer>
</body>
</html>
