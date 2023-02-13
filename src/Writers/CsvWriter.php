<?php

declare(strict_types=1);

namespace PreemStudio\Payload\Writers;

use PreemStudio\Payload\Serialisers\CsvSerialiser;

class CsvWriter extends Writer
{
    public function write(string $path, mixed $input): bool
    {
        return $this->put($path, (new CsvSerialiser())->serialise($input));
    }
}