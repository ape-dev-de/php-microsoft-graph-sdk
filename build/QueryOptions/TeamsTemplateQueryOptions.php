<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for TeamsTemplate resources
 *
 * Available select fields:
 */
class TeamsTemplateQueryOptions extends QueryOptions
{
    /**
     * Available select fields for TeamsTemplate
     */

    /**
     * Select specific TeamsTemplate properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
