<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for StoragePlanInformation resources
 *
 * Available select fields:
 * - upgradeAvailable
 */
class StoragePlanInformationQueryOptions extends QueryOptions
{
    public const FIELD_UPGRADE_AVAILABLE = 'upgradeAvailable';

    /**
     * Select specific StoragePlanInformation properties
     * 
     * @param array<string> $select Use StoragePlanInformationQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
