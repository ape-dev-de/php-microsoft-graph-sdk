<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for PermissionScope resources
 *
 * Available select fields:
 * - adminConsentDescription
 * - adminConsentDisplayName
 * - id
 * - isEnabled
 * - origin
 * - type
 * - userConsentDescription
 * - userConsentDisplayName
 * - value
 */
class PermissionScopeQueryOptions extends QueryOptions
{
    public const FIELD_ADMIN_CONSENT_DESCRIPTION = 'adminConsentDescription';
    public const FIELD_ADMIN_CONSENT_DISPLAY_NAME = 'adminConsentDisplayName';
    public const FIELD_ID = 'id';
    public const FIELD_IS_ENABLED = 'isEnabled';
    public const FIELD_ORIGIN = 'origin';
    public const FIELD_TYPE = 'type';
    public const FIELD_USER_CONSENT_DESCRIPTION = 'userConsentDescription';
    public const FIELD_USER_CONSENT_DISPLAY_NAME = 'userConsentDisplayName';
    public const FIELD_VALUE = 'value';

    /**
     * Select specific PermissionScope properties
     * 
     * @param array<string> $select Use PermissionScopeQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
