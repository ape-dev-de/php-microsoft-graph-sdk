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
    public const FIELD_KEY = 'key';
    public const FIELD_VALUE = 'value';

    /**
     * Select specific KeyValue properties
     * 
     * @param array<string> $select Use KeyValueQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
