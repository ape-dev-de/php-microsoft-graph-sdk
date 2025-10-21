<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * NotificationMessageTemplate
 */
class NotificationMessageTemplate
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /**  */
        public ?string $brandingOptions = null,
        /** The default locale to fallback onto when the requested locale is not available. */
        public ?string $defaultLocale = null,
        /** Display name for the Notification Message Template. */
        public ?string $displayName = null,
        /** DateTime the object was last modified. */
        public ?\DateTimeInterface $lastModifiedDateTime = null,
        /** @var string[] List of Scope Tags for this Entity instance. */
        public array $roleScopeTagIds = [],
        /** @var string[] Notification messages are messages that are sent to end users who are determined to be not-compliant with the compliance policies defined by the administrator. Administrators choose notifications and configure them in the Intune Admin Console using the compliance policy creation page under the “Actions for non-compliance” section. Use the notificationMessageTemplate object to create your own custom notifications for administrators to choose while configuring actions for non-compliance. */
        public array $localizedNotificationMessages = []
    ) {}
}
