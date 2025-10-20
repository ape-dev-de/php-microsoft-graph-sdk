<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AuthenticationBehaviors
 */
class AuthenticationBehaviors
{
    /**
     */
    private ?bool $blockAzureADGraphAccess;

    /**
     */
    private ?bool $removeUnverifiedEmailClaim;

    /**
     */
    private ?string $requireClientServicePrincipal;

    public function getBlockAzureADGraphAccess(): ?bool
    {
        return $this->blockAzureADGraphAccess;
    }

    public function setBlockAzureADGraphAccess(?bool $blockAzureADGraphAccess): self
    {
        $this->blockAzureADGraphAccess = $blockAzureADGraphAccess;
        return $this;
    }

    public function getRemoveUnverifiedEmailClaim(): ?bool
    {
        return $this->removeUnverifiedEmailClaim;
    }

    public function setRemoveUnverifiedEmailClaim(?bool $removeUnverifiedEmailClaim): self
    {
        $this->removeUnverifiedEmailClaim = $removeUnverifiedEmailClaim;
        return $this;
    }

    public function getRequireClientServicePrincipal(): ?string
    {
        return $this->requireClientServicePrincipal;
    }

    public function setRequireClientServicePrincipal(?string $requireClientServicePrincipal): self
    {
        $this->requireClientServicePrincipal = $requireClientServicePrincipal;
        return $this;
    }

}
