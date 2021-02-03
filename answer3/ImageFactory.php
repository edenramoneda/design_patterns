<?php

class ImageFactory
{

	public function handler(string $check_extension) : processImageInterface {
        switch ($check_extension) {
            case 'jpg':
                return new JpgImage();
            case 'png':
                return new PngImage();

            // case 'gif':
            // return new GifImage();
            default:
                throw new \Exception("Image extension is not supported");
                break;
        }
    }
	
}