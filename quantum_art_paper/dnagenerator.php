<a href = "editor.php">editor.php</a>
<br/>
<pre>
<?php

    $files = scandir(getcwd());
    $iconfiles = scandir(getcwd()."/iconsymbols");
    $phpfiles = scandir(getcwd()."/php");
    $datafiles = scandir(getcwd()."/data");
    $figurefiles = scandir(getcwd()."/figures");

    $htmlfiles = [];
    foreach($files as $value){
        if(substr($value,-5) == ".html" || substr($value,-3) == ".md"){
            array_push($htmlfiles,$value);
        }
    }

    $dna = json_decode("{}");
    $dna->html = $htmlfiles;


    $dna->iconsymbols = [];
    foreach($iconfiles as $value){
        if($value{0} != "."){
            array_push($dna->iconsymbols,$value);
        }
    }



    $dna->data = [];
    foreach($datafiles as $value){
        if($value{0} != "."){
            array_push($dna->data,$value);
        }
    }

    $dna->figures = [];
    foreach($figurefiles as $value){
        if($value{0} != "."){
            array_push($dna->figures,$value);
        }
    }

    
    $dna->php = [];
    foreach($phpfiles as $value){
        if($value{0} != "."){
            array_push($dna->php,$value);
        }
    }


    echo json_encode($dna,JSON_PRETTY_PRINT);

    $file = fopen("data/dna.txt","w");// create new file with this name
    fwrite($file,json_encode($dna,JSON_PRETTY_PRINT)); //write data to file
    fclose($file);  //close file

?>
</pre>
