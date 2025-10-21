<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for StringKeyAttributeMappingSourceValuePair resources
 *
 * Available select fields:
 * - key
 * - value
 */
class StringKeyAttributeMappingSourceValuePairQueryOptions extends QueryOptions
{
    /**
     * Available select fields for StringKeyAttributeMappingSourceValuePair
     */
    public const FIELD_KEY = 'key';
    public const FIELD_VALUE = 'value';

    /**
     * Select specific StringKeyAttributeMappingSourceValuePair properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
