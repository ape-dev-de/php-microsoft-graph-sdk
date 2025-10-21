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
     * @var string[]
     */
    private array $deletedContainers = [];


    public function getContainers(): array
    {
        return $this->containers;
    }

    public function setContainers(array $containers): self
    {
        $this->containers = $containers;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getDeletedContainers(): array
    {
        return $this->deletedContainers;
    }

    /**
     * @param string[] $deletedContainers
     */
    public function setDeletedContainers(array $deletedContainers): self
    {
        $this->deletedContainers = $deletedContainers;
        return $this;
    }

}
