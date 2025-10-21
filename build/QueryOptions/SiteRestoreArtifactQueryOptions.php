<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SiteRestoreArtifact resources
 *
 * Available select fields:
 */
class SiteRestoreArtifactQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SiteRestoreArtifact
     */

    /**
     * Select specific SiteRestoreArtifact properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
