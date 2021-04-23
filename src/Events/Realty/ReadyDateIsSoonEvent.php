<?php

declare(strict_types=1);

namespace Homeapp\RegistryMessages\Events\Realty;

/**
 * @psalm-immutable
 */
final class ReadyDateIsSoonEvent
{
    public int $realtyId;
    public ?int $year;
    public ?int $quarter;

    public function __construct(int $realtyId, int $year = null, int $quarter = null)
    {
        $this->realtyId = $realtyId;
        $this->year = $year;
        $this->quarter = $quarter;
    }
}
