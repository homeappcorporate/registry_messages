<?php

declare(strict_types=1);

namespace Homeapp\RegistryMessages\Events\Realty;

/**
 * @psalm-immutable
 */
final class ReadyDateIsSoonEvent
{
    public int $realtyId;

    public function __construct(int $realtyId)
    {
        $this->realtyId = $realtyId;
    }
}
