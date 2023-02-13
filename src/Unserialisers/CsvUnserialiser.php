<?php

declare(strict_types=1);

namespace PreemStudio\Payload\Unserialisers;

use PreemStudio\Csv\Reader;
use PreemStudio\Payload\Contracts\Unserialiser;
use PreemStudio\Payload\Utils\Mapper;

class CsvUnserialiser implements Unserialiser
{
    public function unserialise(mixed $input, ?string $class = null): array
    {
        $reader = Reader::createFromString($input);

        $contents = $reader->fetchAll();

        // @deprecated for the moment
        // for ($i = 0; $i < count($contents); ++$i) {
        //     if ($i <= 0) {
        //         continue;
        //     }

        //     $contents[$i] = array_combine($contents[0], $contents[$i]);
        // }

        if (! is_null($class)) {
            return (new Mapper())->map($contents, $class);
        }

        return $contents;
    }
}