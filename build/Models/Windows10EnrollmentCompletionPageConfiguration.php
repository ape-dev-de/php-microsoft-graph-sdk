<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Windows10EnrollmentCompletionPageConfiguration
 */
class Windows10EnrollmentCompletionPageConfiguration
{
    /**
     * Windows 10 Enrollment Status Page Configuration
     */
    private ?string $allowNonBlockingAppInstallation;

    public function getAllowNonBlockingAppInstallation(): ?string
    {
        return $this->allowNonBlockingAppInstallation;
    }

    public function setAllowNonBlockingAppInstallation(?string $allowNonBlockingAppInstallation): self
    {
        $this->allowNonBlockingAppInstallation = $allowNonBlockingAppInstallation;
        return $this;
    }

}
