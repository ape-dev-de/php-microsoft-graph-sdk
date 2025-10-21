<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for WindowsUpdateScheduledInstall resources
 *
 * Available select fields:
 * - scheduledInstallDay
 * - scheduledInstallTime
 */
class WindowsUpdateScheduledInstallQueryOptions extends QueryOptions
{
    /**
     * Available select fields for WindowsUpdateScheduledInstall
     */
    public const FIELD_SCHEDULED_INSTALL_DAY = 'scheduledInstallDay';
    public const FIELD_SCHEDULED_INSTALL_TIME = 'scheduledInstallTime';

    /**
     * Select specific WindowsUpdateScheduledInstall properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
