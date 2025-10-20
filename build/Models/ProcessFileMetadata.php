<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ProcessFileMetadata
 */
class ProcessFileMetadata
{
    /**
     * A dictionary containing custom metadata associated with the file, potentially extracted by the calling application.
     */
    private ?string $customProperties;

    /**
     * The unique identifier (for example, Entra User ID or UPN) of the owner of the file.
     */
    private ?string $ownerId;

    public function getCustomProperties(): ?string
    {
        return $this->customProperties;
    }

    public function setCustomProperties(?string $customProperties): self
    {
        $this->customProperties = $customProperties;
        return $this;
    }

    public function getOwnerId(): ?string
    {
        return $this->ownerId;
    }

    public function setOwnerId(?string $ownerId): self
    {
        $this->ownerId = $ownerId;
        return $this;
    }

}
