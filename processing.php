<?php

    if (!empty($_POST['word'])){
        require 'incl/wordProccesing.incl.php';
        addWord($_POST['word']);
        header('Location: index.php');
        exit;
    }
    else{
        header('Location: index.php');
        exit;
    }

    