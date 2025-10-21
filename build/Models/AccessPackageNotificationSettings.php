<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AccessPackageNotificationSettings
 */
class AccessPackageNotificationSettings
{
    public function __construct(
        /** Indicates if notification emails for an access package are disabled within an access package assignment policy. */
        public ?bool $isAssignmentNotificationDisabled = null
    ) {}
}
