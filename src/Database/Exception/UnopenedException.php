<?php

declare(strict_types=1);

namespace Yamilovs\SypexGeo\Database\Exception;

use Exception;

class UnopenedException extends Exception
{
    public function __construct(string $databasePath)
    {
        parent::__construct(sprintf('Cannot open Sypex Geo database file "%s"', $databasePath), 423);
    }
}