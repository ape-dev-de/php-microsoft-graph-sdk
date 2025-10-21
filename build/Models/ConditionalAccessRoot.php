<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ConditionalAccessRoot
 */
class ConditionalAccessRoot
{
    /**
     * Read-only. Nullable. Returns a collection of the specified authentication context class references.
     */
    private array $authenticationContextClassReferences = [];

    /**
     */
    private ?string $authenticationStrength;

    /**
     * Read-only. Nullable. Returns a collection of the specified named locations.
     */
    private array $namedLocations = [];

    /**
     * Read-only. Nullable. Returns a collection of the specified Conditional Access (CA) policies.
     */
    private array $policies = [];

    /**
     * Read-only. Nullable. Returns a collection of the specified Conditional Access templates.
     * @var string[]
     */
    private array $templates = [];


    public function getAuthenticationContextClassReferences(): array
    {
        return $this->authenticationContextClassReferences;
    }

    public function setAuthenticationContextClassReferences(array $authenticationContextClassReferences): self
    {
        $this->authenticationContextClassReferences = $authenticationContextClassReferences;
        return $this;
    }

    public function getAuthenticationStrength(): ?string
    {
        return $this->authenticationStrength;
    }

    public function setAuthenticationStrength(?string $authenticationStrength): self
    {
        $this->authenticationStrength = $authenticationStrength;
        return $this;
    }

    public function getNamedLocations(): array
    {
        return $this->namedLocations;
    }

    public function setNamedLocations(array $namedLocations): self
    {
        $this->namedLocations = $namedLocations;
        return $this;
    }

    public function getPolicies(): array
    {
        return $this->policies;
    }

    public function setPolicies(array $policies): self
    {
        $this->policies = $policies;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getTemplates(): array
    {
        return $this->templates;
    }

    /**
     * @param string[] $templates
     */
    public function setTemplates(array $templates): self
    {
        $this->templates = $templates;
        return $this;
    }

}
