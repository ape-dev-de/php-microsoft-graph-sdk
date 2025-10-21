<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * EmergencyCallerInfo
 */
class EmergencyCallerInfo
{
    /**
     */
    private ?string $displayName;

    /**
     */
    private ?string $location;

    /**
     */
    private ?string $phoneNumber;

    /**
     */
    private ?string $tenantId;

    /**
     */
    private ?string $upn;


    public function getDisplayName(): ?string
    {
        return $this->displayName;
    }

    public function setDisplayName(?string $displayName): self
    {
        $this->displayName = $displayName;
        return $this;
    }

    public function getLocation(): ?string
    {
        return $this->location;
    }

    public function setLocation(?string $location): self
    {
        $this->location = $location;
        return $this;
    }

    public function getPhoneNumber(): ?string
    {
        return $this->phoneNumber;
    }

    public function setPhoneNumber(?string $phoneNumber): self
    {
        $this->phoneNumber = $phoneNumber;
        return $this;
    }

    public function getTenantId(): ?string
    {
        return $this->tenantId;
    }

    public function setTenantId(?string $tenantId): self
    {
        $this->tenantId = $tenantId;
        return $this;
    }

    public function getUpn(): ?string
    {
        return $this->upn;
    }

    public function setUpn(?string $upn): self
    {
        $this->upn = $upn;
        return $this;
    }

}
