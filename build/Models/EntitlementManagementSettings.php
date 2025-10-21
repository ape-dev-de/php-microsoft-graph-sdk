<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * EntitlementManagementSettings
 */
class EntitlementManagementSettings
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** If externalUserLifecycleAction is blockSignInAndDelete, the duration, typically many days, after an external user is blocked from sign in before their account is deleted. */
        public ?string $durationUntilExternalUserDeletedAfterBlocked = null,
        /** Automatic action that the service should take when an external user's last access package assignment is removed. The possible values are: none, blockSignIn, blockSignInAndDelete, unknownFutureValue. */
        public ?AccessPackageExternalUserLifecycleAction $externalUserLifecycleAction = null
    ) {}
}
