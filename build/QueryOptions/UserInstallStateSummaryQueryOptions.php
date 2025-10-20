<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for UserInstallStateSummary resources
 *
 * Available select fields:
 * - failedDeviceCount
 * - installedDeviceCount
 * - notInstalledDeviceCount
 * - userName
 * - deviceStates
 */
class UserInstallStateSummaryQueryOptions extends QueryOptions
{
    public const FIELD_FAILED_DEVICE_COUNT = 'failedDeviceCount';
    public const FIELD_INSTALLED_DEVICE_COUNT = 'installedDeviceCount';
    public const FIELD_NOT_INSTALLED_DEVICE_COUNT = 'notInstalledDeviceCount';
    public const FIELD_USER_NAME = 'userName';
    public const FIELD_DEVICE_STATES = 'deviceStates';

    /**
     * Select specific UserInstallStateSummary properties
     * 
     * @param array<string> $select Use UserInstallStateSummaryQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
