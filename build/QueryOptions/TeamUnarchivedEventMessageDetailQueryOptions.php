<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for TeamUnarchivedEventMessageDetail resources
 *
 * Available select fields:
 * - initiator
 * - teamId
 */
class TeamUnarchivedEventMessageDetailQueryOptions extends QueryOptions
{
    public const FIELD_INITIATOR = 'initiator';
    public const FIELD_TEAM_ID = 'teamId';

    /**
     * Select specific TeamUnarchivedEventMessageDetail properties
     * 
     * @param array<string> $select Use TeamUnarchivedEventMessageDetailQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
