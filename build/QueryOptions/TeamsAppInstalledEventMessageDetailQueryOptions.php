<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for TeamsAppInstalledEventMessageDetail resources
 *
 * Available select fields:
 * - initiator
 * - teamsAppDisplayName
 * - teamsAppId
 */
class TeamsAppInstalledEventMessageDetailQueryOptions extends QueryOptions
{
    public const FIELD_INITIATOR = 'initiator';
    public const FIELD_TEAMS_APP_DISPLAY_NAME = 'teamsAppDisplayName';
    public const FIELD_TEAMS_APP_ID = 'teamsAppId';

    /**
     * Select specific TeamsAppInstalledEventMessageDetail properties
     * 
     * @param array<string> $select Use TeamsAppInstalledEventMessageDetailQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
