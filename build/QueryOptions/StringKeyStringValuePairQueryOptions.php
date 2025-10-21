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
    /**
     * Available select fields for StringKeyStringValuePair
     */
    public const FIELD_KEY = 'key';
    public const FIELD_VALUE = 'value';

    /**
     * Select specific StringKeyStringValuePair properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
