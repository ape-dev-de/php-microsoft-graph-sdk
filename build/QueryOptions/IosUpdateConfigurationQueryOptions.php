<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for IosUpdateConfiguration resources
 *
 * Available select fields:
 * - activeHoursEnd
 * - activeHoursStart
 * - scheduledInstallDays
 * - utcTimeOffsetInMinutes
 */
class IosUpdateConfigurationQueryOptions extends QueryOptions
{
    /**
     * Available select fields for IosUpdateConfiguration
     */
    public const FIELD_ACTIVE_HOURS_END = 'activeHoursEnd';
    public const FIELD_ACTIVE_HOURS_START = 'activeHoursStart';
    public const FIELD_SCHEDULED_INSTALL_DAYS = 'scheduledInstallDays';
    public const FIELD_UTC_TIME_OFFSET_IN_MINUTES = 'utcTimeOffsetInMinutes';

    /**
     * Select specific IosUpdateConfiguration properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
