<?php

declare(strict_types=1);

namespace HomeappCorporate\RegistryMessages\Events;

class TestSomethingHappenedEvent
{
    public string $description;

    public function __construct(string $description)
    {
        $this->description = $description;
    }
}
