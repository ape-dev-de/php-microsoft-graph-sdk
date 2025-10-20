<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AzureADRegistrationPolicy
 */
class AzureADRegistrationPolicy
{
    /**
     */
    private ?string $allowedToRegister;

    /**
     */
    private ?string $isAdminConfigurable;

    public function getAllowedToRegister(): ?string
    {
        return $this->allowedToRegister;
    }

    public function setAllowedToRegister(?string $allowedToRegister): self
    {
        $this->allowedToRegister = $allowedToRegister;
        return $this;
    }

    public function getIsAdminConfigurable(): ?string
    {
        return $this->isAdminConfigurable;
    }

    public function setIsAdminConfigurable(?string $isAdminConfigurable): self
    {
        $this->isAdminConfigurable = $isAdminConfigurable;
        return $this;
    }

}
