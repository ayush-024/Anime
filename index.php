<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="/styles.css">
    <title>Movie Search</title>

</head>
    <style>
        .search-box {
            display: none;
        }
        .search-button{
            display: ;
        }
    </style>

<body>

<div class="body1">
    <div class="search-container">
<h1>Find Your Favorite Media</h1> <button class="search-button" onclick="openSearchBox(1)">Find Movie/TV Show</button>
<button class="search-button" onclick="openSearchBox(2)">Find Anime</button>

<div id="searchBox1" class="search-box">
    <label for="searchInput1"><br/></label>
          <form action="/play.php" method="post">
 <input class="search-input" type="text" id="userInput" name="userInput" required placeholder="Enter correct Name or IMDB url">    <br /> 
    <button type="submit" class="search-button">Submit</button>
    </form>
</div>

<div id="searchBox2" class="search-box">
    <label for="searchInput2"><br/></label>
          <form action="/Anime/process.php" method="post">
  <input class="search-input" type="text" id="userInput" name="userInput" required placeholder="Enter Anime Name">   <br /> 
    <button type="submit" class="search-button">Submit</button>
    </form>
</div>

<script>
    function openSearchBox(boxNumber) {
        // Hide all search boxes
        document.querySelectorAll('.search-box').forEach(box => box.style.display = 'none');
        
        // Show the selected search box
        document.getElementById(`searchBox${boxNumber}`).style.display = 'block';
    }

    function search(boxNumber) {
        // Implement your search functionality here
        let searchTerm;
        if (boxNumber === 1) {
            searchTerm = document.getElementById('searchInput1').value;
        } else if (boxNumber === 2) {
            searchTerm = document.getElementById('searchInput2').value;
        }

        // Implement your search logic or perform an action with the searchTerm
        console.log(`Searching in box ${boxNumber} for: ${searchTerm}`);
    }
</script>
        <br/><br/><br/><br/>   
    </div></div>
    

    
    
<div class="footer bg-dark text-light">
🆂🆃🆁🅴🅼🅸🅾 &nbsp;|&nbsp;
© All rights reserved
<br/><br/>
𝙲𝚛𝚊𝚏𝚝𝚎𝚍 𝚋𝚢 ~𝙰𝙿𝚂
</div>

     </div>
