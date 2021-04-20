<?php

declare(strict_types=1);

namespace Homeapp\RegistryMessages\Events\Realty;

/**
 * @psalm-immutable
 */
final class PriceChangedEvent
{
    //TODO: name it $oldPrice & $newPrice
    public int $old;
    public int $new;
    public int $realtyId;

    public function __construct(int $old, int $new, int $realtyId)
    {
        $this->old = $old;
        $this->new = $new;
        $this->realtyId = $realtyId;
    }
}
