<?php

declare(strict_types=1);

namespace Homeapp\RegistryMessages\Events\RealtyChangedEvents;

/**
 * @psalm-immutable
 */
final class Realty
{
    public int $price;
    public ?string $title;
    public ?string $description;

    public function __construct(int $price, ?string $title, ?string $description)
    {
        $this->price = $price;
        $this->title = $title;
        $this->description = $description;
    }
}
