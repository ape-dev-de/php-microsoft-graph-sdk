<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityGitHubUserEvidence resources
 *
 * Available select fields:
 * - email
 * - login
 * - name
 * - userId
 * - webUrl
 */
class SecurityGitHubUserEvidenceQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SecurityGitHubUserEvidence
     */
    public const FIELD_EMAIL = 'email';
    public const FIELD_LOGIN = 'login';
    public const FIELD_NAME = 'name';
    public const FIELD_USER_ID = 'userId';
    public const FIELD_WEB_URL = 'webUrl';

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
