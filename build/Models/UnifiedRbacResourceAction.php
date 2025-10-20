<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * UnifiedRbacResourceAction
 */
class UnifiedRbacResourceAction
{
    /**
     */
    private ?string $actionVerb;

    /**
     */
    private ?string $authenticationContextId;

    /**
     */
    private ?string $description;

    /**
     */
    private ?bool $isAuthenticationContextSettable;

    /**
     */
    private ?string $name;

    /**
     */
    private ?string $resourceScopeId;

    public function getActionVerb(): ?string
    {
        return $this->actionVerb;
    }

    public function setActionVerb(?string $actionVerb): self
    {
        $this->actionVerb = $actionVerb;
        return $this;
    }

    public function getAuthenticationContextId(): ?string
    {
        return $this->authenticationContextId;
    }

    public function setAuthenticationContextId(?string $authenticationContextId): self
    {
        $this->authenticationContextId = $authenticationContextId;
        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;
        return $this;
    }

    public function getIsAuthenticationContextSettable(): ?bool
    {
        return $this->isAuthenticationContextSettable;
    }

    public function setIsAuthenticationContextSettable(?bool $isAuthenticationContextSettable): self
    {
        $this->isAuthenticationContextSettable = $isAuthenticationContextSettable;
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

    public function getResourceScopeId(): ?string
    {
        return $this->resourceScopeId;
    }

    public function setResourceScopeId(?string $resourceScopeId): self
    {
        $this->resourceScopeId = $resourceScopeId;
        return $this;
    }

}
