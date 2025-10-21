<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityAnalyzedMessageEvidence resources
 *
 * Available select fields:
 */
class SecurityAnalyzedMessageEvidenceQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SecurityAnalyzedMessageEvidence
     */

    /**
     * Select specific SecurityAnalyzedMessageEvidence properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
