<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityGoogleCloudResourceEvidence resources
 *
 * Available select fields:
 */
class SecurityGoogleCloudResourceEvidenceQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SecurityGoogleCloudResourceEvidence
     */

    /**
     * Select specific SecurityGoogleCloudResourceEvidence properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
