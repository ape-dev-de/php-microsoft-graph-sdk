<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityHostReputationClassification resources
 *
 * Available select fields:
 */
class SecurityHostReputationClassificationQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SecurityHostReputationClassification
     */

    /**
     * Select specific SecurityHostReputationClassification properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
