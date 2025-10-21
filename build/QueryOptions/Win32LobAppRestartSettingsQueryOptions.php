<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for Win32LobAppRestartSettings resources
 *
 * Available select fields:
 * - countdownDisplayBeforeRestartInMinutes
 * - gracePeriodInMinutes
 * - restartNotificationSnoozeDurationInMinutes
 */
class Win32LobAppRestartSettingsQueryOptions extends QueryOptions
{
    /**
     * Available select fields for Win32LobAppRestartSettings
     */
    public const FIELD_COUNTDOWN_DISPLAY_BEFORE_RESTART_IN_MINUTES = 'countdownDisplayBeforeRestartInMinutes';
    public const FIELD_GRACE_PERIOD_IN_MINUTES = 'gracePeriodInMinutes';
    public const FIELD_RESTART_NOTIFICATION_SNOOZE_DURATION_IN_MINUTES = 'restartNotificationSnoozeDurationInMinutes';

    /**
     * Select specific Win32LobAppRestartSettings properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
