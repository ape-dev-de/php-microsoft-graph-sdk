<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for TeamSummary resources
 *
 * Available select fields:
 * - guestsCount
 * - membersCount
 * - ownersCount
 */
class TeamSummaryQueryOptions extends QueryOptions
{
    public const FIELD_GUESTS_COUNT = 'guestsCount';
    public const FIELD_MEMBERS_COUNT = 'membersCount';
    public const FIELD_OWNERS_COUNT = 'ownersCount';

    /**
     * Select specific TeamSummary properties
     * 
     * @param array<string> $select Use TeamSummaryQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
