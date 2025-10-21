<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for WindowsUniversalAppXContainedApp resources
 *
 * Available select fields:
 */
class WindowsUniversalAppXContainedAppQueryOptions extends QueryOptions
{
    /**
     * Available select fields for WindowsUniversalAppXContainedApp
     */

    /**
     * Select specific WindowsUniversalAppXContainedApp properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
