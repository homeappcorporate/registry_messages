<?php

declare(strict_types=1);

namespace Homeapp\RegistryMessages\Events;

final class TestSomethingHappenedEvent
{
    public string $description;

    public function __construct(string $description)
    {
        $this->description = $description;
    }
}


