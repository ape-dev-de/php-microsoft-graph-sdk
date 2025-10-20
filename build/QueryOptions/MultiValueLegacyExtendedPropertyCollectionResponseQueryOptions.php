<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for MultiValueLegacyExtendedPropertyCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class MultiValueLegacyExtendedPropertyCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific MultiValueLegacyExtendedPropertyCollectionResponse properties
     * 
     * @param array<string> $select Use MultiValueLegacyExtendedPropertyCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
