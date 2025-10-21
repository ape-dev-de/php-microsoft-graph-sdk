<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SigningCertificateUpdateStatus
 */
class SigningCertificateUpdateStatus
{
    public function __construct(
        /** Status of the last certificate update. Read-only. For a list of statuses, see certificateUpdateResult status. */
        public ?string $certificateUpdateResult = null,
        /** Date and time in ISO 8601 format and in UTC time when the certificate was last updated. Read-only. */
        public ?\DateTimeInterface $lastRunDateTime = null
    ) {}
}
