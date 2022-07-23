<?php
session_start();

$message = ''; 

$filename = $_FILES['file']['name'];
$fileNameCmps = explode(".", $filename);
$fileExtension = strtolower(end($fileNameCmps));
$newFileName = 'converted-file.' . $fileExtension;
/* Getting File size */
$filesize = $_FILES['file']['size'];
$_SESSION['message'] = $fileExtension;
header("Location: index.php");
/* Location */
$location = __DIR__ . '/' . $newFileName;

$return_arr = array();
$allowedfileExtensions = array('jpg', 'tiff', 'png', 'xls', 'doc', 'docx', 'xlsx', 'ppt', 'pptx');


// if (in_array($fileExtension, $allowedfileExtensions))
// {
/* Upload file */
if (move_uploaded_file($_FILES['file']['tmp_name'], $location)) {
$src = "default.png";

// checking file is image or not
$message = "Download";
if (is_array(getimagesize($location))) {
    $src = $location;
}
$return_arr = array("name" => $filename, "size" => $filesize, "src" => $src);
}else{
    $message = "Error";
}
// }
// else
// {
//     $message = "Invalid file type". $fileExtension;
// }
echo json_encode($return_arr);


$_SESSION['message'] = $message;
header("Location: index.php");

if ($fileExtension == 'docx'){
$FileHandle = fopen('result.pdf', 'w+');

$curl = curl_init();

$instructions = '{
  "parts": [
    {
      "file": "document"
    }
  ]
}';

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://api.pspdfkit.com/build',
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_POSTFIELDS => array(
    'instructions' => $instructions,
    'document' => new CURLFILE('converted-file.docx')
  ),
  CURLOPT_HTTPHEADER => array(
    'Authorization: Bearer pdf_live_NeX6siStISfx6jxfX52gq6CCyYYcaTIovWUnsa9sA85'
  ),
  CURLOPT_FILE => $FileHandle,
));

$response = curl_exec($curl);

curl_close($curl);

fclose($FileHandle);
}
else if ($fileExtension == 'doc'){
    $FileHandle = fopen('result.pdf', 'w+');

    $curl = curl_init();
    
    $instructions = '{
      "parts": [
        {
          "file": "document"
        }
      ]
    }';
    
    curl_setopt_array($curl, array(
      CURLOPT_URL => 'https://api.pspdfkit.com/build',
      CURLOPT_CUSTOMREQUEST => 'POST',
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => '',
      CURLOPT_POSTFIELDS => array(
        'instructions' => $instructions,
        'document' => new CURLFILE('converted-file.docx')
      ),
      CURLOPT_HTTPHEADER => array(
        'Authorization: Bearer pdf_live_NeX6siStISfx6jxfX52gq6CCyYYcaTIovWUnsa9sA85'
      ),
      CURLOPT_FILE => $FileHandle,
    ));
    
    $response = curl_exec($curl);
    
    curl_close($curl);
    
    fclose($FileHandle);
}else if($fileExtension == 'xls'){
    $FileHandle = fopen('result.pdf', 'w+');

$curl = curl_init();

$instructions = '{
  "parts": [
    {
      "file": "document"
    }
  ]
}';

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://api.pspdfkit.com/build',
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_POSTFIELDS => array(
    'instructions' => $instructions,
    'document' => new CURLFILE('converted-file.xls')
  ),
  CURLOPT_HTTPHEADER => array(
    'Authorization: Bearer pdf_live_NeX6siStISfx6jxfX52gq6CCyYYcaTIovWUnsa9sA85'
  ),
  CURLOPT_FILE => $FileHandle,
));

$response = curl_exec($curl);

curl_close($curl);

fclose($FileHandle);
}else if($fileExtension == 'xlsx'){
    $FileHandle = fopen('result.pdf', 'w+');

$curl = curl_init();

$instructions = '{
  "parts": [
    {
      "file": "document"
    }
  ]
}';

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://api.pspdfkit.com/build',
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_POSTFIELDS => array(
    'instructions' => $instructions,
    'document' => new CURLFILE('converted-file.xlsx')
  ),
  CURLOPT_HTTPHEADER => array(
    'Authorization: Bearer pdf_live_NeX6siStISfx6jxfX52gq6CCyYYcaTIovWUnsa9sA85'
  ),
  CURLOPT_FILE => $FileHandle,
));

$response = curl_exec($curl);

curl_close($curl);

