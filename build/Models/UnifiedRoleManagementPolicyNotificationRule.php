<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * UnifiedRoleManagementPolicyNotificationRule
 */
class UnifiedRoleManagementPolicyNotificationRule
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** Defines details of scope that's targeted by role management policy rule. The details can include the principal type, the role assignment type, and actions affecting a role. Supports $filter (eq, ne). */
        public ?string $target = null,
        /** Indicates whether a default recipient will receive the notification email. */
        public ?bool $isDefaultRecipientsEnabled = null,
        /** The level of notification. The possible values are None, Critical, All. */
        public ?string $notificationLevel = null,
        /** @var string[] The list of recipients of the email notifications. */
        public array $notificationRecipients = [],
        /** The type of notification. Only Email is supported. */
        public ?string $notificationType = null,
        /** The type of recipient of the notification. The possible values are Requestor, Approver, Admin. */
        public ?string $recipientType = null
    ) {}
}
