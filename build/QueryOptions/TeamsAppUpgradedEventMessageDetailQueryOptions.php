<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for TeamsAppUpgradedEventMessageDetail resources
 *
 * Available select fields:
 * - initiator
 * - teamsAppDisplayName
 * - teamsAppId
 */
class TeamsAppUpgradedEventMessageDetailQueryOptions extends QueryOptions
{
    /**
     * Available select fields for TeamsAppUpgradedEventMessageDetail
     */
    public const FIELD_INITIATOR = 'initiator';
    public const FIELD_TEAMS_APP_DISPLAY_NAME = 'teamsAppDisplayName';
    public const FIELD_TEAMS_APP_ID = 'teamsAppId';

    /**
     * Select specific TeamsAppUpgradedEventMessageDetail properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
