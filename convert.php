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
