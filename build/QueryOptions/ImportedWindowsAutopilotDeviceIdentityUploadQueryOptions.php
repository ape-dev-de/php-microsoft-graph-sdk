<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ImportedWindowsAutopilotDeviceIdentityUpload resources
 *
 * Available select fields:
 * - createdDateTimeUtc
 * - status
 * - deviceIdentities
 */
class ImportedWindowsAutopilotDeviceIdentityUploadQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ImportedWindowsAutopilotDeviceIdentityUpload
     */
    public const FIELD_CREATED_DATE_TIME_UTC = 'createdDateTimeUtc';
    public const FIELD_STATUS = 'status';
    public const FIELD_DEVICE_IDENTITIES = 'deviceIdentities';

    /**
     * Select specific ImportedWindowsAutopilotDeviceIdentityUpload properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
