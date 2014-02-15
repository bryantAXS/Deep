<?php

namespace rsanchez\Deep\FilePath;

use rsanchez\Deep\FilePath\FilePath;
use rsanchez\Deep\FilePath\Storage;
use rsanchez\Deep\FilePath\Factory;
use IteratorAggregate;

class Repository implements IteratorAggregate
{
    private $filePaths = array();
    private $filePathsById = array();

    public function __construct(Storage $storage, Factory $factory)
    {
        foreach ($storage() as $row) {

            $filePath = $factory->createFilePath($row);

            $this->attach($filePath);
        }
    }

    public function attach(FilePath $filePath)
    {
        array_push($this->filePaths, $filePath);
        $this->filePathsById[$filePath->id] =& $filePath;
    }

    public function find($id)
    {
        //@TODO custom exception
        if (! array_key_exists($id, $this->filePathsById)) {
            throw new \Exception('invalid channel id');
        }

        return $this->filePathsById[$id];
    }

    public function getIterator()
    {
        return new ArrayIterator($this->filePaths);
    }
}
