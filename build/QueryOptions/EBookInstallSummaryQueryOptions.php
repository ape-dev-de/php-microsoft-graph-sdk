<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for EBookInstallSummary resources
 *
 * Available select fields:
 * - failedDeviceCount
 * - failedUserCount
 * - installedDeviceCount
 * - installedUserCount
 * - notInstalledDeviceCount
 * - notInstalledUserCount
 */
class EBookInstallSummaryQueryOptions extends QueryOptions
{
    /**
     * Available select fields for EBookInstallSummary
     */
    public const FIELD_FAILED_DEVICE_COUNT = 'failedDeviceCount';
    public const FIELD_FAILED_USER_COUNT = 'failedUserCount';
    public const FIELD_INSTALLED_DEVICE_COUNT = 'installedDeviceCount';
    public const FIELD_INSTALLED_USER_COUNT = 'installedUserCount';
    public const FIELD_NOT_INSTALLED_DEVICE_COUNT = 'notInstalledDeviceCount';
    public const FIELD_NOT_INSTALLED_USER_COUNT = 'notInstalledUserCount';

    /**
     * Select specific EBookInstallSummary properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
