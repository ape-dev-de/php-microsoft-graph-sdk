<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for WindowsUpdateActiveHoursInstall resources
 *
 * Available select fields:
 */
class WindowsUpdateActiveHoursInstallQueryOptions extends QueryOptions
{
    /**
     * Available select fields for WindowsUpdateActiveHoursInstall
     */

    /**
     * Select specific WindowsUpdateActiveHoursInstall properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
