<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for DriveRestoreArtifact resources
 *
 * Available select fields:
 */
class DriveRestoreArtifactQueryOptions extends QueryOptions
{
    /**
     * Available select fields for DriveRestoreArtifact
     */

    /**
     * Select specific DriveRestoreArtifact properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
