<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AccessPackageNotificationSettings resources
 *
 * Available select fields:
 * - isAssignmentNotificationDisabled
 */
class AccessPackageNotificationSettingsQueryOptions extends QueryOptions
{
    /**
     * Available select fields for AccessPackageNotificationSettings
     */
    public const FIELD_IS_ASSIGNMENT_NOTIFICATION_DISABLED = 'isAssignmentNotificationDisabled';

    /**
     * Select specific AccessPackageNotificationSettings properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
