<?php 
$IDamount = "10"; // <- Change to last ID number
include "conn.php";
header("Content-type: text/css; charset: UTF-8");

    
?>
*,
*:before,
*:after{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
    font-family: "Poppins",sans-serif;
    font-size: 45px;
    font-weight: 500;
}
body{
    background-color: #c90d18;
    height: 100vh;
    display: grid;
    place-items: center;
}
.wrapper{
    box-sizing: content-box;
    background-color: #ffffff;
    height: 70px;
    padding: 50px 30px;
    display: flex;
    border-radius: 200px;
    box-shadow: 0 20px 25px rgba(0,0,0,0.2);
}
.words{
    overflow: hidden;
}
span{
    display: block;
    height: 100%;
    padding-left: 10px;
    color:#c90d18;
    animation: spin_words 10s infinite;
}
