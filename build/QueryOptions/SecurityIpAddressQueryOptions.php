<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityIpAddress resources
 *
 * Available select fields:
 * - autonomousSystem
 * - countryOrRegion
 * - hostingProvider
 * - netblock
 */
class SecurityIpAddressQueryOptions extends QueryOptions
{
    public const FIELD_AUTONOMOUS_SYSTEM = 'autonomousSystem';
    public const FIELD_COUNTRY_OR_REGION = 'countryOrRegion';
    public const FIELD_HOSTING_PROVIDER = 'hostingProvider';
    public const FIELD_NETBLOCK = 'netblock';

    /**
     * Select specific SecurityIpAddress properties
     * 
     * @param array<string> $select Use SecurityIpAddressQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
