<html>
<head>
<style>

.header{
margin: auto;
max-width: 1000px;

display: flex;
justify-content: space-between;
margin-top: 100px;



}
.cont{

     
background-color: white;
padding: 10px 10px;
  box-shadow: 2px 3px 12px #999;
}

.header img{
       width: 300px;

     }

     .cont p{
        font-size: 20px;
        font-weight: 300px;
        text-transform: capitalize;

     }

     .head{
      background-color: #f4ede4;
        margin:auto;
        margin-top: 100px;
        padding:40px;
        text-align:center;
       
        

     }

     .conte{
          display:flex;
          max-width: 1000px;
    margin: auto;
   justify-content:space-between;
    text-align: center;

          
        
     }
    .container{
      margin-top:30px;
      max-width: 200px;
    }
     .container h2{
   
      text-align:left;
      font-size:40px;
      margin: 0;
     }

     .container p{
     
      text-align:left;
      font-size: 17px;

     }

    

  </style>


</head>
<body>
<?php

$arr=['h2','img','p'];

$headings=['Blog','Blog','Resources'];
$p=['why nearly 80% of reference','slack connect of product lacking','refer the problems'];


$htmlstring = '';
$htmlstring.='<div class="header">';
for($i=0;$i<3;$i++){
  $htmlstring.='<div class="cont">';
  $htmlstring.= '<img src="../class-27-09-2022/img1.jpg"/>';
 $htmlstring .='<h2>' .$headings[$i]. '</h2>';
 $htmlstring .='<p>' .$p[$i]. '</p>';

 $htmlstring.='</div>';

}

$htmlstring.='</div>';



 echo $htmlstring;



 $arr=['h2','img','p'];

$headings=['4X','64%','2x'];
$p=['faster deal cycles for a sales team','decrease in backlog tickets for a customer support team','faster close in company acquisition for a business development team'];


$htmlstring = '';
$htmlstring.='<div class="head">';
$htmlstring.='<h2>Get more done in Slack Connect</h2>';
$htmlstring.='<p>Whether your working with vendors or sealing deals with a client, Slack Connect is here to help</p>';
$htmlstring.='<div class="conte">';
for($i=0;$i<3;$i++){
  $htmlstring.='<div class="container">';
   
 
 $htmlstring .='<h2>' .$headings[$i]. '</h2>';

 $htmlstring .='<p>' .$p[$i]. '</p>';

 $htmlstring.='</div>';

}
$htmlstring.='</div>';
$htmlstring.='</div>';



 echo $htmlstring;
?>




</body>







    </html>