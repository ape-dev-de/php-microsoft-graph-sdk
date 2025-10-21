<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for MobileAppInstallTimeSettings resources
 *
 * Available select fields:
 * - deadlineDateTime
 * - startDateTime
 * - useLocalTime
 */
class MobileAppInstallTimeSettingsQueryOptions extends QueryOptions
{
    /**
     * Available select fields for MobileAppInstallTimeSettings
     */
    public const FIELD_DEADLINE_DATE_TIME = 'deadlineDateTime';
    public const FIELD_START_DATE_TIME = 'startDateTime';
    public const FIELD_USE_LOCAL_TIME = 'useLocalTime';

    /**
     * Select specific MobileAppInstallTimeSettings properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
