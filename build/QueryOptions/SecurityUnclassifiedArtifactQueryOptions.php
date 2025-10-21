<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityUnclassifiedArtifact resources
 *
 * Available select fields:
 */
class SecurityUnclassifiedArtifactQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SecurityUnclassifiedArtifact
     */

    /**
     * Select specific SecurityUnclassifiedArtifact properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
