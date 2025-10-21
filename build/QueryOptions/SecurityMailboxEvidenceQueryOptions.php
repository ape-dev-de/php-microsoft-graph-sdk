<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityMailboxEvidence resources
 *
 * Available select fields:
 */
class SecurityMailboxEvidenceQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SecurityMailboxEvidence
     */

    /**
     * Select specific SecurityMailboxEvidence properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
