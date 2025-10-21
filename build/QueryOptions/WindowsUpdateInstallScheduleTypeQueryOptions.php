<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for WindowsUpdateInstallScheduleType resources
 *
 * Available select fields:
 */
class WindowsUpdateInstallScheduleTypeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for WindowsUpdateInstallScheduleType
     */

    /**
     * Select specific WindowsUpdateInstallScheduleType properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
