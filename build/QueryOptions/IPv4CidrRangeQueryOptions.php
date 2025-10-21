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
    /**
     * Available select fields for IPv4CidrRange
     */
    public const FIELD_CIDR_ADDRESS = 'cidrAddress';

    /**
     * Select specific IPv4CidrRange properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
