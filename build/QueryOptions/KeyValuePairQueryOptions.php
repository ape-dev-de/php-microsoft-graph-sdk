<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for KeyValuePair resources
 *
 * Available select fields:
 * - name
 * - value
 */
class KeyValuePairQueryOptions extends QueryOptions
{
    public const FIELD_NAME = 'name';
    public const FIELD_VALUE = 'value';

    /**
     * Select specific KeyValuePair properties
     * 
     * @param array<string> $select Use KeyValuePairQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
