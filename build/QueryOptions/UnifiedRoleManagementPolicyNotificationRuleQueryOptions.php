<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for UnifiedRoleManagementPolicyNotificationRule resources
 *
 * Available select fields:
 * - isDefaultRecipientsEnabled
 * - notificationLevel
 * - notificationRecipients
 * - notificationType
 * - recipientType
 */
class UnifiedRoleManagementPolicyNotificationRuleQueryOptions extends QueryOptions
{
    public const FIELD_IS_DEFAULT_RECIPIENTS_ENABLED = 'isDefaultRecipientsEnabled';
    public const FIELD_NOTIFICATION_LEVEL = 'notificationLevel';
    public const FIELD_NOTIFICATION_RECIPIENTS = 'notificationRecipients';
    public const FIELD_NOTIFICATION_TYPE = 'notificationType';
    public const FIELD_RECIPIENT_TYPE = 'recipientType';

    /**
     * Select specific UnifiedRoleManagementPolicyNotificationRule properties
     * 
     * @param array<string> $select Use UnifiedRoleManagementPolicyNotificationRuleQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
