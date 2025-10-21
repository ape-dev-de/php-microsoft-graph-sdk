<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for KeyValue resources
 *
 * Available select fields:
 * - key
 * - value
 */
class KeyValueQueryOptions extends QueryOptions
{
    /**
     * Available select fields for KeyValue
     */
    public const FIELD_KEY = 'key';
    public const FIELD_VALUE = 'value';

    /**
     * Select specific KeyValue properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
