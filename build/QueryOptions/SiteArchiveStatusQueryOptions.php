<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SiteArchiveStatus resources
 *
 * Available select fields:
 */
class SiteArchiveStatusQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SiteArchiveStatus
     */

    /**
     * Select specific SiteArchiveStatus properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
