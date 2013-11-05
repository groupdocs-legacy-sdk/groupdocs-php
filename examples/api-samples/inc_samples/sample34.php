<?php

//###<i>This sample will show how to use <b>GetFile</b> method from Storage Api to download a file from GroupDocs Storage</i>
//Set variables and get POST data
$clientId = F3::get('POST["client_id"]');
$privateKey = F3::get('POST["private_key"]');
$folder = F3::get('POST["folder"]');

//###Check clientId, privateKey and file Id
if (!isset($clientId) || !isset($privateKey) || !isset($folder)) {
    $error = 'Please enter all required parameters';
    f3::set('error', $error);
} else {
    //Clear entered data from tags and spaces
    $clientId = strip_tags(trim($clientId));
    $privateKey = strip_tags(trim($privateKey));
    $folder = strip_tags(trim($folder));
    $basePath = f3::get('POST["server_type"]');
    //###Create Signer, ApiClient and Storage Api objects
    //Create signer object
    $signer = new GroupDocsRequestSigner($privateKey);
    //Create apiClient object
    $apiClient = new APIClient($signer);
    //Create Storage Api object
    $storageApi = new StorageApi($apiClient);
    //Check if user entered base path
    if ($basePath == "") {
        //If base base is empty seting base path to prod server
        $basePath = 'https://api.groupdocs.com/v2.0';
    }
    $basePath = strip_tags(trim($basePath));
    //Set base path
    $storageApi->setBasePath($basePath);
    //###Make a request to Doc API using clientId and file id
    //Obtaining all Metadata for file
    try {
        if (strpos($folder, '\\') == true) {
            $folder = str_replace('\\', '/', $folder);
        }
        $createFodler = $storageApi->Create($clientId, $folder);
        //Selecting file names
        if ($createFodler->status == "Ok") {
            //Obtaining file name for entered file Id
            $message = '<span style="color:green">Folder was created ' . $createFodler->result->path . '</span>';
            f3::set('message', $message);
        } else {
            throw new Exception($docInfo->error_message);
        }
    } catch (Exception $e) {
        $error = 'ERROR: ' . $e->getMessage() . "\n";
        f3::set('error', $error);
    }
}

//Process template
F3::set('userId', $clientId);
F3::set('privateKey', $privateKey);
F3::set('folder', $folder);

echo Template::serve('sample34.htm');