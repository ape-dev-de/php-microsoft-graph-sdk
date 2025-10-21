<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SubjectRightsRequestAllSiteLocation resources
 *
 * Available select fields:
 */
class SubjectRightsRequestAllSiteLocationQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SubjectRightsRequestAllSiteLocation
     */

    /**
     * Select specific SubjectRightsRequestAllSiteLocation properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
