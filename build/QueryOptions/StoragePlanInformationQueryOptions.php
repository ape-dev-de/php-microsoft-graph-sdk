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
    /**
     * Available select fields for StoragePlanInformation
     */
    public const FIELD_UPGRADE_AVAILABLE = 'upgradeAvailable';

    /**
     * Select specific StoragePlanInformation properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
