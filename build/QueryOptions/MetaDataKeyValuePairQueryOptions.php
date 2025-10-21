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
    /**
     * Available select fields for MetaDataKeyValuePair
     */
    public const FIELD_KEY = 'key';
    public const FIELD_VALUE = 'value';

    /**
     * Select specific MetaDataKeyValuePair properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
