<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityCloudLogonSessionEvidence resources
 *
 * Available select fields:
 */
class SecurityCloudLogonSessionEvidenceQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SecurityCloudLogonSessionEvidence
     */

    /**
     * Select specific SecurityCloudLogonSessionEvidence properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
