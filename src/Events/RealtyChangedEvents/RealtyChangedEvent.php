<?php

declare(strict_types=1);

namespace Homeapp\RegistryMessages\Events\RealtyChangedEvents;

/**
 * @psalm-immutable
 */
final class RealtyChangedEvent
{
    public Realty $old;
    public Realty $new;

    public function __construct(Realty $old, Realty $new)
    {
        $this->old = $old;
        $this->new = $new;
    }
}
