<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DirectoryObjectPartnerReference
 */
class DirectoryObjectPartnerReference
{
    /**
     * Description of the object returned. Read-only.
     */
    private ?string $description;

    /**
     * Name of directory object being returned, like group or application. Read-only.
     */
    private ?string $displayName;

    /**
     * The tenant identifier for the partner tenant. Read-only.
     */
    private ?string $externalPartnerTenantId;

    /**
     * The type of the referenced object in the partner tenant. Read-only.
     */
    private ?string $objectType;


    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;
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

    public function getExternalPartnerTenantId(): ?string
    {
        return $this->externalPartnerTenantId;
    }

    public function setExternalPartnerTenantId(?string $externalPartnerTenantId): self
    {
        $this->externalPartnerTenantId = $externalPartnerTenantId;
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
