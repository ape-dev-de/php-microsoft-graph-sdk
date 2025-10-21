<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for DeviceInstallState resources
 *
 * Available select fields:
 * - deviceId
 * - deviceName
 * - errorCode
 * - installState
 * - lastSyncDateTime
 * - osDescription
 * - osVersion
 * - userName
 */
class DeviceInstallStateQueryOptions extends QueryOptions
{
    /**
     * Available select fields for DeviceInstallState
     */
    public const FIELD_DEVICE_ID = 'deviceId';
    public const FIELD_DEVICE_NAME = 'deviceName';
    public const FIELD_ERROR_CODE = 'errorCode';
    public const FIELD_INSTALL_STATE = 'installState';
    public const FIELD_LAST_SYNC_DATE_TIME = 'lastSyncDateTime';
    public const FIELD_OS_DESCRIPTION = 'osDescription';
    public const FIELD_OS_VERSION = 'osVersion';
    public const FIELD_USER_NAME = 'userName';

    /**
     * Select specific DeviceInstallState properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
