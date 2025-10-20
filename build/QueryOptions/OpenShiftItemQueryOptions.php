<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for OpenShiftItem resources
 *
 * Available select fields:
 * - openSlotCount
 */
class OpenShiftItemQueryOptions extends QueryOptions
{
    public const FIELD_OPEN_SLOT_COUNT = 'openSlotCount';

    /**
     * Select specific OpenShiftItem properties
     * 
     * @param array<string> $select Use OpenShiftItemQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
