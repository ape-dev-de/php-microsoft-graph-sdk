<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for Fido2KeyRestrictions resources
 *
 * Available select fields:
 * - aaGuids
 * - enforcementType
 * - isEnforced
 */
class Fido2KeyRestrictionsQueryOptions extends QueryOptions
{
    /**
     * Available select fields for Fido2KeyRestrictions
     */
    public const FIELD_AA_GUIDS = 'aaGuids';
    public const FIELD_ENFORCEMENT_TYPE = 'enforcementType';
    public const FIELD_IS_ENFORCED = 'isEnforced';

    /**
     * Select specific Fido2KeyRestrictions properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
