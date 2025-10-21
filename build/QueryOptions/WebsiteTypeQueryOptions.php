<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for WebsiteType resources
 *
 * Available select fields:
 */
class WebsiteTypeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for WebsiteType
     */

    /**
     * Select specific WebsiteType properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
