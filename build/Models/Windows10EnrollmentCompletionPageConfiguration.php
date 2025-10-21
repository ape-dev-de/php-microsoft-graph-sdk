<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Windows10EnrollmentCompletionPageConfiguration
 */
class Windows10EnrollmentCompletionPageConfiguration
{
    public function __construct(
        /** Windows 10 Enrollment Status Page Configuration */
        public ?string $allowNonBlockingAppInstallation = null
    ) {}
}
