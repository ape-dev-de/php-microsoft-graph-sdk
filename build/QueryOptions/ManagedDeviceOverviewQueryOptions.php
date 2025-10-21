<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ManagedDeviceOverview resources
 *
 * Available select fields:
 * - deviceExchangeAccessStateSummary
 * - deviceOperatingSystemSummary
 * - dualEnrolledDeviceCount
 * - enrolledDeviceCount
 * - mdmEnrolledCount
 */
class ManagedDeviceOverviewQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ManagedDeviceOverview
     */
    public const FIELD_DEVICE_EXCHANGE_ACCESS_STATE_SUMMARY = 'deviceExchangeAccessStateSummary';
    public const FIELD_DEVICE_OPERATING_SYSTEM_SUMMARY = 'deviceOperatingSystemSummary';
    public const FIELD_DUAL_ENROLLED_DEVICE_COUNT = 'dualEnrolledDeviceCount';
    public const FIELD_ENROLLED_DEVICE_COUNT = 'enrolledDeviceCount';
    public const FIELD_MDM_ENROLLED_COUNT = 'mdmEnrolledCount';

    /**
     * Select specific ManagedDeviceOverview properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
