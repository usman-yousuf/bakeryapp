<?php

use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;


function sendSuccess($message, $data, $responseCode = 200) {
    return Response::json(['status' => true, 'message' => $message, 'data' => $data], $responseCode);
}

function sendError($message, $data, $responseCode = 200) {
    return Response::json(['status' => false, 'message' => $message, 'data' => $data], $responseCode);
}

if( !function_exists('print_array') ){
    function print_array($arr, $exit = false)
    {
        echo '<pre>';
        print_r($arr);
        echo '</pre>';
        if($exit){
            exit;
        }
    }
}

if(!function_exists('getUser')){
    function getUser(){
        return \App\Models\User::with('address');
    }
}

if(!function_exists('getUploadDir'))
{
    /**
     * Get Profile URL
     *
     * @param string $nature
     * @param boolean $is_thumbnail
     * @return void
     */
    function getUploadDir($nature = 'profile_image', $is_thumbnail = false)
    {
        $path = public_path('uploads/');

        // profile images
        if ($nature == 'profile_image') {
            $path .= 'profile_image/';
            if ($is_thumbnail) {
                $path .= 'thumbnails/';
            }
        }

        return $path;
    }
}



if (!function_exists('getFileUrl')) {
    /**
     * get File URL
     *
     * @param String $filename
     * @param String $alt_filename
     * @param String $nature
     *
     * @return void
     */
    function getFileUrl($filename = null, $alt_filename = null, $nature = null)
    {
        $given_url = asset('uploads/' . $filename);
        // dd($given_url);
        $defaultFilePath = ('profile' == $nature) ? asset('assets/images/dummy_user.png') : asset('assets/images/logo_only.svg');
        // dd($defaultFilePath);
        $video_xtensions = ['flv', 'mp4', 'mpeg', 'mkv', 'avi'];
        $doc_xtensions = ['pdf'];
        // $image_xtensions = ['png', 'jpg', 'jpeg', 'gif'];

        $file_extension = pathinfo($given_url, PATHINFO_EXTENSION);
        if (in_array($file_extension, $video_xtensions)) {
            $given_url = $alt_filename;
        }
        if(in_array($file_extension, $doc_xtensions)){
            $given_url = 'https://techterms.com/img/lg/pdf_109.png';
        }

        if (!empty($given_url) && (null != $given_url)) {
            $exists = @fopen($given_url, 'r'); // try to open file in read mode
            if ($exists) {
                $filePath = $given_url;
            } else {
                if(null != $alt_filename){
                    $altExists = @fopen($alt_filename, 'r');
                    if ($altExists) {
                        $filePath = $alt_filename;
                    } else {
                        $filePath = $defaultFilePath;
                    }
                } else {
                    $filePath = $defaultFilePath;
                }
            }
        } else {
            $filePath = $defaultFilePath;
        }
        return $filePath;
    }
}