<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    


<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">


 
<script>
        document.addEventListener('contextmenu', function (e) {
            e.preventDefault();
        });
</script>   
    
    <title>Anime Search</title>

    <style>
    body{
            margin: 0;
            padding: 0;
            font-family: 'Arial', sans-serif;
            backgroun: linear-gradient(to bottom, #243b55, #141e30);
            max-width: 100%;
            background: #141e30;
            
        }
        
       .foot{
    width: 100%;
    text-align: center;
    padding-top: 1.3rem;
    padding-bottom: 1.3rem;
    bottom: 0%;
    position: fixed;
    font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
    backgroun: linear-gradient(to left, #243b55, #141e30);
    border-radius: 10px;
    background: #243b55;
    
}

.foot a{
    text-decoration: none;
    color: white;
    font-family: 'Arial', sans-serif;
    
}

@media only screen and (max-width: 766px) {
  
    .foot {
        font-size: 13px;
    }
    }
        h2{
            font-size: 16px; /* Adjust the font size as needed */
        }
        
        p{ 
            font-size: 11px;
            text-decoration: none;
        }

.imagecard
        {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            background-size: cover;
            background-position: center center;
            border-radius: 10px;
            height : 220px;
    transition: 400ms;
    margin-bottom: 8px;
    margin-top: 10px;
    
    
    }
    
p{
    margin-top: -1px;
    colo :#1d94a3;
    color: gold;
    font-weight: bold;
}
a{
    color: orange;
}
    
 .card{
     height: 310px;
     backgroun: transparent;
     border-radius: 10px;
     margin-top: 10px;
     background: linear-gradient(to bottom,#141e30,#141e30,#141e30,#141e30,#243b52);
     
 }  
.card img{
    max-width: 90%;
}   

</style>


</head>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $search = $_POST["userInput"];
}
?>



<div class="container-fluid">
<div class="row">

<?php

$url = "https://anitaku.to/filter.html?keyword=$search&sort=title_az";
$html = file_get_contents($url);

if ($html !== false) {
    $dom = new DOMDocument();
    libxml_use_internal_errors(true); // Disable warnings for invalid HTML

    // Load the HTML content into the DOMDocument
    $dom->loadHTML($html);

    // Create a DOMXPath object to navigate the DOM
    $xpath = new DOMXPath($dom);

    // Find the div with class "inner"
    $innerDiv = $xpath->query('//ul[@class="items"]')->item(0);

    if ($innerDiv) {
        // Get the HTML code of the div
        $innerDivCode = $dom->saveHTML($innerDiv);

        // Replace 'xxxx' with 'abcd' in the HTML code
        $innerDivCode = str_replace('/category/', "player.php?otaku=", $innerDivCode);
        
       $innerDivCode = str_replace('<li>', '<div class="col-6 col-sm-2" margin-top="10px">', $innerDivCode);

        $innerDivCode = str_replace('</li>', '</div>', $innerDivCode);
        
        $innerDivCode = str_replace('class="img"', 'class="card"', $innerDivCode);
        
        $innerDivCode = str_replace('<ul class="items">', '', $innerDivCode);
        $innerDivCode = str_replace('</ul>', '', $innerDivCode);
        
        $innerDivCode = str_replace('<img', '<div class="text-center"><img class="imagecard"', $innerDivCode);
        $innerDivCode = str_replace('</a>
				</div>', '</a>', $innerDivCode);
				
	   $innerDivCode = str_replace('</p>
			</div>', '</p></div></div></div>', $innerDivCode);
        
        
        
        // Echo the modified HTML code
        echo $innerDivCode ;
    } 
} else {
    echo "Failed to retrieve the webpage.";
}
?>

</div></div>
<br/><br/><br/><br/><br/><div class="foot text-light">
🆂🆃🆁🅴🅼🅸🅾 &nbsp;|&nbsp;
© All rights reserved
<br/><br/>
𝙲𝚛𝚊𝚏𝚝𝚎𝚍 𝚋𝚢 ~𝙰𝙿𝚂
</div>


     

     