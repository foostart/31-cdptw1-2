<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

<div class="type-1982">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="col-md-6">
                    <div class="footer">
			             <a href="#">Shipping</a>
                        <a href="#">Privacy Policy</a>
                        <a href="#">Support</a>
                        <a href="#">Contact</a>	
                </div>   
            </div>
                <div class="col-md-6">
                    <p style="text-align: right;">Copyright 2019. All rights reserved. Design by 
                    <a href="#">Joommasters.com</a></p>
        </div>
    </div>
</div>