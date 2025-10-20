<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AppConsentRequest resources
 *
 * Available select fields:
 * - appDisplayName
 * - appId
 * - pendingScopes
 * - userConsentRequests
 */
class AppConsentRequestQueryOptions extends QueryOptions
{
    public const FIELD_APP_DISPLAY_NAME = 'appDisplayName';
    public const FIELD_APP_ID = 'appId';
    public const FIELD_PENDING_SCOPES = 'pendingScopes';
    public const FIELD_USER_CONSENT_REQUESTS = 'userConsentRequests';

    /**
     * Select specific AppConsentRequest properties
     * 
     * @param array<string> $select Use AppConsentRequestQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
