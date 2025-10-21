<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityGitHubUserEvidence resources
 *
 * Available select fields:
 */
class SecurityGitHubUserEvidenceQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SecurityGitHubUserEvidence
     */

    /**
     * Select specific SecurityGitHubUserEvidence properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
