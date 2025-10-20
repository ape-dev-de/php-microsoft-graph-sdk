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
    public const FIELD_URLS = 'urls';

    /**
     * Select specific SubjectRightsRequestEnumeratedSiteLocation properties
     * 
     * @param array<string> $select Use SubjectRightsRequestEnumeratedSiteLocationQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
