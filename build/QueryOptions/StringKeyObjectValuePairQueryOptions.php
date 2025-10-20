<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for StringKeyObjectValuePair resources
 *
 * Available select fields:
 * - key
 */
class StringKeyObjectValuePairQueryOptions extends QueryOptions
{
    public const FIELD_KEY = 'key';

    /**
     * Select specific StringKeyObjectValuePair properties
     * 
     * @param array<string> $select Use StringKeyObjectValuePairQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
