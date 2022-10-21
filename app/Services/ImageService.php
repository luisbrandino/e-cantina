<?php 

namespace App\Services;

use Intervention\Image\Facades\Image;

class ImageService {

    public function upload($image, $options = [])
    {
        if (!is_array($options))
            return;

        $thumbnail = Image::make($image->getRealPath());
        $filename = time() . '.' . $image->getClientOriginalExtension();

        if (empty($options)) {
            $this->_saveOriginalImage($image, $filename);
            return $filename;
        }

        foreach($options as $option) {
            $destination = public_path($option['destination']);

            $this->_createDirectoryIfNotExists($destination);

            $size = $option['size'];

            $path = $destination . '/' . $filename;

            $this->_upload($thumbnail, $path, $size);
        }

        $this->_saveOriginalImage($image, $filename);

        return $filename;
    }

    public function delete($filename, $paths) {
        foreach($paths as $path) {
            $finalPath = public_path($path) . '/' . $filename;

            if (file_exists($finalPath))
                unlink($finalPath);
        }
    }

    private function _upload($thumbnail, $path, $size) {
        $thumbnail->resize($size[0], $size[1], function ($constraint) {
            //$constraint->aspectRatio();
        })->save($path);
    }

    private function _saveOriginalImage($image, $filename) {
        $destination = public_path('/uploads');

        $this->_createDirectoryIfNotExists($destination);

        $image->move($destination, $filename);
    }

    private function _createDirectoryIfNotExists($directory) {
        if (!file_exists($directory))
            mkdir($directory, 775, true);
    }

}

