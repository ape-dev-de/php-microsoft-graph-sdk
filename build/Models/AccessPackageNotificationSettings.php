<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AccessPackageNotificationSettings
 */
class AccessPackageNotificationSettings
{
    /**
     * Indicates if notification emails for an access package are disabled within an access package assignment policy.
     */
    private ?string $isAssignmentNotificationDisabled;

    public function getIsAssignmentNotificationDisabled(): ?string
    {
        return $this->isAssignmentNotificationDisabled;
    }

    public function setIsAssignmentNotificationDisabled(?string $isAssignmentNotificationDisabled): self
    {
        $this->isAssignmentNotificationDisabled = $isAssignmentNotificationDisabled;
        return $this;
    }

}
