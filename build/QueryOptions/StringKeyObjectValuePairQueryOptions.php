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
    /**
     * Available select fields for StringKeyObjectValuePair
     */
    public const FIELD_KEY = 'key';

    /**
     * Select specific StringKeyObjectValuePair properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
