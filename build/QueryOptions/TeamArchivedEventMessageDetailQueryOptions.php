<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for TeamArchivedEventMessageDetail resources
 *
 * Available select fields:
 * - initiator
 * - teamId
 */
class TeamArchivedEventMessageDetailQueryOptions extends QueryOptions
{
    public const FIELD_INITIATOR = 'initiator';
    public const FIELD_TEAM_ID = 'teamId';

    /**
     * Select specific TeamArchivedEventMessageDetail properties
     * 
     * @param array<string> $select Use TeamArchivedEventMessageDetailQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
