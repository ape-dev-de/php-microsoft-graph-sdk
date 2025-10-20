<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for CopilotAdminLimitedMode resources
 *
 * Available select fields:
 * - groupId
 * - isEnabledForGroup
 */
class CopilotAdminLimitedModeQueryOptions extends QueryOptions
{
    public const FIELD_GROUP_ID = 'groupId';
    public const FIELD_IS_ENABLED_FOR_GROUP = 'isEnabledForGroup';

    /**
     * Select specific CopilotAdminLimitedMode properties
     * 
     * @param array<string> $select Use CopilotAdminLimitedModeQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
