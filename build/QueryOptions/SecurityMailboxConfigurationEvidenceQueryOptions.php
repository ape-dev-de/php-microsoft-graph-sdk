<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityMailboxConfigurationEvidence resources
 *
 * Available select fields:
 */
class SecurityMailboxConfigurationEvidenceQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SecurityMailboxConfigurationEvidence
     */

    /**
     * Select specific SecurityMailboxConfigurationEvidence properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
