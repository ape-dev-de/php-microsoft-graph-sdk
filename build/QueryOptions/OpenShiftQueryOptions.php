<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for OpenShift resources
 *
 * Available select fields:
 */
class OpenShiftQueryOptions extends QueryOptions
{
    /**
     * Available select fields for OpenShift
     */

    /**
     * Select specific OpenShift properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
