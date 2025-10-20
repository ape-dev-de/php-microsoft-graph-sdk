<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ApiApplication resources
 *
 * Available select fields:
 * - acceptMappedClaims
 * - knownClientApplications
 * - oauth2PermissionScopes
 * - preAuthorizedApplications
 * - requestedAccessTokenVersion
 */
class ApiApplicationQueryOptions extends QueryOptions
{
    public const FIELD_ACCEPT_MAPPED_CLAIMS = 'acceptMappedClaims';
    public const FIELD_KNOWN_CLIENT_APPLICATIONS = 'knownClientApplications';
    public const FIELD_OAUTH2PERMISSION_SCOPES = 'oauth2PermissionScopes';
    public const FIELD_PRE_AUTHORIZED_APPLICATIONS = 'preAuthorizedApplications';
    public const FIELD_REQUESTED_ACCESS_TOKEN_VERSION = 'requestedAccessTokenVersion';

    /**
     * Select specific ApiApplication properties
     * 
     * @param array<string> $select Use ApiApplicationQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
