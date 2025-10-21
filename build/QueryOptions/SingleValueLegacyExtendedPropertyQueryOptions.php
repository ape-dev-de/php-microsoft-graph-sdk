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
    /**
     * Available select fields for SingleValueLegacyExtendedProperty
     */
    public const FIELD_VALUE = 'value';

    /**
     * Select specific SingleValueLegacyExtendedProperty properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
