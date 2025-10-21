<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ApplePushNotificationCertificate
 */
class ApplePushNotificationCertificate
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** Apple Id of the account used to create the MDM push certificate. */
        public ?string $appleIdentifier = null,
        /** Not yet documented */
        public ?string $certificate = null,
        /** Certificate serial number. This property is read-only. */
        public ?string $certificateSerialNumber = null,
        /** The reason the certificate upload failed. */
        public ?string $certificateUploadFailureReason = null,
        /** The certificate upload status. */
        public ?string $certificateUploadStatus = null,
        /** The expiration date and time for Apple push notification certificate. */
        public ?\DateTimeInterface $expirationDateTime = null,
        /** Last modified date and time for Apple push notification certificate. */
        public ?\DateTimeInterface $lastModifiedDateTime = null,
        /** Apple push notification certificate. */
        public ?string $topicIdentifier = null
    ) {}
}
