<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityAmazonResourceEvidence resources
 *
 * Available select fields:
 */
class SecurityAmazonResourceEvidenceQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SecurityAmazonResourceEvidence
     */

    /**
     * Select specific SecurityAmazonResourceEvidence properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
