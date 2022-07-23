<?php
session_start();

$fileTmpPath = $_FILES['file']['tmp_name'];
$filename = $_FILES['file']['name'];
$filesize = $_FILES['file']['size'];
$fileType = $_FILES['file']['type'];
$fileNameCmps = explode(".", $fileName);
$fileExtension = strtolower(end($fileNameCmps));
$newFileName = 'converted-file.' . $fileExtension;
$allowedfileExtensions = array('jpg', 'gif', 'png', 'zip', 'txt', 'xls', 'doc', 'pdf', 'docx', 'xlsx', 'ppt', 'pptx');

    if (in_array($fileExtension, $allowedfileExtensions))
    {
      // directory in which the uploaded file will be moved
      $uploadFileDir = __DIR__ . '/';
      $dest_path = $uploadFileDir . $newFileName;
 
      if(move_uploaded_file($fileTmpPath, $dest_path)) 
      {
        $src = "default.png";
        $message ='Download';
        if(is_array(getimagesize($location))){
          $src = $location;
      }
      $return_arr = array("name" => $filename,"size" => $filesize, "src"=> $src);
      }
      else
      {
        $message = 'There was some error moving the file to upload directory. Please make sure the upload directory is writable by web server.';
      }
    }
    
    else
    {
      $message = 'Upload failed. Allowed file types: ' . implode(',', $allowedfileExtensions);
    }

    echo json_encode($return_arr);
$return_arr = array();

$message = ''; 
if (isset($_POST['uploadBtn']) && $_POST['uploadBtn'] == 'Upload')
{
  if (isset($_FILES['uploadedFile']) && $_FILES['uploadedFile']['error'] === UPLOAD_ERR_OK)
  {
    // get details of the uploaded file
    $fileTmpPath = $_FILES['uploadedFile']['tmp_name'];
    $fileName = $_FILES['uploadedFile']['name'];
    $fileSize = $_FILES['uploadedFile']['size'];
    $fileType = $_FILES['uploadedFile']['type'];
    $fileNameCmps = explode(".", $fileName);
    $fileExtension = strtolower(end($fileNameCmps));
 
    // sanitize file-name
    $newFileName = 'converted-file.' . $fileExtension;
 
    // check if file has one of the following extensions
    $allowedfileExtensions = array('jpg', 'gif', 'png', 'zip', 'txt', 'xls', 'doc', 'pdf', 'docx', 'xlsx', 'ppt', 'pptx');

    if (in_array($fileExtension, $allowedfileExtensions))
    {
      // directory in which the uploaded file will be moved
      $uploadFileDir = __DIR__ . '/';
      $dest_path = $uploadFileDir . $newFileName;
 
      if(move_uploaded_file($fileTmpPath, $dest_path)) 
      {
        $message ='Download';
        if(is_array(getimagesize($location))){
          $src = $location;
      }
      $return_arr = array("name" => $filename,"size" => $filesize, "src"=> $src);
      }
      else
      {
        $message = 'There was some error moving the file to upload directory. Please make sure the upload directory is writable by web server.';
      }
    }
    
    else
    {
      $message = 'Upload failed. Allowed file types: ' . implode(',', $allowedfileExtensions);
    }
  }
  else
  {
    $message = 'There is some error in the file upload. Please check the following error.<br>';
    $message .= 'Error:' . $_FILES['uploadedFile']['error'];
  }
}
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
    'Authorization: Bearer pdf_live_1G2tbj6ytg0e27AnLpm6wBEEcGkBkLFE6gdOpJwQtev'
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
        'Authorization: Bearer pdf_live_1G2tbj6ytg0e27AnLpm6wBEEcGkBkLFE6gdOpJwQtev'
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
    'Authorization: Bearer pdf_live_1G2tbj6ytg0e27AnLpm6wBEEcGkBkLFE6gdOpJwQtev'
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
    'Authorization: Bearer pdf_live_1G2tbj6ytg0e27AnLpm6wBEEcGkBkLFE6gdOpJwQtev'
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
    'Authorization: Bearer pdf_live_1G2tbj6ytg0e27AnLpm6wBEEcGkBkLFE6gdOpJwQtev'
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
    'Authorization: Bearer pdf_live_1G2tbj6ytg0e27AnLpm6wBEEcGkBkLFE6gdOpJwQtev'
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
    'Authorization: Bearer pdf_live_1G2tbj6ytg0e27AnLpm6wBEEcGkBkLFE6gdOpJwQtev'
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
    'Authorization: Bearer pdf_live_1G2tbj6ytg0e27AnLpm6wBEEcGkBkLFE6gdOpJwQtev'
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
    'Authorization: Bearer pdf_live_1G2tbj6ytg0e27AnLpm6wBEEcGkBkLFE6gdOpJwQtev'
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
    'Authorization: Bearer pdf_live_1G2tbj6ytg0e27AnLpm6wBEEcGkBkLFE6gdOpJwQtev'
  ),
  CURLOPT_FILE => $FileHandle,
));

$response = curl_exec($curl);

curl_close($curl);

fclose($FileHandle);
}







?>