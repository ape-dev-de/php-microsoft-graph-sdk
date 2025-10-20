<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for DomainState resources
 *
 * Available select fields:
 * - lastActionDateTime
 * - operation
 * - status
 */
class DomainStateQueryOptions extends QueryOptions
{
    public const FIELD_LAST_ACTION_DATE_TIME = 'lastActionDateTime';
    public const FIELD_OPERATION = 'operation';
    public const FIELD_STATUS = 'status';

    /**
     * Select specific DomainState properties
     * 
     * @param array<string> $select Use DomainStateQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
