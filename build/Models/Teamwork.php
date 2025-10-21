<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Teamwork
 */
class Teamwork
{
    /**
     * Indicates whether Microsoft Teams is enabled for the organization.
     */
    private ?bool $isTeamsEnabled;

    /**
     * Represents the region of the organization or the tenant. The region value can be any region supported by the Teams payload. The possible values are: Americas, Europe and MiddleEast, Asia Pacific, UAE, Australia, Brazil, Canada, Switzerland, Germany, France, India, Japan, South Korea, Norway, Singapore, United Kingdom, South Africa, Sweden, Qatar, Poland, Italy, Israel, Spain, Mexico, USGov Community Cloud, USGov Community Cloud High, USGov Department of Defense, and China.
     */
    private ?string $region;

    /**
     * A collection of deleted chats.
     */
    private array $deletedChats = [];

    /**
     * The deleted team.
     */
    private array $deletedTeams = [];

    /**
     * Represents tenant-wide settings for all Teams apps in the tenant.
     */
    private ?string $teamsAppSettings;

    /**
     * @var string[]
     */
    private array $workforceIntegrations = [];


    public function getIsTeamsEnabled(): ?bool
    {
        return $this->isTeamsEnabled;
    }

    public function setIsTeamsEnabled(?bool $isTeamsEnabled): self
    {
        $this->isTeamsEnabled = $isTeamsEnabled;
        return $this;
    }

    public function getRegion(): ?string
    {
        return $this->region;
    }

    public function setRegion(?string $region): self
    {
        $this->region = $region;
        return $this;
    }

    public function getDeletedChats(): array
    {
        return $this->deletedChats;
    }

    public function setDeletedChats(array $deletedChats): self
    {
        $this->deletedChats = $deletedChats;
        return $this;
    }

    public function getDeletedTeams(): array
    {
        return $this->deletedTeams;
    }

    public function setDeletedTeams(array $deletedTeams): self
    {
        $this->deletedTeams = $deletedTeams;
        return $this;
    }

    public function getTeamsAppSettings(): ?string
    {
        return $this->teamsAppSettings;
    }

    public function setTeamsAppSettings(?string $teamsAppSettings): self
    {
        $this->teamsAppSettings = $teamsAppSettings;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getWorkforceIntegrations(): array
    {
        return $this->workforceIntegrations;
    }

    /**
     * @param string[] $workforceIntegrations
     */
    public function setWorkforceIntegrations(array $workforceIntegrations): self
    {
        $this->workforceIntegrations = $workforceIntegrations;
        return $this;
    }

}
