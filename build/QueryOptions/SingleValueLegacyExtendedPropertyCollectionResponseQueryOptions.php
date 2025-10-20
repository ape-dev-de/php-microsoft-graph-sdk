<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SingleValueLegacyExtendedPropertyCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class SingleValueLegacyExtendedPropertyCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific SingleValueLegacyExtendedPropertyCollectionResponse properties
     * 
     * @param array<string> $select Use SingleValueLegacyExtendedPropertyCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
