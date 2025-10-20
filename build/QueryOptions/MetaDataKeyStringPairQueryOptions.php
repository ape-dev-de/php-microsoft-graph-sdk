<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for MetaDataKeyStringPair resources
 *
 * Available select fields:
 * - key
 * - value
 */
class MetaDataKeyStringPairQueryOptions extends QueryOptions
{
    public const FIELD_KEY = 'key';
    public const FIELD_VALUE = 'value';

    /**
     * Select specific MetaDataKeyStringPair properties
     * 
     * @param array<string> $select Use MetaDataKeyStringPairQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
