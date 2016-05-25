<?php
	$requireFileDir = scandir($_SERVER["DOCUMENT_ROOT"] . "/4/8/inc/");		
    foreach ($requireFileDir as $file)
    {
        if($file != '.' && $file != '..')
        {
            require_once($file);
        }
    }