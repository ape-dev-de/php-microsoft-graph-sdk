<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for IdentityGovernanceGroupBasedSubjectSet resources
 *
 * Available select fields:
 * - groups
 */
class IdentityGovernanceGroupBasedSubjectSetQueryOptions extends QueryOptions
{
    /**
     * Available select fields for IdentityGovernanceGroupBasedSubjectSet
     */
    public const FIELD_GROUPS = 'groups';

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
