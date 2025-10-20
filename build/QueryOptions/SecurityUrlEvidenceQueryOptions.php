<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityUrlEvidence resources
 *
 * Available select fields:
 * - url
 */
class SecurityUrlEvidenceQueryOptions extends QueryOptions
{
    public const FIELD_URL = 'url';

    /**
     * Select specific SecurityUrlEvidence properties
     * 
     * @param array<string> $select Use SecurityUrlEvidenceQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
