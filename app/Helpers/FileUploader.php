<?php

namespace App\Helpers;

use Exception;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class FileUploader
{
    public static function uploadFile(UploadedFile $uploadedFile, string $targetPath = "", $deleteOldFile = null): string
    {
        try {
            if ($deleteOldFile) {
                Storage::delete($deleteOldFile);
            }

            $extension = $uploadedFile->getClientOriginalExtension();
            $fileName = Str::random(25) . '.' . $extension;

            $filePath = $targetPath ? $targetPath . '/' . $fileName : $fileName;

            $uploadedFile->storeAs($targetPath, $fileName);

            return $filePath;
        } catch (Exception $e) {
            Log::error('Exception in file upload: ' . $e->getMessage());
            throw new Exception("Failed to upload file: " . $e->getMessage());
        }
    }
}
