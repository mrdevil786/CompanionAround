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

            $publicPath = public_path();

            if (!is_dir($publicPath . '/' . $targetPath)) {
                mkdir($publicPath . '/' . $targetPath, 0777, true);
            }

            $filePath = $targetPath ? $targetPath . '/' . $fileName : $fileName;

            $uploadedFile->move($publicPath . '/' . $targetPath, $fileName);

            return $filePath;
        } catch (Exception $e) {
            Log::error('Exception in file upload: ' . $e->getMessage());
            throw new Exception("Failed to upload file: " . $e->getMessage());
        }
    }
}
