<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AzureADJoinPolicy
 */
class AzureADJoinPolicy
{
    /**
     */
    private ?string $allowedToJoin;

    /**
     */
    private ?string $isAdminConfigurable;


    public function getAllowedToJoin(): ?string
    {
        return $this->allowedToJoin;
    }

    public function setAllowedToJoin(?string $allowedToJoin): self
    {
        $this->allowedToJoin = $allowedToJoin;
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
