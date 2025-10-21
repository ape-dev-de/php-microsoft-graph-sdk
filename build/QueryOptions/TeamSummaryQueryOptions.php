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
    /**
     * Available select fields for TeamSummary
     */
    public const FIELD_GUESTS_COUNT = 'guestsCount';
    public const FIELD_MEMBERS_COUNT = 'membersCount';
    public const FIELD_OWNERS_COUNT = 'ownersCount';

    /**
     * Select specific TeamSummary properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
