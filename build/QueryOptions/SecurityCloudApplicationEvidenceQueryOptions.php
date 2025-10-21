<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityCloudApplicationEvidence resources
 *
 * Available select fields:
 */
class SecurityCloudApplicationEvidenceQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SecurityCloudApplicationEvidence
     */

    /**
     * Select specific SecurityCloudApplicationEvidence properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
