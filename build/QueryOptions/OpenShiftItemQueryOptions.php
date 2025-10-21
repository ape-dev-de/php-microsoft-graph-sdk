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
    /**
     * Available select fields for OpenShiftItem
     */
    public const FIELD_OPEN_SLOT_COUNT = 'openSlotCount';

    /**
     * Select specific OpenShiftItem properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
