<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CloudPcAuditResource
 */
class CloudPcAuditResource
{
    /**
     * The display name of the modified resource entity.
     */
    private ?string $displayName;

    /**
     * The list of modified properties.
     */
    private array $modifiedProperties = [];

    /**
     * The unique identifier of the modified resource entity.
     */
    private ?string $resourceId;

    public function getDisplayName(): ?string
    {
        return $this->displayName;
    }

    public function setDisplayName(?string $displayName): self
    {
        $this->displayName = $displayName;
        return $this;
    }

    public function getModifiedProperties(): array
    {
        return $this->modifiedProperties;
    }

    public function setModifiedProperties(array $modifiedProperties): self
    {
        $this->modifiedProperties = $modifiedProperties;
        return $this;
    }

    public function getResourceId(): ?string
    {
        return $this->resourceId;
    }

    public function setResourceId(?string $resourceId): self
    {
        $this->resourceId = $resourceId;
        return $this;
    }

}
