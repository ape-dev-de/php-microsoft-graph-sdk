<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ScheduleEntityTheme resources
 *
 * Available select fields:
 */
class ScheduleEntityThemeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ScheduleEntityTheme
     */

    /**
     * Select specific ScheduleEntityTheme properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
