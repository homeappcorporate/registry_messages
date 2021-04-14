<?php

declare(strict_types=1);

namespace Homeapp\RegistryMessages\Events\Realty;

/**
 * @psalm-immutable
 */
final class TitleDescriptionChangedEvent
{
    public int $realtyId;
    public ?string $oldTitle;
    public ?string $newTitle;
    public ?string $oldDescription;
    public ?string $newDescription;

    public function __construct(
        int $realtyId,
        ?string $oldTitle,
        ?string $newTitle,
        ?string $oldDescription,
        ?string $newDescription
    ) {
        $this->realtyId = $realtyId;
        $this->oldTitle = $oldTitle;
        $this->newTitle = $newTitle;
        $this->oldDescription = $oldDescription;
        $this->newDescription = $newDescription;
    }
}
