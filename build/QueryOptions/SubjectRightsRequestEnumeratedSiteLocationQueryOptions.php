<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SubjectRightsRequestEnumeratedSiteLocation resources
 *
 * Available select fields:
 */
class SubjectRightsRequestEnumeratedSiteLocationQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SubjectRightsRequestEnumeratedSiteLocation
     */

    /**
     * Select specific SubjectRightsRequestEnumeratedSiteLocation properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
