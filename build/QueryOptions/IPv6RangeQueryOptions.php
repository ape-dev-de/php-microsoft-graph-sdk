<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for IPv6Range resources
 *
 * Available select fields:
 * - lowerAddress
 * - upperAddress
 */
class IPv6RangeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for IPv6Range
     */
    public const FIELD_LOWER_ADDRESS = 'lowerAddress';
    public const FIELD_UPPER_ADDRESS = 'upperAddress';

    /**
     * Select specific IPv6Range properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
