<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SchedulingGroup resources
 *
 * Available select fields:
 * - code
 * - displayName
 * - isActive
 * - userIds
 */
class SchedulingGroupQueryOptions extends QueryOptions
{
    public const FIELD_CODE = 'code';
    public const FIELD_DISPLAY_NAME = 'displayName';
    public const FIELD_IS_ACTIVE = 'isActive';
    public const FIELD_USER_IDS = 'userIds';

    /**
     * Select specific SchedulingGroup properties
     * 
     * @param array<string> $select Use SchedulingGroupQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
