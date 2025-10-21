<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for RestoreArtifactsBulkRequestBase resources
 *
 * Available select fields:
 */
class RestoreArtifactsBulkRequestBaseQueryOptions extends QueryOptions
{
    /**
     * Available select fields for RestoreArtifactsBulkRequestBase
     */

    /**
     * Select specific RestoreArtifactsBulkRequestBase properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
