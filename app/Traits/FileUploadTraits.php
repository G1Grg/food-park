<?php

namespace App\Traits;

use Illuminate\Http\Request;

// class to handle uploadImage feature.
// This class will be used multiple times throughout the application
trait FileUploadTraits
{
    function uploadImage(Request $request, $inputName, $path = '/uploads')
    {
        // checks if new file has been added
        if ($request->hasFile($inputName)) {
            // if added, checks and requests for the input file Name
            $image = $request->{$inputName};
            // get the extension of the original file
            $ext = $image->getClientOriginalExtension();
            // assuming user may duplicate number of files,
            // so, giving each file unique name wih uniqid class
            $imageName = 'media_' . uniqid() . '.' . $ext;
            // moving the file to the public path, with a imageName.
            // don't forget to add $imageName after public_path($path)
            $image->move(public_path($path), $imageName);
            // returns the path and file name
            return $path . '/' . $imageName;
        }
        // if no new has has been added, it returns null
        // since, in the rule, we have defined the avatar can be null
        return Null;
    }
}
