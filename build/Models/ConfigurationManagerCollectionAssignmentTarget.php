<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ConfigurationManagerCollectionAssignmentTarget
 */
class ConfigurationManagerCollectionAssignmentTarget
{
    /**
     * Represents an assignment to a Configuration Manager Collection.
     */
    private ?string $collectionId;


    public function getCollectionId(): ?string
    {
        return $this->collectionId;
    }

    public function setCollectionId(?string $collectionId): self
    {
        $this->collectionId = $collectionId;
        return $this;
    }

}
