<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="style.css" rel="stylesheet" type="text/css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="script.js" type="text/javascript"></script>
  <title>PHP File Upload</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
</head>
<body class="bg-gray-900" style="height:100%;">
  <header class="text-gray-400 bg-gray-900 body-font">
  <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
    <a class="flex title-font font-medium items-center text-white mb-4 md:mb-0">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10 text-white p-2 bg-green-500 rounded-full" viewBox="0 0 24 24">
        <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
      </svg>
      <span class="ml-3 text-xl">PDF File Converter</span>
    </a>
  </div>
</header>
<section class="text-gray-400 bg-gray-900 body-font">
<form class="grid place-items-center" method="POST" action="upload.php" enctype="multipart/form-data">
  <div class="container mx-auto flex flex-col px-5 py-24 justify-center items-center">
     <h1 class="title-font sm:text-4xl text-3xl mb-10 font-medium text-white">Convert Your Files in PDF within Seconds</h1>
      <div class="flex w-full justify-center items-end">
      <div class="container" >
            <input type="file" name="file" id="file">

            <!-- Drag and Drop container-->
            <div class="upload-area"  id="uploadfile">
                <h1>Drag and Drop file here<br/>Or<br/>Click to select file</h1>
            </div>
        </div>
      </div>
      <button type="submit" onClick="process()" id="btn" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing Order"  name="uploadBtn" value="Upload" class="btn inline-flex mt-10 text-white bg-green-500 border-0 py-2 px-6 focus:outline-none hover:bg-green-600 rounded text-lg">Upload</button>
      <?php
if (isset($_SESSION['message']) && $_SESSION['message']) {
    echo '<button class="inline-flex mt-10 text-white bg-green-500 border-0 py-2 px-6 focus:outline-none hover:bg-green-600 rounded text-lg"><a href="result.pdf">' . $_SESSION['message'] . '</a></button>';
    unset($_SESSION['message']);
}
?>
    </div>
  </div>
  </form>
