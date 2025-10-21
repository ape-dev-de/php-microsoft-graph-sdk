<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * GroupLifecyclePolicy
 */
class GroupLifecyclePolicy
{
    public function __construct(
        /** List of email address to send notifications for groups without owners. Multiple email address can be defined by separating email address with a semicolon. */
        public ?string $alternateNotificationEmails = null,
        /** Number of days before a group expires and needs to be renewed. Once renewed, the group expiration is extended by the number of days defined. */
        public ?float $groupLifetimeInDays = null,
        /** The group type for which the expiration policy applies. Possible values are All, Selected or None. */
        public ?string $managedGroupTypes = null
    ) {}
}
