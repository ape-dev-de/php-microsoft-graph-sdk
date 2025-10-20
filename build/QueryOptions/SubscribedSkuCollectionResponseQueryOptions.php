<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SubscribedSkuCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class SubscribedSkuCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific SubscribedSkuCollectionResponse properties
     * 
     * @param array<string> $select Use SubscribedSkuCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
