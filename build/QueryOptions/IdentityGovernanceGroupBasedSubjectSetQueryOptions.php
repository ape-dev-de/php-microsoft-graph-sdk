<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for IdentityGovernanceGroupBasedSubjectSet resources
 *
 * Available select fields:
 */
class IdentityGovernanceGroupBasedSubjectSetQueryOptions extends QueryOptions
{
    /**
     * Available select fields for IdentityGovernanceGroupBasedSubjectSet
     */

    /**
     * Select specific IdentityGovernanceGroupBasedSubjectSet properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
