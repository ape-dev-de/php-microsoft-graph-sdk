<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityHostLogonSessionEvidence resources
 *
 * Available select fields:
 */
class SecurityHostLogonSessionEvidenceQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SecurityHostLogonSessionEvidence
     */

    /**
     * Select specific SecurityHostLogonSessionEvidence properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
