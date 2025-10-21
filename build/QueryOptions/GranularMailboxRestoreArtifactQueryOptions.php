<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for GranularMailboxRestoreArtifact resources
 *
 * Available select fields:
 */
class GranularMailboxRestoreArtifactQueryOptions extends QueryOptions
{
    /**
     * Available select fields for GranularMailboxRestoreArtifact
     */

    /**
     * Select specific GranularMailboxRestoreArtifact properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
