<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ImportedWindowsAutopilotDeviceIdentityState resources
 *
 * Available select fields:
 * - deviceErrorCode
 * - deviceErrorName
 * - deviceImportStatus
 * - deviceRegistrationId
 */
class ImportedWindowsAutopilotDeviceIdentityStateQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ImportedWindowsAutopilotDeviceIdentityState
     */
    public const FIELD_DEVICE_ERROR_CODE = 'deviceErrorCode';
    public const FIELD_DEVICE_ERROR_NAME = 'deviceErrorName';
    public const FIELD_DEVICE_IMPORT_STATUS = 'deviceImportStatus';
    public const FIELD_DEVICE_REGISTRATION_ID = 'deviceRegistrationId';

    /**
     * Select specific ImportedWindowsAutopilotDeviceIdentityState properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
