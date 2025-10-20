<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for UnifiedRoleEligibilityScheduleInstanceCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class UnifiedRoleEligibilityScheduleInstanceCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific UnifiedRoleEligibilityScheduleInstanceCollectionResponse properties
     * 
     * @param array<string> $select Use UnifiedRoleEligibilityScheduleInstanceCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
