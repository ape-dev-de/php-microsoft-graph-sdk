<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for DriveProtectionUnitsBulkAdditionJob resources
 *
 * Available select fields:
 * - directoryObjectIds
 * - drives
 */
class DriveProtectionUnitsBulkAdditionJobQueryOptions extends QueryOptions
{
    public const FIELD_DIRECTORY_OBJECT_IDS = 'directoryObjectIds';
    public const FIELD_DRIVES = 'drives';

    /**
     * Select specific DriveProtectionUnitsBulkAdditionJob properties
     * 
     * @param array<string> $select Use DriveProtectionUnitsBulkAdditionJobQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
