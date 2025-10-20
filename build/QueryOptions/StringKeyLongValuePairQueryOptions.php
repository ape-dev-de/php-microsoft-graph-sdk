<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for StringKeyLongValuePair resources
 *
 * Available select fields:
 * - key
 * - value
 */
class StringKeyLongValuePairQueryOptions extends QueryOptions
{
    public const FIELD_KEY = 'key';
    public const FIELD_VALUE = 'value';

    /**
     * Select specific StringKeyLongValuePair properties
     * 
     * @param array<string> $select Use StringKeyLongValuePairQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