fclose($FileHandle);
}else if($fileExtension == 'ppt'){
    $FileHandle = fopen('result.pdf', 'w+');

$curl = curl_init();

$instructions = '{
  "parts": [
    {
      "file": "document"
    }
  ]
}';

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://api.pspdfkit.com/build',
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_POSTFIELDS => array(
    'instructions' => $instructions,
    'document' => new CURLFILE('converted-file.ppt')
  ),
  CURLOPT_HTTPHEADER => array(
    'Authorization: Bearer pdf_live_NeX6siStISfx6jxfX52gq6CCyYYcaTIovWUnsa9sA85'
  ),
  CURLOPT_FILE => $FileHandle,
));

$response = curl_exec($curl);

curl_close($curl);

fclose($FileHandle);
}else if($fileExtension == 'pptx'){
    $FileHandle = fopen('result.pdf', 'w+');

$curl = curl_init();

$instructions = '{
  "parts": [
    {
      "file": "document"
    }
  ]
}';

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://api.pspdfkit.com/build',
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_POSTFIELDS => array(
    'instructions' => $instructions,
    'document' => new CURLFILE('converted-file.pptx')
  ),
  CURLOPT_HTTPHEADER => array(
    'Authorization: Bearer pdf_live_NeX6siStISfx6jxfX52gq6CCyYYcaTIovWUnsa9sA85'
  ),
  CURLOPT_FILE => $FileHandle,
));

$response = curl_exec($curl);

curl_close($curl);

fclose($FileHandle);
}else if($fileExtension == 'jpg'){
    $FileHandle = fopen('result.pdf', 'w+');

$curl = curl_init();

$instructions = '{
  "parts": [
    {
      "file": "document"
    }
  ]
}';

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://api.pspdfkit.com/build',
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_POSTFIELDS => array(
    'instructions' => $instructions,
    'document' => new CURLFILE('converted-file.jpg')
  ),
  CURLOPT_HTTPHEADER => array(
    'Authorization: Bearer pdf_live_NeX6siStISfx6jxfX52gq6CCyYYcaTIovWUnsa9sA85'
  ),
  CURLOPT_FILE => $FileHandle,
));

$response = curl_exec($curl);

curl_close($curl);

fclose($FileHandle);
}else if($fileExtension == 'png'){
    $FileHandle = fopen('result.pdf', 'w+');

$curl = curl_init();

$instructions = '{
  "parts": [
    {
      "file": "document"
    }
  ]
}';

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://api.pspdfkit.com/build',
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_POSTFIELDS => array(
    'instructions' => $instructions,
    'document' => new CURLFILE('converted-file.png')
  ),
  CURLOPT_HTTPHEADER => array(
    'Authorization: Bearer pdf_live_NeX6siStISfx6jxfX52gq6CCyYYcaTIovWUnsa9sA85'
  ),
  CURLOPT_FILE => $FileHandle,
));

$response = curl_exec($curl);

curl_close($curl);

fclose($FileHandle);
}else if($fileExtension == 'tiff'){
    $FileHandle = fopen('result.pdf', 'w+');

$curl = curl_init();

$instructions = '{
  "parts": [
    {
      "file": "document"
    }
  ]
}';

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://api.pspdfkit.com/build',
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_POSTFIELDS => array(
    'instructions' => $instructions,
    'document' => new CURLFILE('converted-file.tiff')
  ),
  CURLOPT_HTTPHEADER => array(
    'Authorization: Bearer pdf_live_NeX6siStISfx6jxfX52gq6CCyYYcaTIovWUnsa9sA85'
  ),
  CURLOPT_FILE => $FileHandle,
));

$response = curl_exec($curl);

curl_close($curl);

fclose($FileHandle);
}else if($fileExtension == 'html'){
    $FileHandle = fopen('result.pdf', 'w+');

$curl = curl_init();

$instructions = '{
  "parts": [
    {
      "file": "document"
    }
  ]
}';

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://api.pspdfkit.com/build',
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_POSTFIELDS => array(
    'instructions' => $instructions,
    'document' => new CURLFILE('converted-file.html')
  ),
  CURLOPT_HTTPHEADER => array(
    'Authorization: Bearer pdf_live_NeX6siStISfx6jxfX52gq6CCyYYcaTIovWUnsa9sA85'
  ),
  CURLOPT_FILE => $FileHandle,
));

$response = curl_exec($curl);

curl_close($curl);

fclose($FileHandle);
}







?>