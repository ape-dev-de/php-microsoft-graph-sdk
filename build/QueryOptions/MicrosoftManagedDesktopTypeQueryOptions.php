<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for MicrosoftManagedDesktopType resources
 *
 * Available select fields:
 */
class MicrosoftManagedDesktopTypeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for MicrosoftManagedDesktopType
     */

    /**
     * Select specific MicrosoftManagedDesktopType properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
