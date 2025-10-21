<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for UserFlowType resources
 *
 * Available select fields:
 */
class UserFlowTypeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for UserFlowType
     */

    /**
     * Select specific UserFlowType properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
