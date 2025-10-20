<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for UnifiedRoleEligibilityScheduleCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class UnifiedRoleEligibilityScheduleCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific UnifiedRoleEligibilityScheduleCollectionResponse properties
     * 
     * @param array<string> $select Use UnifiedRoleEligibilityScheduleCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
