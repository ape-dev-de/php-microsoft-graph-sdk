<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for TeamCreatedEventMessageDetail resources
 *
 * Available select fields:
 * - initiator
 * - teamDescription
 * - teamDisplayName
 * - teamId
 */
class TeamCreatedEventMessageDetailQueryOptions extends QueryOptions
{
    /**
     * Available select fields for TeamCreatedEventMessageDetail
     */
    public const FIELD_INITIATOR = 'initiator';
    public const FIELD_TEAM_DESCRIPTION = 'teamDescription';
    public const FIELD_TEAM_DISPLAY_NAME = 'teamDisplayName';
    public const FIELD_TEAM_ID = 'teamId';

    /**
     * Select specific TeamCreatedEventMessageDetail properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
