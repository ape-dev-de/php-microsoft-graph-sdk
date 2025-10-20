<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for PrivilegedAccessGroupEligibilityScheduleInstanceCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class PrivilegedAccessGroupEligibilityScheduleInstanceCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific PrivilegedAccessGroupEligibilityScheduleInstanceCollectionResponse properties
     * 
     * @param array<string> $select Use PrivilegedAccessGroupEligibilityScheduleInstanceCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
