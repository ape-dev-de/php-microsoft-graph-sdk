<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for IPv4Range resources
 *
 * Available select fields:
 * - lowerAddress
 * - upperAddress
 */
class IPv4RangeQueryOptions extends QueryOptions
{
    public const FIELD_LOWER_ADDRESS = 'lowerAddress';
    public const FIELD_UPPER_ADDRESS = 'upperAddress';

    /**
     * Select specific IPv4Range properties
     * 
     * @param array<string> $select Use IPv4RangeQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
