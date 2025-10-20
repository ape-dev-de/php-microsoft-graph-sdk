<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for RiskyUserHistoryItem resources
 *
 * Available select fields:
 * - activity
 * - initiatedBy
 * - userId
 */
class RiskyUserHistoryItemQueryOptions extends QueryOptions
{
    public const FIELD_ACTIVITY = 'activity';
    public const FIELD_INITIATED_BY = 'initiatedBy';
    public const FIELD_USER_ID = 'userId';

    /**
     * Select specific RiskyUserHistoryItem properties
     * 
     * @param array<string> $select Use RiskyUserHistoryItemQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
