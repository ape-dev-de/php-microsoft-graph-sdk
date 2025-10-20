<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for OpenShiftChangeRequest resources
 *
 * Available select fields:
 * - openShiftId
 */
class OpenShiftChangeRequestQueryOptions extends QueryOptions
{
    public const FIELD_OPEN_SHIFT_ID = 'openShiftId';

    /**
     * Select specific OpenShiftChangeRequest properties
     * 
     * @param array<string> $select Use OpenShiftChangeRequestQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
