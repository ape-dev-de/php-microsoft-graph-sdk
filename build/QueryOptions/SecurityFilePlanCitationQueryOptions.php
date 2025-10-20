<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityFilePlanCitation resources
 *
 * Available select fields:
 * - citationJurisdiction
 * - citationUrl
 */
class SecurityFilePlanCitationQueryOptions extends QueryOptions
{
    public const FIELD_CITATION_JURISDICTION = 'citationJurisdiction';
    public const FIELD_CITATION_URL = 'citationUrl';

    /**
     * Select specific SecurityFilePlanCitation properties
     * 
     * @param array<string> $select Use SecurityFilePlanCitationQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
