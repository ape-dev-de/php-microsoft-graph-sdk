<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SingleValueLegacyExtendedProperty resources
 *
 * Available select fields:
 * - value
 */
class SingleValueLegacyExtendedPropertyQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific SingleValueLegacyExtendedProperty properties
     * 
     * @param array<string> $select Use SingleValueLegacyExtendedPropertyQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
