<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityBlobContainerEvidence
 */
class SecurityBlobContainerEvidence
{
    /**
     * The name of the blob container.
     */
    private ?string $name;

    /**
     * The storage which the blob container belongs to.
     */
    private ?string $storageResource;

    /**
     * The full URL representation of the blob container.
     */
    private ?string $url;

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;
        return $this;
    }

    public function getStorageResource(): ?string
    {
        return $this->storageResource;
    }

    public function setStorageResource(?string $storageResource): self
    {
        $this->storageResource = $storageResource;
        return $this;
    }

    public function getUrl(): ?string
    {
        return $this->url;
    }

    public function setUrl(?string $url): self
    {
        $this->url = $url;
        return $this;
    }

}
