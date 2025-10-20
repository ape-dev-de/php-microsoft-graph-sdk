<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for RiskyServicePrincipalHistoryItem resources
 *
 * Available select fields:
 * - activity
 * - initiatedBy
 */
class RiskyServicePrincipalHistoryItemQueryOptions extends QueryOptions
{
    public const FIELD_ACTIVITY = 'activity';
    public const FIELD_INITIATED_BY = 'initiatedBy';

    /**
     * Select specific RiskyServicePrincipalHistoryItem properties
     * 
     * @param array<string> $select Use RiskyServicePrincipalHistoryItemQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
