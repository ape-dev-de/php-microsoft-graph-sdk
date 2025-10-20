<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for WindowsUpdateActiveHoursInstall resources
 *
 * Available select fields:
 * - activeHoursEnd
 * - activeHoursStart
 */
class WindowsUpdateActiveHoursInstallQueryOptions extends QueryOptions
{
    public const FIELD_ACTIVE_HOURS_END = 'activeHoursEnd';
    public const FIELD_ACTIVE_HOURS_START = 'activeHoursStart';

    /**
     * Select specific WindowsUpdateActiveHoursInstall properties
     * 
     * @param array<string> $select Use WindowsUpdateActiveHoursInstallQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
