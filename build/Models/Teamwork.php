<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Teamwork
 */
class Teamwork
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** Indicates whether Microsoft Teams is enabled for the organization. */
    public ?bool $isTeamsEnabled = null;

    /** Represents the region of the organization or the tenant. The region value can be any region supported by the Teams payload. The possible values are: Americas, Europe and MiddleEast, Asia Pacific, UAE, Australia, Brazil, Canada, Switzerland, Germany, France, India, Japan, South Korea, Norway, Singapore, United Kingdom, South Africa, Sweden, Qatar, Poland, Italy, Israel, Spain, Mexico, USGov Community Cloud, USGov Community Cloud High, USGov Department of Defense, and China. */
    public ?string $region = null;

    /** 
     * A collection of deleted chats.
     * @var DeletedChat[]
     */
    public array $deletedChats = [];

    /** 
     * The deleted team.
     * @var DeletedTeam[]
     */
    public array $deletedTeams = [];

    /** 
     * Represents tenant-wide settings for all Teams apps in the tenant.
     * @var TeamsAppSettings|\stdClass|null
     */
    public mixed $teamsAppSettings = null;

    /** 
     * 
     * @var WorkforceIntegration[]
     */
    public array $workforceIntegrations = [];


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['isTeamsEnabled'])) {
            $this->isTeamsEnabled = $data['isTeamsEnabled'];
        }
        if (isset($data['region'])) {
            $this->region = $data['region'];
        }
        if (isset($data['deletedChats'])) {
            $this->deletedChats = $data['deletedChats'];
        }
        if (isset($data['deletedTeams'])) {
            $this->deletedTeams = $data['deletedTeams'];
        }
        if (isset($data['teamsAppSettings'])) {
            $this->teamsAppSettings = $data['teamsAppSettings'];
        }
        if (isset($data['workforceIntegrations'])) {
            $this->workforceIntegrations = $data['workforceIntegrations'];
        }
    }
}
