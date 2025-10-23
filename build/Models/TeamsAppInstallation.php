<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TeamsAppInstallation
 */
class TeamsAppInstallation
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** 
     * The set of resource-specific permissions consented to while installing or upgrading the teamsApp.
     * @var TeamsAppPermissionSet|\stdClass|null
     */
    public mixed $consentedPermissionSet = null;

    /** 
     * The app that is installed.
     * @var TeamsApp|\stdClass|null
     */
    public mixed $teamsApp = null;

    /** 
     * The details of this version of the app.
     * @var TeamsAppDefinition|\stdClass|null
     */
    public mixed $teamsAppDefinition = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['consentedPermissionSet'])) {
            $this->consentedPermissionSet = $data['consentedPermissionSet'];
        }
        if (isset($data['teamsApp'])) {
            $this->teamsApp = $data['teamsApp'];
        }
        if (isset($data['teamsAppDefinition'])) {
            $this->teamsAppDefinition = $data['teamsAppDefinition'];
        }
    }
}
