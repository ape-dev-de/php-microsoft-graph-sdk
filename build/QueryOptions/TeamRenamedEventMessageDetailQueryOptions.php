<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for TeamRenamedEventMessageDetail resources
 *
 * Available select fields:
 * - initiator
 * - teamDisplayName
 * - teamId
 */
class TeamRenamedEventMessageDetailQueryOptions extends QueryOptions
{
    public const FIELD_INITIATOR = 'initiator';
    public const FIELD_TEAM_DISPLAY_NAME = 'teamDisplayName';
    public const FIELD_TEAM_ID = 'teamId';

    /**
     * Select specific TeamRenamedEventMessageDetail properties
     * 
     * @param array<string> $select Use TeamRenamedEventMessageDetailQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
