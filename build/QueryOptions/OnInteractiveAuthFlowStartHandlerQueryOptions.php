<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for OnInteractiveAuthFlowStartHandler resources
 *
 * Available select fields:
 */
class OnInteractiveAuthFlowStartHandlerQueryOptions extends QueryOptions
{
    /**
     * Available select fields for OnInteractiveAuthFlowStartHandler
     */

    /**
     * Select specific OnInteractiveAuthFlowStartHandler properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
