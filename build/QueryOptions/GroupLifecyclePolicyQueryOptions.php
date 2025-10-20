<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for GroupLifecyclePolicy resources
 *
 * Available select fields:
 * - alternateNotificationEmails
 * - groupLifetimeInDays
 * - managedGroupTypes
 */
class GroupLifecyclePolicyQueryOptions extends QueryOptions
{
    public const FIELD_ALTERNATE_NOTIFICATION_EMAILS = 'alternateNotificationEmails';
    public const FIELD_GROUP_LIFETIME_IN_DAYS = 'groupLifetimeInDays';
    public const FIELD_MANAGED_GROUP_TYPES = 'managedGroupTypes';

    /**
     * Select specific GroupLifecyclePolicy properties
     * 
     * @param array<string> $select Use GroupLifecyclePolicyQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
