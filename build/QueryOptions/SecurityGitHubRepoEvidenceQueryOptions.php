<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityGitHubRepoEvidence resources
 *
 * Available select fields:
 * - baseUrl
 * - login
 * - owner
 * - ownerType
 * - repoId
 */
class SecurityGitHubRepoEvidenceQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SecurityGitHubRepoEvidence
     */
    public const FIELD_BASE_URL = 'baseUrl';
    public const FIELD_LOGIN = 'login';
    public const FIELD_OWNER = 'owner';
    public const FIELD_OWNER_TYPE = 'ownerType';
    public const FIELD_REPO_ID = 'repoId';

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
