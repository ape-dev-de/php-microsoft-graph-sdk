<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for OnInteractiveAuthFlowStartListener resources
 *
 * Available select fields:
 */
class OnInteractiveAuthFlowStartListenerQueryOptions extends QueryOptions
{
    /**
     * Available select fields for OnInteractiveAuthFlowStartListener
     */

    /**
     * Select specific OnInteractiveAuthFlowStartListener properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
