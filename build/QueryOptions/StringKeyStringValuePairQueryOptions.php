<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for StringKeyStringValuePair resources
 *
 * Available select fields:
 * - key
 * - value
 */
class StringKeyStringValuePairQueryOptions extends QueryOptions
{
    public const FIELD_KEY = 'key';
    public const FIELD_VALUE = 'value';

    /**
     * Select specific StringKeyStringValuePair properties
     * 
     * @param array<string> $select Use StringKeyStringValuePairQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
