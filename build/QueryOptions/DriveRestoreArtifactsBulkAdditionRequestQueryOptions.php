<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for DriveRestoreArtifactsBulkAdditionRequest resources
 *
 * Available select fields:
 */
class DriveRestoreArtifactsBulkAdditionRequestQueryOptions extends QueryOptions
{
    /**
     * Available select fields for DriveRestoreArtifactsBulkAdditionRequest
     */

    /**
     * Select specific DriveRestoreArtifactsBulkAdditionRequest properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
