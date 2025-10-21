<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityTeamsMessageEvidence resources
 *
 * Available select fields:
 */
class SecurityTeamsMessageEvidenceQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SecurityTeamsMessageEvidence
     */

    /**
     * Select specific SecurityTeamsMessageEvidence properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
