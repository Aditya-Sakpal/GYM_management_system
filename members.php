<?php
include 'config.php';
?>




<html >

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!--website background ke liye-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossrigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap rel='stylesheet' ">
    <link rel="stylesheet" type="text/css" href="coach.css">
    <!--website background links end-->

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
   
    
    
    <!--fonts ke liye-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/fontawesome.min.css" integrity="sha512-RvQxwf+3zJuNwl4e0sZjQeX7kUa3o82bDETpgVCH2RiwYSZVDdFJ7N/woNigN/ldyOOoKw8584jM4plQdt8bhA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" /> 
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/regular.min.css" integrity="sha512-aNH2ILn88yXgp/1dcFPt2/EkSNc03f9HBFX0rqX3Kw37+vjipi1pK3L9W08TZLhMg4Slk810sPLdJlNIjwygFw==" crossorigin="anonymous" referrerpolicy="no-referrer" /> 

<link rel="stylesheet" type="text/css" href="members.css">
<!--fonts over-->
    <style>
    
    body {


        /* background-image: url('gymbackground.jpg'); */
        /* <img src="gymbackground.jpeg" width:"500" height:"500"> */
        /* background-repeat: no-repeat;
        background-size: cover;
        background-attachmentfixed;
        background-size: 100% 900%; */
        /* width: 50px;  */
        /* height:100vh; */

    }
    h1{
    font-size: 63px;
    margin-bottom: 25px;
    /* background-color: black; */
    margin-top: 0%;
    color:silver;
    font-family: arial;
    text-align: center;
    position:absolute;
    bottom:410px;
    left:430px;
    /* margin-right:400px; */
    }
.t1{
    width:60%;
    margin-left:auto;
    margin-right:auto;
    font-size:20px;
    border-collapse:collapse;
    box-shadow:0 20px 20px #ABB289;
    border-radius:8px 8px 6px 6px;
    overflow:hidden;
    margin-left:auto;
    margin-right:auto;
    position:absolute;
    bottom:200px;
    left: 300px;
    opacity: 0.9;
}
.t1 thead tr{
    font-style:bold;
    font-weight:lighter;
    text-align:right;
    font-size:25px;
    font-weight:bolder;
    color:black;
   background-color:white;
   

    /* background-image:linear-gradient(rgba(0,0,0,0)0%,rgba(0,0,0,1)100% ); */
}
.t1 th ,.t1 td{
padding: 15px;
}
.t1 tr{
    padding-left:20px;
}
.t1 th{
    text-align:center;
}

.t1 tbody{
    text-align:center;
}
.t1 tbody tr:nth-child(even){
    /* background-color:#eee; */
    background-color:white;
}
.t1 tbody tr:nth-child(odd){
    /* background-color:#fff; */
    background-color:white;
}
.t1 tbody tr:last-of-type{
    border-bottom:6px solid;
}
.t1 tbody tr:hover{
    color:light-blue;
    font-weight:bold;
    border-top:2px solid white;
    border-bottom:2px solid white;
    cursor:progress;
    text-transform: uppercase;
}
/* th{
    float:left;
    justify-content:center;
    display:inline-block;
    margin:0px;
} */

/* .navbar{
        background-color: black;
        height: 100px;
        width: 350px;
        font-weight:lighter;
        
    } */
 
/* .navbar ul{

    padding-top: 20px;
    padding-left: 250px;
  
}  
.navbar ul li{
    list-style-type: none;
    display:inline-block;
    padding:10px 20px;
   
    
}
.navbar ul li a{
    color:rgba(rgb(255, 255, 255));
    font-weight: lighter;
    font-size: 20px;
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    color: white;
   
}

.navbar ul li a:hover{
    color:rgb(125, 74, 227);
    transition: .1s;
    
} */



/*testing css* */    
* {
    box-sizing: border-box;
  }
  
  body {
    margin: 0px;
    padding:0px;
    font-family: 'segoe ui';
    background-image:url(login.jpg);
  }

 nav {
        height: 0px;
        width: 100%;
        background-image: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6));
        background-size: cover;
        background-position: center;
        /* padding-bottom: 1000px; */
        float: inline-block;
        position: absolute;
        /* padding-left: 300px; */
        background-image:url(login.jpg);
        height: 10px;
    }

    nav ul {
        /* padding-left: 200px; */
        padding-top: 20px;
        padding-left: 250px;
        /* padding:10px 20px;*/
        margin: 0;
        padding: 0;

    }

    nav ul li {
        list-style-type: none;
        display: inline-block;
        padding: 10px 20px;
        height: 50px;
    }

    nav ul li a {
        color: rgba(rgb(255, 255, 255));
        font-weight: lighter;
        font-size: 20px;
        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        color: white;
        width: 100px;
        display: block;
        padding: 25px 20px;
    }

    nav ul li a:hover {
        color: rgb(125, 74, 227);
        transition: .1s;
    }

    

    /* *footer css */

    footer {
        position: relative;
        width: 100%;
        height: 300px;
        background: #000000;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        margin-top :700px;
    }

    footer p:nth-child(1) {
        font-size: 30px;

        color: white;
        margin-bottom: 20px;
        font-weight: lighter;
    }

    footer p:nth-child(2) {
        font-size: 15px;
        color: white;
        margin-bottom: 20px;
        font-weight: lighter;
    }

    footer p :end {
        color: white;
        font-size: 17px;
        width: 500px;
        text-align: center;
        line-height: 26px;
    }

    .social {
        display: flex;
    }

    .social a {
        width: 45px;
        height: 45px;
        display: flex;
        align-items: center;
        justify-content: center;
        background: #ffffff;
        border-radius: 50%;
        margin: 22px 10px;
        color: #ffffff;
    }

    .social a:hover {
        transform: scale(1.3);
        transition: .3s;
    }

    span {
        color: #f9004d;
    }
    </style>
