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
    public const FIELD_LOWER_ADDRESS = 'lowerAddress';
    public const FIELD_UPPER_ADDRESS = 'upperAddress';

    /**
     * Select specific IPv6Range properties
     * 
     * @param array<string> $select Use IPv6RangeQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
