<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AuditResource
 */
class AuditResource
{
    /**
     * Audit resource's type.
     */
    private ?string $auditResourceType;

    /**
     * Display name.
     */
    private ?string $displayName;

    /**
     * List of modified properties.
     */
    private array $modifiedProperties = [];

    /**
     * A class containing the properties for Audit Resource.
     */
    private ?string $resourceId;


    public function getAuditResourceType(): ?string
    {
        return $this->auditResourceType;
    }

    public function setAuditResourceType(?string $auditResourceType): self
    {
        $this->auditResourceType = $auditResourceType;
        return $this;
    }

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
