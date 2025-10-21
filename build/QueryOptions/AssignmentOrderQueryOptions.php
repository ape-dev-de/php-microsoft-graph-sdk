<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AssignmentOrder resources
 *
 * Available select fields:
 * - order
 */
class AssignmentOrderQueryOptions extends QueryOptions
{
    /**
     * Available select fields for AssignmentOrder
     */
    public const FIELD_ORDER = 'order';

    /**
     * Select specific AssignmentOrder properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
