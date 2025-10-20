<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for TeamsTab resources
 *
 * Available select fields:
 * - configuration
 * - displayName
 * - webUrl
 * - teamsApp
 */
class TeamsTabQueryOptions extends QueryOptions
{
    public const FIELD_CONFIGURATION = 'configuration';
    public const FIELD_DISPLAY_NAME = 'displayName';
    public const FIELD_WEB_URL = 'webUrl';
    public const FIELD_TEAMS_APP = 'teamsApp';

    /**
     * Select specific TeamsTab properties
     * 
     * @param array<string> $select Use TeamsTabQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
