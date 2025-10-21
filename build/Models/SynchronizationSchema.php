<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SynchronizationSchema
 */
class SynchronizationSchema
{
    /**
     * A collection of synchronization rules configured for the synchronizationJob or synchronizationTemplate.
     */
    private array $synchronizationRules = [];

    /**
     * The version of the schema, updated automatically with every schema change.
     */
    private ?string $version;

    /**
     * Contains the collection of directories and all of their objects.
     * @var string[]
     */
    private array $directories = [];


    public function getSynchronizationRules(): array
    {
        return $this->synchronizationRules;
    }

    public function setSynchronizationRules(array $synchronizationRules): self
    {
        $this->synchronizationRules = $synchronizationRules;
        return $this;
    }

    public function getVersion(): ?string
    {
        return $this->version;
    }

    public function setVersion(?string $version): self
    {
        $this->version = $version;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getDirectories(): array
    {
        return $this->directories;
    }

    /**
     * @param string[] $directories
     */
    public function setDirectories(array $directories): self
    {
        $this->directories = $directories;
        return $this;
    }

}
