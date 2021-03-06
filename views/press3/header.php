<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Home</title>
    <link href="events3/css/bootstrap.min.css" rel="stylesheet">   
    <link href="events3/css/stylish-portfolio.css" rel="stylesheet">
    <link href="events3/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">



</head>

<body>

    <!-- Navigation -->
    <a id="menu-toggle" href="#" class="btn btn-dark btn-lg toggle"><i class="fa fa-bars"></i></a>
    <nav id="sidebar-wrapper">
        <ul class="sidebar-nav">
            <a id="menu-close" href="#" class="btn btn-light btn-lg pull-right toggle"><i class="fa fa-times"></i></a>
            <li>
                <a href="#top" onclick=$("#menu-close").click();>Home</a>
            </li>
            <li>
                <a href="#product" onclick=$("#menu-close").click();>Our Products</a>
            </li>
            <li>
                <a href="#maps" onclick=$("#menu-close").click();>Store Location</a>
            </li>
            <li>
                <a href="/mockups/devtest3/email2/" onclick=$("#menu-close").click();>Contact Us</a>
            </li>
        </ul>
    </nav>
