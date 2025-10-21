<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityOauthApplicationEvidence resources
 *
 * Available select fields:
 */
class SecurityOauthApplicationEvidenceQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SecurityOauthApplicationEvidence
     */

    /**
     * Select specific SecurityOauthApplicationEvidence properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
