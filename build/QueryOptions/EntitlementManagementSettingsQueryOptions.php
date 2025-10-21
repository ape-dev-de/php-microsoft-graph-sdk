<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for EntitlementManagementSettings resources
 *
 * Available select fields:
 * - durationUntilExternalUserDeletedAfterBlocked
 * - externalUserLifecycleAction
 */
class EntitlementManagementSettingsQueryOptions extends QueryOptions
{
    /**
     * Available select fields for EntitlementManagementSettings
     */
    public const FIELD_DURATION_UNTIL_EXTERNAL_USER_DELETED_AFTER_BLOCKED = 'durationUntilExternalUserDeletedAfterBlocked';
    public const FIELD_EXTERNAL_USER_LIFECYCLE_ACTION = 'externalUserLifecycleAction';

    /**
     * Select specific EntitlementManagementSettings properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
