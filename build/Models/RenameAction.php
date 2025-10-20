<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * RenameAction
 */
class RenameAction
{
    /**
     * The new name of the item.
     */
    private ?string $newName;

    /**
     * The previous name of the item.
     */
    private ?string $oldName;

    public function getNewName(): ?string
    {
        return $this->newName;
    }

    public function setNewName(?string $newName): self
    {
        $this->newName = $newName;
        return $this;
    }

    public function getOldName(): ?string
    {
        return $this->oldName;
    }

    public function setOldName(?string $oldName): self
    {
        $this->oldName = $oldName;
        return $this;
    }

}
