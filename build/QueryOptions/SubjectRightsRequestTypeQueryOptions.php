<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SubjectRightsRequestType resources
 *
 * Available select fields:
 */
class SubjectRightsRequestTypeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SubjectRightsRequestType
     */

    /**
     * Select specific SubjectRightsRequestType properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
