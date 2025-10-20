<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for IPv4CidrRange resources
 *
 * Available select fields:
 * - cidrAddress
 */
class IPv4CidrRangeQueryOptions extends QueryOptions
{
    public const FIELD_CIDR_ADDRESS = 'cidrAddress';

    /**
     * Select specific IPv4CidrRange properties
     * 
     * @param array<string> $select Use IPv4CidrRangeQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
