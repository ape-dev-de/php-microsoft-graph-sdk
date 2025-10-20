<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for UnifiedRoleEligibilityScheduleRequestCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class UnifiedRoleEligibilityScheduleRequestCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific UnifiedRoleEligibilityScheduleRequestCollectionResponse properties
     * 
     * @param array<string> $select Use UnifiedRoleEligibilityScheduleRequestCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
