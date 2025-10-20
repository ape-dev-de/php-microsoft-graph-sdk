<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for IdentityGovernanceMembershipChangeTrigger resources
 *
 * Available select fields:
 * - changeType
 */
class IdentityGovernanceMembershipChangeTriggerQueryOptions extends QueryOptions
{
    public const FIELD_CHANGE_TYPE = 'changeType';

    /**
     * Select specific IdentityGovernanceMembershipChangeTrigger properties
     * 
     * @param array<string> $select Use IdentityGovernanceMembershipChangeTriggerQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
