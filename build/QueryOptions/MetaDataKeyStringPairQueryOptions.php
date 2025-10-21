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
    /**
     * Available select fields for MetaDataKeyStringPair
     */
    public const FIELD_KEY = 'key';
    public const FIELD_VALUE = 'value';

    /**
     * Select specific MetaDataKeyStringPair properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
