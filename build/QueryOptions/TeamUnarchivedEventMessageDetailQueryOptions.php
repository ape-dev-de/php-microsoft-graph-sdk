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
    /**
     * Available select fields for TeamUnarchivedEventMessageDetail
     */
    public const FIELD_INITIATOR = 'initiator';
    public const FIELD_TEAM_ID = 'teamId';

    /**
     * Select specific TeamUnarchivedEventMessageDetail properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
