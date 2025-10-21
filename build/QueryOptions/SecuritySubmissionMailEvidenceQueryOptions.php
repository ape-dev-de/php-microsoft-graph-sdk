<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecuritySubmissionMailEvidence resources
 *
 * Available select fields:
 */
class SecuritySubmissionMailEvidenceQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SecuritySubmissionMailEvidence
     */

    /**
     * Select specific SecuritySubmissionMailEvidence properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
