<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ProgressBar</title>
    <style>
        .progressBar-container{
            border: black 5px solid;
            width: 25%;
        }
        .progressBar{
            height: 10px;
            width:<?php echo $progress.'%'?> ;
            background-color: green;
        }
    </style>
</head>