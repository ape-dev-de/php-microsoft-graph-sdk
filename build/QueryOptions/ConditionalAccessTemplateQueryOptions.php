<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ConditionalAccessTemplate resources
 *
 * Available select fields:
 */
class ConditionalAccessTemplateQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ConditionalAccessTemplate
     */

    /**
     * Select specific ConditionalAccessTemplate properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
