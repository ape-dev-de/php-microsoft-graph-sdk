<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for TeamsAppSettings resources
 *
 * Available select fields:
 * - allowUserRequestsForAppAccess
 * - isUserPersonalScopeResourceSpecificConsentEnabled
 */
class TeamsAppSettingsQueryOptions extends QueryOptions
{
    /**
     * Available select fields for TeamsAppSettings
     */
    public const FIELD_ALLOW_USER_REQUESTS_FOR_APP_ACCESS = 'allowUserRequestsForAppAccess';
    public const FIELD_IS_USER_PERSONAL_SCOPE_RESOURCE_SPECIFIC_CONSENT_ENABLED = 'isUserPersonalScopeResourceSpecificConsentEnabled';

    /**
     * Select specific TeamsAppSettings properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
