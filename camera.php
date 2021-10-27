<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FarmersAll</title>
    <link rel="stylesheet" href="Camera.css">
    <link rel="stylesheet" href="style.css">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
<div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
          <a class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
             <!-- <img src="images/logO.png" width="40px" alt=""> -->
           <!-- <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10 text-white p-2 bg-indigo-500 rounded-full" viewBox="0 0 24 24">
              <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
            </svg>-->
            <!--<span class="ml-3 text-xl"><strong>F</strong>armers<strong>A</strong>ll</span>-->
            <img class="title" src = "farmersall.jpg">
          </a>
          <nav class="md:ml-auto flex flex-wrap items-center text-base justify-center">
            <a href="Home.html" class="mr-5 hover:text-gray-900">Home</a>
            <a href="about.html" class="mr-5 hover:text-gray-900">About</a>
            <a href="contact.html" class="mr-5 hover:text-gray-900">Contact</a>
            <a href="form.html" class="mr-5 hover:text-gray-900">Form</a>
            <a href="camera.php" class="mr-5 hover:text-gray-900">Camera</a>
          </nav>
          <!--  <button class="inline-flex items-center bg-gray-100 border-0 py-1 px-3 focus:outline-none hover:bg-gray-200 rounded text-base mt-4 md:mt-0"i>Logn
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-1" viewBox="0 0 24 24">
              <path d="M5 12h14M12 5l7 7-7 7"></path>
            </svg>
          </button>-->
        </div>
      

       <div class="url-container">
            <form method="post">
            Enter URL<br>
            <input type="text" name="textdata" id ="urlInput"><br>
            <input type="submit" name="submit" id ="submit" >
            </form> 
        </div>
</body>
</html>

<?php
if(isset($_POST['textdata']))
{
$data=$_POST['textdata'];
$fp = fopen('D:\WorkSpace\Pythonprograms\Pytextfiles\hel.txt', 'a');
fwrite($fp, $data);
fclose($fp);
}
?>
        