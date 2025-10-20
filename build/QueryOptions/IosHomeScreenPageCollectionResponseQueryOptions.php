<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for IosHomeScreenPageCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class IosHomeScreenPageCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific IosHomeScreenPageCollectionResponse properties
     * 
     * @param array<string> $select Use IosHomeScreenPageCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
