<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for MobileAppContentFile resources
 *
 * Available select fields:
 */
class MobileAppContentFileQueryOptions extends QueryOptions
{
    /**
     * Available select fields for MobileAppContentFile
     */

    /**
     * Select specific MobileAppContentFile properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
