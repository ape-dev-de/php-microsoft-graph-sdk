<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SubjectRightsRequestSiteLocation resources
 *
 * Available select fields:
 */
class SubjectRightsRequestSiteLocationQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SubjectRightsRequestSiteLocation
     */

    /**
     * Select specific SubjectRightsRequestSiteLocation properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
