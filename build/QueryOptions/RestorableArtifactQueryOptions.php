<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for RestorableArtifact resources
 *
 * Available select fields:
 */
class RestorableArtifactQueryOptions extends QueryOptions
{
    /**
     * Available select fields for RestorableArtifact
     */

    /**
     * Select specific RestorableArtifact properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
