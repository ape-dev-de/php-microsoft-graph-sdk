<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * VerifiedDomain
 */
class VerifiedDomain
{
    /**
     * For example, Email, OfficeCommunicationsOnline.
     */
    private ?string $capabilities;

    /**
     * true if this is the default domain associated with the tenant; otherwise, false.
     */
    private ?bool $isDefault;

    /**
     * true if this is the initial domain associated with the tenant; otherwise, false.
     */
    private ?bool $isInitial;

    /**
     * The domain name; for example, contoso.com.
     */
    private ?string $name;

    /**
     * For example, Managed.
     */
    private ?string $type;

    public function getCapabilities(): ?string
    {
        return $this->capabilities;
    }

    public function setCapabilities(?string $capabilities): self
    {
        $this->capabilities = $capabilities;
        return $this;
    }

    public function getIsDefault(): ?bool
    {
        return $this->isDefault;
    }

    public function setIsDefault(?bool $isDefault): self
    {
        $this->isDefault = $isDefault;
        return $this;
    }

    public function getIsInitial(): ?bool
    {
        return $this->isInitial;
    }

    public function setIsInitial(?bool $isInitial): self
    {
        $this->isInitial = $isInitial;
        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;
        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(?string $type): self
    {
        $this->type = $type;
        return $this;
    }

}
