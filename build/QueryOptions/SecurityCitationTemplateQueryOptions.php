<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityCitationTemplate resources
 *
 * Available select fields:
 * - citationJurisdiction
 * - citationUrl
 */
class SecurityCitationTemplateQueryOptions extends QueryOptions
{
    public const FIELD_CITATION_JURISDICTION = 'citationJurisdiction';
    public const FIELD_CITATION_URL = 'citationUrl';

    /**
     * Select specific SecurityCitationTemplate properties
     * 
     * @param array<string> $select Use SecurityCitationTemplateQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
