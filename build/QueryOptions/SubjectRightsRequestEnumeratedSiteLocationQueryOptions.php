<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SubjectRightsRequestEnumeratedSiteLocation resources
 *
 * Available select fields:
 * - urls
 */
class SubjectRightsRequestEnumeratedSiteLocationQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SubjectRightsRequestEnumeratedSiteLocation
     */
    public const FIELD_URLS = 'urls';

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
