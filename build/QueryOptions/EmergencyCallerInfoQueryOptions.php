<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for EmergencyCallerInfo resources
 *
 * Available select fields:
 * - displayName
 * - location
 * - phoneNumber
 * - tenantId
 * - upn
 */
class EmergencyCallerInfoQueryOptions extends QueryOptions
{
    public const FIELD_DISPLAY_NAME = 'displayName';
    public const FIELD_LOCATION = 'location';
    public const FIELD_PHONE_NUMBER = 'phoneNumber';
    public const FIELD_TENANT_ID = 'tenantId';
    public const FIELD_UPN = 'upn';

    /**
     * Select specific EmergencyCallerInfo properties
     * 
     * @param array<string> $select Use EmergencyCallerInfoQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
