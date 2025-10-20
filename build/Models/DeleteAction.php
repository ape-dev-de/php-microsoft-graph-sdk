<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DeleteAction
 */
class DeleteAction
{
    /**
     * The name of the item that was deleted.
     */
    private ?string $name;

    /**
     * File or Folder, depending on the type of the deleted item.
     */
    private ?string $objectType;

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;
        return $this;
    }

    public function getObjectType(): ?string
    {
        return $this->objectType;
    }

    public function setObjectType(?string $objectType): self
    {
        $this->objectType = $objectType;
        return $this;
    }

}
