<?php

declare(strict_types=1);

namespace Yamilovs\SypexGeo\Database;

use Yamilovs\SypexGeo\Database\Exception\{NotFoundException, UnopenedException};

class Reader
{
    /** @var resource */
    protected $handle;

    public function __construct(string $databasePath)
    {
        $this->openDatabaseFile($databasePath);
    }

    protected function openDatabaseFile(string $databasePath): void
    {
        if (!file_exists($databasePath)) {
            throw new NotFoundException($databasePath);
        }

        if (false === $this->handle = @fopen($databasePath, 'rb')) {
            throw new UnopenedException($databasePath);
        }
    }
}