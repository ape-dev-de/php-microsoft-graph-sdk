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
    public const FIELD_IS_ASSIGNMENT_NOTIFICATION_DISABLED = 'isAssignmentNotificationDisabled';

    /**
     * Select specific AccessPackageNotificationSettings properties
     * 
     * @param array<string> $select Use AccessPackageNotificationSettingsQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
