<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * FileStorage
 */
class FileStorage
{
    /**
     */
    private array $containers = [];

    /**
     */
    private ?string $deletedContainers;

    public function getContainers(): array
    {
        return $this->containers;
    }

    public function setContainers(array $containers): self
    {
        $this->containers = $containers;
        return $this;
    }

    public function getDeletedContainers(): ?string
    {
        return $this->deletedContainers;
    }

    public function setDeletedContainers(?string $deletedContainers): self
    {
        $this->deletedContainers = $deletedContainers;
        return $this;
    }

}
