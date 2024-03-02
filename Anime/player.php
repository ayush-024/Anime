
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<script src="https://cdn77.coolserving,com/faa2876b.js"></script>
<script src="https://cdn,jsdelivr.net/npm/eruda"></script>
<title>
<?php echo $otaku; ?>
</title>

<script>
        document.addEventListener('contextmenu', function (e) {
            e.preventDefault();
        });
    </script>

</head>


    <style>
    body {
            margin: 0;
            padding: 0;
            font-family: 'Arial', sans-serif;
            background: linear-gradient(to right, #141e30, #243b55);
        }
        
        .search-button {
            margin-top: 50px;
            padding: 10px 20px;
            border-radius: 5px;
            font-size: 16px;
            background-color: #000000;
            color: white;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .search-button:hover {
            background-color: #000000;
        }
        
       .footerr{
    width: 100%;
    text-align: center;
    padding-top: 1.3rem;
    padding-bottom: 1.3rem;
    bottom: 0%;
    position: fixed;
    font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
    background: linear-gradient(to right, #141e30, #243b55);
    border-radius: 10px;
}

.footerr a{
    text-decoration: none;
    color: white;
    font-family: 'Arial', sans-serif;
}

@media only screen and (max-width: 766px) {
  
    .footerr {
        font-size: 15px;
    }
    }

        .movie-container {
            display: flex;
            justify-content: space-around;
            align-items: center;
            width: auto;
            background: linear-gradient(to left, #141e30, #243b55);
            padding: 10px;
            border-radius: 10px;
            margin-top: 5px;
          
        }

        .movie-info {
                        text-align: left;
                        
            flex-grow: 5;
            margin-left: 0px;
            color: white;
           
        }
        .butcon {
      text-align: center;
            padding: 10px;
            margin-top: 20px;
            border: 2px solid white ; 
            border-radius: 10px;
    }

        img {
            max-width: 250px; /* Ensure the image doesn't exceed its container's width */
            max-height: 200px; /* Set a maximum height for the image */
            height: auto;
            border-radius: 8px;
        }
        h2{
            font-size: 16px; /* Adjust the font size as needed */
        }
        
        p{ 
            font-size: 13px;
        }
        .video-container {
            position: relative;
            width: auto;
            padding-bottom: 56.25%; /* 16:9 aspect ratio (9 / 16 * 100) */
            border-radius: 10px;
        }
.description{
    font-size: 13px;
}       
    </style>
        <style>
        /* Style for the overlay */
     
        .        .hbut{
            text-align: left;
            padding: 20px;
            margin-top: 10px;
           
        }
                .searchbutton {
            margin-top: 10px;
            padding: 10px 10px;
            border-radius: 10px;
            font-size: 16px;
            background: grey;
            color: black;
            cursor: pointer;
            transition: background-color 0.3s;
            text-decoration: none;
            border: none;
            position: ;
        }
</style>

  <div class="hbut">
  <form action="/"> 
    <button class="searchbutton">Return to home</button></form>
</div>

 
 
 
 <div class="movie-container">
<?php $anime = $_REQUEST["otaku"]; 
?>


<?php

$url = "https://anitaku.to/category/$anime";
$html = file_get_contents($url);

// Assuming $info contains your HTML code

if ($html !== false) {
    $dom = new DOMDocument();
    libxml_use_internal_errors(true); // Disable warnings for invalid HTML

    // Load the HTML content into the DOMDocument
    $dom->loadHTML($html);
    $links = $dom->getElementsByTagName('a');

// Loop through each link and set href to blank
foreach ($links as $link) {
    $link->setAttribute('href', 'javascript:void(0)');
}
    // Create a DOMXPath object to navigate the DOM
    $xpath = new DOMXPath($dom);

    // Find the div with class "inner"
    $innerDiv = $xpath->query('//h1')->item(0);
    
    $ani_info = $xpath->query('//div[@class="anime_info_body_bg"]')->item(0);
    $info = $dom->saveHTML($ani_info); 

    if ($innerDiv) {
        // Get the HTML code of the div
        $nn= $dom->saveHTML($innerDiv);
       
 // Replace 'xxxx' with 'abcd' in the HTML code
$info = str_replace('h1', 'h2', $info);

    }
}
?>


<script src="https://animixplay.name/assets/lib/jquery.min.js" type="fe14d582cbc7f218ed2ef503-text/javascript"></script>

<link rel="stylesheet" type="text/css" href="https://animixplay.name/assets/style.min.css?m11?v=0.0000055">
<script type="fe14d582cbc7f218ed2ef503-text/javascript" src="https://animixplay.name/assets/v1.min.js?v=0.0000055" defer></script>

<script type="fe14d582cbc7f218ed2ef503-text/javascript" src="https://animixplay.name/assets/common.min.js?v=0.0000055" defer></script>

 </head>

<style>
    
  .title
  {
      font-size: 40px;
      font-weight: bold;
  }
    
    
</style>


<body>
<div id="coverlight" style="z-index:8"></div>


<div class="playerpage">
<div class="subpart eptitle">
<div id="eptitle"><span id="eptitleplace">No episode selected</span><span class="altsourcenotif">External Player</span></div></div>
<div id="loadcontainer2" style="display:none;overflow:hidden">
<div class="loadindicator"></div>
</div>
<div id="iframecontainer">
<iframe id="iframeplayer" allowfullscreen="true" scrolling="no" src="about:blank"></iframe>
</div>
<select id="srcselect" onchange="if (!window.__cfRLUnblockHandlers) return false; srcChange()" data-cf-modified-fe14d582cbc7f218ed2ef503-></select>
<div id="lowerplayerpage">
<div id="aligncenter">


<a id="animebtn"><svg stroke="currentColor" fill="none" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 24 24" height="25" width="25" id="foldersvg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 19a2 2 0 01-2-2V7a2 2 0 012-2h4l2 2h4a2 2 0 012 2v1M5 19h14a2 2 0 002-2v-5a2 2 0 00-2-2H9a2 2 0 00-2 2v5a2 2 0 01-2 2z"></path></svg></a>


<?php
// URL of the web page
$url = "https://animixplay.name/v1/$anime";

// Initialize cURL session
$ch = curl_init($url);

// Set cURL options
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Execute cURL session and get the HTML content
$html = curl_exec($ch);

// Close cURL session
curl_close($ch);

// Create a DOMDocument object and load the HTML content
$dom = new DOMDocument();
@$dom->loadHTML($html);

// Find the div with id "inner"
$innerDiv = $dom->getElementById('epslistplace');

// Check if the div is found
if ($innerDiv) {
    // Get the innerHTML of the div
    $innerHtml = $dom->saveHTML($innerDiv);
    echo $innerHtml;
} else {
    echo 'Error occured.Return to home and search again. Make sure not to refresh playing page.';
}
?>
<p>[ Do not refresh this page. ]</p>

</div>
</div>


<script src="https://animixplay.name/cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="fe14d582cbc7f218ed2ef503-|49" defer></script>

   <div class="butcon">    
  <?php
{
   
   echo "<div class='movie-info'>";
   echo "{$info}";
            }
   echo "</div>";
        ?>
        </div>
        <br/><br/><br/><br/>
    
</div></div>
 
    
<div class="footerr" style="margin-top: 20px;"><a>
🆂🆃🆁🅴🅼🅸🅾 &nbsp;|&nbsp;
© All rights reserved
<br/><br/>
𝙲𝚛𝚊𝚏𝚝𝚎𝚍 𝚋𝚢 ~𝙰𝙿𝚂</a>
</div>