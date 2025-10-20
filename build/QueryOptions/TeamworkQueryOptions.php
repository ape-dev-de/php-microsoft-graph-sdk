<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for Teamwork resources
 *
 * Available select fields:
 * - isTeamsEnabled
 * - region
 * - deletedChats
 * - deletedTeams
 * - teamsAppSettings
 * - workforceIntegrations
 */
class TeamworkQueryOptions extends QueryOptions
{
    public const FIELD_IS_TEAMS_ENABLED = 'isTeamsEnabled';
    public const FIELD_REGION = 'region';
    public const FIELD_DELETED_CHATS = 'deletedChats';
    public const FIELD_DELETED_TEAMS = 'deletedTeams';
    public const FIELD_TEAMS_APP_SETTINGS = 'teamsAppSettings';
    public const FIELD_WORKFORCE_INTEGRATIONS = 'workforceIntegrations';

    /**
     * Select specific Teamwork properties
     * 
     * @param array<string> $select Use TeamworkQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
