<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for IosHomeScreenAppCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class IosHomeScreenAppCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific IosHomeScreenAppCollectionResponse properties
     * 
     * @param array<string> $select Use IosHomeScreenAppCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
