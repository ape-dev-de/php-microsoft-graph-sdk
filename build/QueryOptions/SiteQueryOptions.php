<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for Site resources
 *
 * Available select fields:
 */
class SiteQueryOptions extends QueryOptions
{
    /**
     * Available select fields for Site
     */

    /**
     * Select specific Site properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
