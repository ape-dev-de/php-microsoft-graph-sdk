<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for IpNamedLocation resources
 *
 * Available select fields:
 * - ipRanges
 * - isTrusted
 */
class IpNamedLocationQueryOptions extends QueryOptions
{
    public const FIELD_IP_RANGES = 'ipRanges';
    public const FIELD_IS_TRUSTED = 'isTrusted';

    /**
     * Select specific IpNamedLocation properties
     * 
     * @param array<string> $select Use IpNamedLocationQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
