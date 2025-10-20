<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for MultiValueLegacyExtendedProperty resources
 *
 * Available select fields:
 * - value
 */
class MultiValueLegacyExtendedPropertyQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific MultiValueLegacyExtendedProperty properties
     * 
     * @param array<string> $select Use MultiValueLegacyExtendedPropertyQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
