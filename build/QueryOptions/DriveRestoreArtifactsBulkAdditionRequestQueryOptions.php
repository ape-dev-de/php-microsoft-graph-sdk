<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for DriveRestoreArtifactsBulkAdditionRequest resources
 *
 * Available select fields:
 * - directoryObjectIds
 * - drives
 */
class DriveRestoreArtifactsBulkAdditionRequestQueryOptions extends QueryOptions
{
    public const FIELD_DIRECTORY_OBJECT_IDS = 'directoryObjectIds';
    public const FIELD_DRIVES = 'drives';

    /**
     * Select specific DriveRestoreArtifactsBulkAdditionRequest properties
     * 
     * @param array<string> $select Use DriveRestoreArtifactsBulkAdditionRequestQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
