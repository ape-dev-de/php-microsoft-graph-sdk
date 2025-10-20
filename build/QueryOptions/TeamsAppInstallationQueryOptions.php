<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for TeamsAppInstallation resources
 *
 * Available select fields:
 * - consentedPermissionSet
 * - teamsApp
 * - teamsAppDefinition
 */
class TeamsAppInstallationQueryOptions extends QueryOptions
{
    public const FIELD_CONSENTED_PERMISSION_SET = 'consentedPermissionSet';
    public const FIELD_TEAMS_APP = 'teamsApp';
    public const FIELD_TEAMS_APP_DEFINITION = 'teamsAppDefinition';

    /**
     * Select specific TeamsAppInstallation properties
     * 
     * @param array<string> $select Use TeamsAppInstallationQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
