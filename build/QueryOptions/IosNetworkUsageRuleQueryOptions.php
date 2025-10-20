<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for IosNetworkUsageRule resources
 *
 * Available select fields:
 * - cellularDataBlocked
 * - cellularDataBlockWhenRoaming
 * - managedApps
 */
class IosNetworkUsageRuleQueryOptions extends QueryOptions
{
    public const FIELD_CELLULAR_DATA_BLOCKED = 'cellularDataBlocked';
    public const FIELD_CELLULAR_DATA_BLOCK_WHEN_ROAMING = 'cellularDataBlockWhenRoaming';
    public const FIELD_MANAGED_APPS = 'managedApps';

    /**
     * Select specific IosNetworkUsageRule properties
     * 
     * @param array<string> $select Use IosNetworkUsageRuleQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
