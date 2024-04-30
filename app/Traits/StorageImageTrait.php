<?php

namespace App\Traits;
use Storage;
trait StorageImageTrait
{
    public function storageImageTrait($request, $filedName, $forderName){
        if ($request->hasFile($filedName)) {
            $file = $request->$filedName;
            $fileNameOirigin = $file->getClientOriginalName();
            $fileNameHash = $file->getClientOriginalExtension();
            $filePath = $request->file($filedName)->storeAs(
                'public/' . $forderName . '/' . auth()->id(), $fileNameOirigin
            );  

            $data = [
                'filedName' => $fileNameOirigin,
                'filedPath' =>  $url = Storage::url($filePath),
            ];
            
            return $data;
        }
        return null;
    }
}