</section>
<section class="text-gray-400 bg-gray-900 body-font">
  <div class="container px-5 py-24 mx-auto">
    <div class="flex flex-col text-center w-full mb-20">
      <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-white">Master Cleanse Reliac Heirloom</h1>
      <p class="lg:w-2/3 mx-auto leading-relaxed text-base">Whatever cardigan tote bag tumblr hexagon brooklyn asymmetrical gentrify, subway tile poke farm-to-table. Franzen you probably haven't heard of them man bun deep jianbing selfies heirloom.</p>
    </div>
    <div class="flex flex-wrap -m-4">
      <div class="lg:w-1/3 sm:w-1/2 p-4">
        <div class="flex relative">
          <img alt="gallery" class="absolute inset-0 w-full h-full object-cover object-center" src="https://dummyimage.com/600x360">
          <div class="px-8 py-10 relative z-10 w-full border-4 border-gray-800 bg-gray-900 opacity-0 hover:opacity-100">
            <h2 class="tracking-widest text-sm title-font font-medium text-green-400 mb-1">THE SUBTITLE</h2>
            <h1 class="title-font text-lg font-medium text-white mb-3">Shooting Stars</h1>
            <p class="leading-relaxed">Photo booth fam kinfolk cold-pressed sriracha leggings jianbing microdosing tousled waistcoat.</p>
          </div>
        </div>
      </div>
      <div class="lg:w-1/3 sm:w-1/2 p-4">
        <div class="flex relative">
          <img alt="gallery" class="absolute inset-0 w-full h-full object-cover object-center" src="https://dummyimage.com/601x361">
          <div class="px-8 py-10 relative z-10 w-full border-4 border-gray-800 bg-gray-900 opacity-0 hover:opacity-100">
            <h2 class="tracking-widest text-sm title-font font-medium text-green-400 mb-1">THE SUBTITLE</h2>
            <h1 class="title-font text-lg font-medium text-white mb-3">The Catalyzer</h1>
            <p class="leading-relaxed">Photo booth fam kinfolk cold-pressed sriracha leggings jianbing microdosing tousled waistcoat.</p>
          </div>
        </div>
      </div>
      <div class="lg:w-1/3 sm:w-1/2 p-4">
        <div class="flex relative">
          <img alt="gallery" class="absolute inset-0 w-full h-full object-cover object-center" src="https://dummyimage.com/603x363">
          <div class="px-8 py-10 relative z-10 w-full border-4 border-gray-800 bg-gray-900 opacity-0 hover:opacity-100">
            <h2 class="tracking-widest text-sm title-font font-medium text-green-400 mb-1">THE SUBTITLE</h2>
            <h1 class="title-font text-lg font-medium text-white mb-3">The 400 Blows</h1>
            <p class="leading-relaxed">Photo booth fam kinfolk cold-pressed sriracha leggings jianbing microdosing tousled waistcoat.</p>
          </div>
        </div>
      </div>
      <div class="lg:w-1/3 sm:w-1/2 p-4">
        <div class="flex relative">
          <img alt="gallery" class="absolute inset-0 w-full h-full object-cover object-center" src="https://dummyimage.com/602x362">
          <div class="px-8 py-10 relative z-10 w-full border-4 border-gray-800 bg-gray-900 opacity-0 hover:opacity-100">
            <h2 class="tracking-widest text-sm title-font font-medium text-green-400 mb-1">THE SUBTITLE</h2>
            <h1 class="title-font text-lg font-medium text-white mb-3">Neptune</h1>
            <p class="leading-relaxed">Photo booth fam kinfolk cold-pressed sriracha leggings jianbing microdosing tousled waistcoat.</p>
          </div>
        </div>
      </div>
      <div class="lg:w-1/3 sm:w-1/2 p-4">
        <div class="flex relative">
          <img alt="gallery" class="absolute inset-0 w-full h-full object-cover object-center" src="https://dummyimage.com/605x365">
          <div class="px-8 py-10 relative z-10 w-full border-4 border-gray-800 bg-gray-900 opacity-0 hover:opacity-100">
            <h2 class="tracking-widest text-sm title-font font-medium text-green-400 mb-1">THE SUBTITLE</h2>
            <h1 class="title-font text-lg font-medium text-white mb-3">Holden Caulfield</h1>
            <p class="leading-relaxed">Photo booth fam kinfolk cold-pressed sriracha leggings jianbing microdosing tousled waistcoat.</p>
          </div>
        </div>
      </div>
      <div class="lg:w-1/3 sm:w-1/2 p-4">
        <div class="flex relative">
          <img alt="gallery" class="absolute inset-0 w-full h-full object-cover object-center" src="https://dummyimage.com/606x366">
          <div class="px-8 py-10 relative z-10 w-full border-4 border-gray-800 bg-gray-900 opacity-0 hover:opacity-100">
            <h2 class="tracking-widest text-sm title-font font-medium text-green-400 mb-1">THE SUBTITLE</h2>
            <h1 class="title-font text-lg font-medium text-white mb-3">Alper Kamu</h1>
            <p class="leading-relaxed">Photo booth fam kinfolk cold-pressed sriracha leggings jianbing microdosing tousled waistcoat.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<footer class="text-gray-400 bg-gray-900 body-font">
  <div class="container px-5 py-8 mx-auto flex items-center sm:flex-row flex-col">
    <a class="flex title-font font-medium items-center md:justify-start justify-center text-white">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10 text-white p-2 bg-green-500 rounded-full" viewBox="0 0 24 24">
        <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
      </svg>
      <span class="ml-3 text-xl"> PDF File Converter</span>
    </a>
    <p class="text-sm text-gray-400 sm:ml-4 sm:pl-4 sm:border-l-2 sm:border-gray-800 sm:py-2 sm:mt-0 mt-4">© 2022 PDF File Converter</p>
  </div>
</footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>

function process() {
   document.getElementById("btn").innerText = "Converting...";
    document.getElementById("btn").style.backgroundColor = "#ccc";
    document.getElementById("btn").style.color = "#000";

}

  </script>
</body>
</html>
