<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityEvidenceRemediationStatus resources
 *
 * Available select fields:
 */
class SecurityEvidenceRemediationStatusQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SecurityEvidenceRemediationStatus
     */

    /**
     * Select specific SecurityEvidenceRemediationStatus properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
