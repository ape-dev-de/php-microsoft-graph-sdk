<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * UnifiedRoleManagementPolicyNotificationRule
 */
class UnifiedRoleManagementPolicyNotificationRule
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** 
     * Defines details of scope that's targeted by role management policy rule. The details can include the principal type, the role assignment type, and actions affecting a role. Supports $filter (eq, ne).
     * @var UnifiedRoleManagementPolicyRuleTarget|\stdClass|null
     */
    public mixed $target = null;

    /** Indicates whether a default recipient will receive the notification email. */
    public ?bool $isDefaultRecipientsEnabled = null;

    /** The level of notification. The possible values are None, Critical, All. */
    public ?string $notificationLevel = null;

    /** 
     * The list of recipients of the email notifications.
     * @var string[]
     */
    public array $notificationRecipients = [];

    /** The type of notification. Only Email is supported. */
    public ?string $notificationType = null;

    /** The type of recipient of the notification. The possible values are Requestor, Approver, Admin. */
    public ?string $recipientType = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['target'])) {
            $this->target = is_array($data['target']) ? new UnifiedRoleManagementPolicyRuleTarget($data['target']) : $data['target'];
        }
        if (isset($data['isDefaultRecipientsEnabled'])) {
            $this->isDefaultRecipientsEnabled = $data['isDefaultRecipientsEnabled'];
        }
        if (isset($data['notificationLevel'])) {
            $this->notificationLevel = $data['notificationLevel'];
        }
        if (isset($data['notificationRecipients'])) {
            $this->notificationRecipients = $data['notificationRecipients'];
        }
        if (isset($data['notificationType'])) {
            $this->notificationType = $data['notificationType'];
        }
        if (isset($data['recipientType'])) {
            $this->recipientType = $data['recipientType'];
        }
    }

    /**
     * Get raw data from API response
     * @return array<string, mixed>
     */
    public function getRaw(): array
    {
        return $this->rawData;
    }
}
