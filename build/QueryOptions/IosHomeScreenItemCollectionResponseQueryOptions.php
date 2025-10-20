<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for IosHomeScreenItemCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class IosHomeScreenItemCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific IosHomeScreenItemCollectionResponse properties
     * 
     * @param array<string> $select Use IosHomeScreenItemCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
