<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=1, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
 
 <!-- Latest compiled and minified CSS & JS -->
 <!--<link rel="stylesheet" media="screen" href="//netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
 <script src="//code.jquery.com/jquery.js"></script>
 <script src="//netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>-->
    <link rel="stylesheet" href="<?= base_url('node_modules/bootstrap/dist/css/bootstrap.min.css');?>">
    <link rel="stylesheet" href="<?= base_url('node_modules/font-awesome/css/font-awesome.min.css');?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/style-adv.css');?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url("assets/css/style.css");?>">
    <title>Document</title>
</head>
<body>
<?php 
    // $this->load->view('template/base/nav');
?>
<div class="container">
<?= 
   $view_content 
?>
</div>
<?php
    $this->load->view('template/base/contact');
?>
    
<?php 
    $this->load->view('template/base/footer');

?>
</body>
</html>