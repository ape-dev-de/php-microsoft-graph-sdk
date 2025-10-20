<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SwapShiftsChangeRequest resources
 *
 * Available select fields:
 * - recipientShiftId
 */
class SwapShiftsChangeRequestQueryOptions extends QueryOptions
{
    public const FIELD_RECIPIENT_SHIFT_ID = 'recipientShiftId';

    /**
     * Select specific SwapShiftsChangeRequest properties
     * 
     * @param array<string> $select Use SwapShiftsChangeRequestQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
