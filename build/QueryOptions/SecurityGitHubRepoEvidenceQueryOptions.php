<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityGitHubRepoEvidence resources
 *
 * Available select fields:
 */
class SecurityGitHubRepoEvidenceQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SecurityGitHubRepoEvidence
     */

    /**
     * Select specific SecurityGitHubRepoEvidence properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
