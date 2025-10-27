<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TeamsAppInstallation
 */
class TeamsAppInstallation
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** 
     * The set of resource-specific permissions consented to while installing or upgrading the teamsApp.
     * @var TeamsAppPermissionSet|\stdClass|null
     */
    public TeamsAppPermissionSet|\stdClass|null $consentedPermissionSet = null;

    /** 
     * The app that is installed.
     * @var TeamsApp|\stdClass|null
     */
    public TeamsApp|\stdClass|null $teamsApp = null;

    /** 
     * The details of this version of the app.
     * @var TeamsAppDefinition|\stdClass|null
     */
    public TeamsAppDefinition|\stdClass|null $teamsAppDefinition = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['consentedPermissionSet'])) {
            $this->consentedPermissionSet = is_array($data['consentedPermissionSet']) ? new TeamsAppPermissionSet($data['consentedPermissionSet']) : $data['consentedPermissionSet'];
        }
        if (isset($data['teamsApp'])) {
            $this->teamsApp = is_array($data['teamsApp']) ? new TeamsApp($data['teamsApp']) : $data['teamsApp'];
        }
        if (isset($data['teamsAppDefinition'])) {
            $this->teamsAppDefinition = is_array($data['teamsAppDefinition']) ? new TeamsAppDefinition($data['teamsAppDefinition']) : $data['teamsAppDefinition'];
        }
    }

    /**
     * Get raw data from API response
     * @return array<string, mixed>
     */
    public function getRaw(): array
    {
        return $this->rawData;
    }
}
