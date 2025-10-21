<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for PolicyTemplate resources
 *
 * Available select fields:
 */
class PolicyTemplateQueryOptions extends QueryOptions
{
    /**
     * Available select fields for PolicyTemplate
     */

    /**
     * Select specific PolicyTemplate properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
