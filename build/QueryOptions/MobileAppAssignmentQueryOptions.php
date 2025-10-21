<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for MobileAppAssignment resources
 *
 * Available select fields:
 * - intent
 * - settings
 * - target
 */
class MobileAppAssignmentQueryOptions extends QueryOptions
{
    /**
     * Available select fields for MobileAppAssignment
     */
    public const FIELD_INTENT = 'intent';
    public const FIELD_SETTINGS = 'settings';
    public const FIELD_TARGET = 'target';

    /**
     * Select specific MobileAppAssignment properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
