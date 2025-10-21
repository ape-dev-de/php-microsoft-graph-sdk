<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for OpenShiftChangeRequest resources
 *
 * Available select fields:
 */
class OpenShiftChangeRequestQueryOptions extends QueryOptions
{
    /**
     * Available select fields for OpenShiftChangeRequest
     */

    /**
     * Select specific OpenShiftChangeRequest properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
