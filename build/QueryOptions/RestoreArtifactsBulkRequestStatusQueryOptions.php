<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for RestoreArtifactsBulkRequestStatus resources
 *
 * Available select fields:
 */
class RestoreArtifactsBulkRequestStatusQueryOptions extends QueryOptions
{
    /**
     * Available select fields for RestoreArtifactsBulkRequestStatus
     */

    /**
     * Select specific RestoreArtifactsBulkRequestStatus properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
