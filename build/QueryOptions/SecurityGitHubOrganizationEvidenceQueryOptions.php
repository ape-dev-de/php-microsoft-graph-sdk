<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityGitHubOrganizationEvidence resources
 *
 * Available select fields:
 * - company
 * - displayName
 * - email
 * - login
 * - orgId
 * - webUrl
 */
class SecurityGitHubOrganizationEvidenceQueryOptions extends QueryOptions
{
    public const FIELD_COMPANY = 'company';
    public const FIELD_DISPLAY_NAME = 'displayName';
    public const FIELD_EMAIL = 'email';
    public const FIELD_LOGIN = 'login';
    public const FIELD_ORG_ID = 'orgId';
    public const FIELD_WEB_URL = 'webUrl';

    /**
     * Select specific SecurityGitHubOrganizationEvidence properties
     * 
     * @param array<string> $select Use SecurityGitHubOrganizationEvidenceQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
