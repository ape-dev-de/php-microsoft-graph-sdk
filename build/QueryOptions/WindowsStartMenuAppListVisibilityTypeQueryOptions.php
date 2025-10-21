<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for WindowsStartMenuAppListVisibilityType resources
 *
 * Available select fields:
 */
class WindowsStartMenuAppListVisibilityTypeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for WindowsStartMenuAppListVisibilityType
     */

    /**
     * Select specific WindowsStartMenuAppListVisibilityType properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
