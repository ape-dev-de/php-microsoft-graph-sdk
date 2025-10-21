<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for RestoreArtifactBase resources
 *
 * Available select fields:
 */
class RestoreArtifactBaseQueryOptions extends QueryOptions
{
    /**
     * Available select fields for RestoreArtifactBase
     */

    /**
     * Select specific RestoreArtifactBase properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
