<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for CompanySubscriptionCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class CompanySubscriptionCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific CompanySubscriptionCollectionResponse properties
     * 
     * @param array<string> $select Use CompanySubscriptionCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
