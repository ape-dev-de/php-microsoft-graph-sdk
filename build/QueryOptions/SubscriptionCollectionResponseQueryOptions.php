<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SubscriptionCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class SubscriptionCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific SubscriptionCollectionResponse properties
     * 
     * @param array<string> $select Use SubscriptionCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
