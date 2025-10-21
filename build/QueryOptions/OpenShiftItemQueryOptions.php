<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for OpenShiftItem resources
 *
 * Available select fields:
 */
class OpenShiftItemQueryOptions extends QueryOptions
{
    /**
     * Available select fields for OpenShiftItem
     */

    /**
     * Select specific OpenShiftItem properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
