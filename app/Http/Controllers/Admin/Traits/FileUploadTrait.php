<?php 

namespace App\Http\Controllers\Admin\Traits;
use Illuminate\Http\Request;
use File;

trait FileUploadTrait 
{
    public function handlerFileUpload(Request $request, string $fieldName, ?string $oldPath=null, string $dir = 'uploads'): ?String
    {
        if(!$request->hasFile($fieldName)){
            return null;
        }
        
        if($oldPath && File::exists(public_path($oldPath))){
            File::delete(public_path($oldPath));
        }
        

        $file = $request->file($fieldName);
        $extension = $file->getClientOriginalExtension();
        $updatedFileName = \Str::random(30).'.'.$extension;

        $file->move(public_path($dir), $updatedFileName); 

        $filePath = $dir.'/'.$updatedFileName;
        
        return $filePath;
    }
}