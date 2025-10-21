<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityEvidenceVerdict resources
 *
 * Available select fields:
 */
class SecurityEvidenceVerdictQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SecurityEvidenceVerdict
     */

    /**
     * Select specific SecurityEvidenceVerdict properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
