<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ConditionalAccessUsers
 */
class ConditionalAccessUsers
{
    /**
     * Group IDs excluded from scope of policy.
     */
    private ?string $excludeGroups;

    /**
     * Internal guests or external users excluded from the policy scope. Optionally populated.
     */
    private ?string $excludeGuestsOrExternalUsers;

    /**
     * Role IDs excluded from scope of policy.
     */
    private ?string $excludeRoles;

    /**
     * User IDs excluded from scope of policy and/or GuestsOrExternalUsers.
     */
    private ?string $excludeUsers;

    /**
     * Group IDs in scope of policy unless explicitly excluded.
     */
    private ?string $includeGroups;

    /**
     * Internal guests or external users included in the policy scope. Optionally populated.
     */
    private ?string $includeGuestsOrExternalUsers;

    /**
     * Role IDs in scope of policy unless explicitly excluded.
     */
    private ?string $includeRoles;

    /**
     * User IDs in scope of policy unless explicitly excluded, None, All, or GuestsOrExternalUsers.
     */
    private ?string $includeUsers;

    public function getExcludeGroups(): ?string
    {
        return $this->excludeGroups;
    }

    public function setExcludeGroups(?string $excludeGroups): self
    {
        $this->excludeGroups = $excludeGroups;
        return $this;
    }

    public function getExcludeGuestsOrExternalUsers(): ?string
    {
        return $this->excludeGuestsOrExternalUsers;
    }

    public function setExcludeGuestsOrExternalUsers(?string $excludeGuestsOrExternalUsers): self
    {
        $this->excludeGuestsOrExternalUsers = $excludeGuestsOrExternalUsers;
        return $this;
    }

    public function getExcludeRoles(): ?string
    {
        return $this->excludeRoles;
    }

    public function setExcludeRoles(?string $excludeRoles): self
    {
        $this->excludeRoles = $excludeRoles;
        return $this;
    }

    public function getExcludeUsers(): ?string
    {
        return $this->excludeUsers;
    }

    public function setExcludeUsers(?string $excludeUsers): self
    {
        $this->excludeUsers = $excludeUsers;
        return $this;
    }

    public function getIncludeGroups(): ?string
    {
        return $this->includeGroups;
    }

    public function setIncludeGroups(?string $includeGroups): self
    {
        $this->includeGroups = $includeGroups;
        return $this;
    }

    public function getIncludeGuestsOrExternalUsers(): ?string
    {
        return $this->includeGuestsOrExternalUsers;
    }

    public function setIncludeGuestsOrExternalUsers(?string $includeGuestsOrExternalUsers): self
    {
        $this->includeGuestsOrExternalUsers = $includeGuestsOrExternalUsers;
        return $this;
    }

    public function getIncludeRoles(): ?string
    {
        return $this->includeRoles;
    }

    public function setIncludeRoles(?string $includeRoles): self
    {
        $this->includeRoles = $includeRoles;
        return $this;
    }

    public function getIncludeUsers(): ?string
    {
        return $this->includeUsers;
    }

    public function setIncludeUsers(?string $includeUsers): self
    {
        $this->includeUsers = $includeUsers;
        return $this;
    }

}
