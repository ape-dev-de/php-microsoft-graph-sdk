<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WindowsInformationProtectionDataRecoveryCertificate
 */
class WindowsInformationProtectionDataRecoveryCertificate
{
    public function __construct(
        /** Data recovery Certificate */
        public ?string $certificate = null,
        /** Data recovery Certificate description */
        public ?string $description = null,
        /** Data recovery Certificate expiration datetime */
        public ?\DateTimeInterface $expirationDateTime = null,
        /** Data recovery Certificate subject name */
        public ?string $subjectName = null
    ) {}
}
