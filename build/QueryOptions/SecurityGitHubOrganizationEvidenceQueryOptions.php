<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityGitHubOrganizationEvidence resources
 *
 * Available select fields:
 */
class SecurityGitHubOrganizationEvidenceQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SecurityGitHubOrganizationEvidence
     */

    /**
     * Select specific SecurityGitHubOrganizationEvidence properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