</head>

<body>
<!-- <div class="main">    <div style="width:200"> -->

<!--test nav-->
<!-- <div class="nav">
       <!--logo-->
        <!--toggle button for mobile-->
        
        <!-- <div class="nav-links">
            <ul>
        <li><a href="#" target="_blank">Home</a></li>
          <li><a href="#" target="_blank">About</a></li>
          <li><a href="#" target="_blank">Services</a></li>
          <li><a href="#" target="_blank">Portfolio</a></li>
         
          


            <a class="icon">
            <i class="fab fa-twitter"></i>
            <i class="fab fa-linkedin"></i>
            <i class="fab fa-youtube"></i>

          </a>
            </ul>
        </div>
      </div> -->

      <nav class="nav">

<ul>
    <li><div class="idk"><img src="newgymlogo2.png" class="gymlogo" width="100" height="100"></div></li>
    <!-- <li><a>mkc</a></li> -->
    <li><a href="admin-login.php">HOME</a></li>
    <li><a href="biling.php">BILING</a></li>
    <li><a href="services.php">SERVICES</a></li>
    <li><a href="coach.php">COACHES</a></li>
    <li><a href="plan.php">PLANS</a></li>
    <li><a href="receptionist.php">SUPPLEMENTS</a></li>
</ul>
</nav>



<!--test nav end-->
    

    <!--navabar start-->
     <!-- <div>
       
        <nav class="nav" navbar-custom>
             <img src="gymlogo3.png" alt="gym logo" width="200" height="200">
            <ul>

                <li><a href="biling.php">BILING</a></li>
                <li><a href="coach.php">COACHES</a></li>
                <li><a href="members.php">MEMBERS</a></li>
                <li><a href="receptionist.php">SUPPLEMENTS</a></li>
            </ul>
        </nav>


    <!-- </div>    -->

    <!-- <nav class="navbar navbar-expand-lg navbar-light bg-light">
  
 
    <div class="navbar-nav">
        
    <a class="nav-item nav-link active" href="admin-login.php">HOME<span class="sr-only">(current)</span></a>
     <a class="nav-item nav-link" href="biling.php">BILING</a>
    <a class="nav-item nav-link" href="coach.php">COACHES</a>
    <a class="nav-item nav-link" href="receptionist.php">SUPPLEMENTS</a>
     
    </div>
  
</nav> -->


    <!--navabar end-->

<!-- 
    // if($resultCheck > 0){
//     while($row=mysqli_fetch_assoc($result)){
//         echo $row['name'] . "<br>";
//     }

// } -->





    
    <div class="main-div">
        <h1>LIST OF ALL MEMBERS</h1>
        <div class="table-responsive">
            <table class="t1">
                <thead>
                    <tr>
                        <!-- <th>    </th> -->
                        <th> ID</th>
                        <th> NAME</th>
                        <th> PERIOD </th>
                        <th> AMOUNT </th>
                        <!-- <th>operation</th> -->
                    </tr>
                </thead>
                <tbody>
                <?php
$selectquery="SELECT * FROM biling ";
$query=mysqli_query($connection,$selectquery);
// $nums=mysqli_num_rows($query);


while($res=mysqli_fetch_array($query)){
   
?>
<tr>
    
<!-- <td></td> -->
<td class="bc"><?php echo $res['id']; ?></td>
<td><?php echo $res['name']; ?></td>
<td><?php echo $res['period']; ?></td>
<td><?php echo $res['amount']; ?></td>
<!-- <td colspan="2"><i class="fa fa-edit" aria-hidden="true"></i></td> -->
<!-- <td><i class="fa fa-trash" aria-hidden="true"></i></td> -->

</tr>
<?php
}
?>



                    
                    </tbody>

            </table>
        </div>

    </div>




    <footer>
        <p>MUSCLE MANUFACTURER</p>
        <p>OUR SOCIAL MEDIA</p>
        <div class="social">
            <a href="https://www.facebook.com/aditya.sakpal.792740">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                    href="https://www.instagram.com/aditya_sakpal123/">
                    Font Awesome Pro 6.2.0 by @fontawesome - https://fontawesome.com License -
                    https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc.
                    <path
                        d="M504 256C504 119 393 8 256 8S8 119 8 256c0 123.78 90.69 226.38 209.25 245V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.28c-30.8 0-40.41 19.12-40.41 38.73V256h68.78l-11 71.69h-57.78V501C413.31 482.38 504 379.78 504 256z" />

                </svg></a>

            <a href="https://www.instagram.com/aditya_sakpal123/"><svg xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 448 512">
                    <!--! Font Awesome Pro 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                    <path
                        d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z" />
                </svg></a>

            <a href="https://twitter.com/KINGAD33013413"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                    <!--! Font Awesome Pro 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                    <path
                        d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z" />
                </svg></a>

        </div>
        <span>COPYRIGHT BY ADITYA</span>
    </footer>
    </div>


    
</body>
</html>