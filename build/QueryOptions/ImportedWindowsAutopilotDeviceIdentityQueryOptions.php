<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ImportedWindowsAutopilotDeviceIdentity resources
 *
 * Available select fields:
 * - assignedUserPrincipalName
 * - groupTag
 * - hardwareIdentifier
 * - importId
 * - productKey
 * - serialNumber
 * - state
 */
class ImportedWindowsAutopilotDeviceIdentityQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ImportedWindowsAutopilotDeviceIdentity
     */
    public const FIELD_ASSIGNED_USER_PRINCIPAL_NAME = 'assignedUserPrincipalName';
    public const FIELD_GROUP_TAG = 'groupTag';
    public const FIELD_HARDWARE_IDENTIFIER = 'hardwareIdentifier';
    public const FIELD_IMPORT_ID = 'importId';
    public const FIELD_PRODUCT_KEY = 'productKey';
    public const FIELD_SERIAL_NUMBER = 'serialNumber';
    public const FIELD_STATE = 'state';

    /**
     * Select specific ImportedWindowsAutopilotDeviceIdentity properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
