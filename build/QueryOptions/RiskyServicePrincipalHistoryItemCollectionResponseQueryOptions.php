<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for RiskyServicePrincipalHistoryItemCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class RiskyServicePrincipalHistoryItemCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific RiskyServicePrincipalHistoryItemCollectionResponse properties
     * 
     * @param array<string> $select Use RiskyServicePrincipalHistoryItemCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
