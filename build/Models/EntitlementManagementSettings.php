<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * EntitlementManagementSettings
 */
class EntitlementManagementSettings
{
    /**
     * If externalUserLifecycleAction is blockSignInAndDelete, the duration, typically many days, after an external user is blocked from sign in before their account is deleted.
     */
    private ?string $durationUntilExternalUserDeletedAfterBlocked;

    /**
     * Automatic action that the service should take when an external user''s last access package assignment is removed. The possible values are: none, blockSignIn, blockSignInAndDelete, unknownFutureValue.
     */
    private ?string $externalUserLifecycleAction;

    public function getDurationUntilExternalUserDeletedAfterBlocked(): ?string
    {
        return $this->durationUntilExternalUserDeletedAfterBlocked;
    }

    public function setDurationUntilExternalUserDeletedAfterBlocked(?string $durationUntilExternalUserDeletedAfterBlocked): self
    {
        $this->durationUntilExternalUserDeletedAfterBlocked = $durationUntilExternalUserDeletedAfterBlocked;
        return $this;
    }

    public function getExternalUserLifecycleAction(): ?string
    {
        return $this->externalUserLifecycleAction;
    }

    public function setExternalUserLifecycleAction(?string $externalUserLifecycleAction): self
    {
        $this->externalUserLifecycleAction = $externalUserLifecycleAction;
        return $this;
    }

}
