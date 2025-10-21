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
    /**
     * Available select fields for KeyValuePair
     */
    public const FIELD_NAME = 'name';
    public const FIELD_VALUE = 'value';

    /**
     * Select specific KeyValuePair properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
