<?php

declare(strict_types=1);

namespace Homeapp\RegistryMessages\Events\Realty;

/**
 * @psalm-immutable
 */
final class PriceChangedEvent
{
    public int $old;
    public int $new;

    public function __construct(int $old, int $new)
    {
        $this->old = $old;
        $this->new = $new;
    }
}
