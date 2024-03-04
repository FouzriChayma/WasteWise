<?php

namespace App\Form\DataTransformer;

use Symfony\Component\Form\DataTransformerInterface;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\Form\Exception\TransformationFailedException;

class FileTransformer implements DataTransformerInterface
{
    public function transform($value)
    {
        // Transform File object to string (file path)
        if ($value instanceof File) {
            return null; // Do not show already uploaded file in the form
        }

        return null;
    }

    public function reverseTransform($value)
{
    // Handle the case when the form is submitted without changing the image
    if ($value === null || $value === '') {
        return null;
    }

    // Transform string (file path) to File object
    if (is_string($value)) {
        return new File($value);
    }

    // If $value is an instance of UploadedFile, simply return it
    if ($value instanceof UploadedFile) {
        return $value;
    }

    throw new TransformationFailedException('Expected a string, null, or an instance of UploadedFile.');
}

}
