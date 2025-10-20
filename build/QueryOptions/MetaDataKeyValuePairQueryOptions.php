<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for MetaDataKeyValuePair resources
 *
 * Available select fields:
 * - key
 * - value
 */
class MetaDataKeyValuePairQueryOptions extends QueryOptions
{
    public const FIELD_KEY = 'key';
    public const FIELD_VALUE = 'value';

    /**
     * Select specific MetaDataKeyValuePair properties
     * 
     * @param array<string> $select Use MetaDataKeyValuePairQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
