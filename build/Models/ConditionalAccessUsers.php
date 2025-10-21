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
     * @var string[]
     */
    private array $excludeGroups = [];

    /**
     * Internal guests or external users excluded from the policy scope. Optionally populated.
     */
    private ?string $excludeGuestsOrExternalUsers;

    /**
     * Role IDs excluded from scope of policy.
     * @var string[]
     */
    private array $excludeRoles = [];

    /**
     * User IDs excluded from scope of policy and/or GuestsOrExternalUsers.
     * @var string[]
     */
    private array $excludeUsers = [];

    /**
     * Group IDs in scope of policy unless explicitly excluded.
     * @var string[]
     */
    private array $includeGroups = [];

    /**
     * Internal guests or external users included in the policy scope. Optionally populated.
     */
    private ?string $includeGuestsOrExternalUsers;

    /**
     * Role IDs in scope of policy unless explicitly excluded.
     * @var string[]
     */
    private array $includeRoles = [];

    /**
     * User IDs in scope of policy unless explicitly excluded, None, All, or GuestsOrExternalUsers.
     * @var string[]
     */
    private array $includeUsers = [];


    /**
     * @return string[]
     */
    public function getExcludeGroups(): array
    {
        return $this->excludeGroups;
    }

    /**
     * @param string[] $excludeGroups
     */
    public function setExcludeGroups(array $excludeGroups): self
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

    /**
     * @return string[]
     */
    public function getExcludeRoles(): array
    {
        return $this->excludeRoles;
    }

    /**
     * @param string[] $excludeRoles
     */
    public function setExcludeRoles(array $excludeRoles): self
    {
        $this->excludeRoles = $excludeRoles;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getExcludeUsers(): array
    {
        return $this->excludeUsers;
    }

    /**
     * @param string[] $excludeUsers
     */
    public function setExcludeUsers(array $excludeUsers): self
    {
        $this->excludeUsers = $excludeUsers;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getIncludeGroups(): array
    {
        return $this->includeGroups;
    }

    /**
     * @param string[] $includeGroups
     */
    public function setIncludeGroups(array $includeGroups): self
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

    /**
     * @return string[]
     */
    public function getIncludeRoles(): array
    {
        return $this->includeRoles;
    }

    /**
     * @param string[] $includeRoles
     */
    public function setIncludeRoles(array $includeRoles): self
    {
        $this->includeRoles = $includeRoles;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getIncludeUsers(): array
    {
        return $this->includeUsers;
    }

    /**
     * @param string[] $includeUsers
     */
    public function setIncludeUsers(array $includeUsers): self
    {
        $this->includeUsers = $includeUsers;
        return $this;
    }

}
