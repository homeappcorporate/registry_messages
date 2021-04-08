<?php

declare(strict_types=1);

namespace HomeappCorporate\RegistryMessages\Events;

final class TestSomethingHappenedEvent
{
    public string $description;
    public int $number;

    public function __construct(int $number, string $description)
    {
        $this->number = $number;
        $this->description = $description;
    }
}
