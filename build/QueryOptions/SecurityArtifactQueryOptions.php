<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityArtifact resources
 *
 * Available select fields:
 */
class SecurityArtifactQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SecurityArtifact
     */

    /**
     * Select specific SecurityArtifact properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
