<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SubjectRightsRequest resources
 *
 * Available select fields:
 */
class SubjectRightsRequestQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SubjectRightsRequest
     */

    /**
     * Select specific SubjectRightsRequest properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
