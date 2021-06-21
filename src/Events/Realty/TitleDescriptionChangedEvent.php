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
    public ?string $oldDocs;
    public ?string $newDocs;
    public ?string $oldInfra;
    public ?string $newInfra;

    public function __construct(
        int $realtyId,
        ?string $oldTitle,
        ?string $newTitle,
        ?string $oldDescription,
        ?string $newDescription,
        ?string $oldDocs = null,
        ?string $newDocs = null,
        ?string $oldInfra = null,
        ?string $newInfra = null
    ) {
        $this->realtyId = $realtyId;
        $this->oldTitle = $oldTitle;
        $this->newTitle = $newTitle;
        $this->oldDescription = $oldDescription;
        $this->newDescription = $newDescription;
        $this->oldDocs = $oldDocs;
        $this->newDocs = $newDocs;
        $this->oldInfra = $oldInfra;
        $this->newInfra = $newInfra;
    }
}
