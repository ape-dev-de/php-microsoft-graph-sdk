<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ApplePushNotificationCertificate resources
 *
 * Available select fields:
 * - appleIdentifier
 * - certificate
 * - certificateSerialNumber
 * - certificateUploadFailureReason
 * - certificateUploadStatus
 * - expirationDateTime
 * - lastModifiedDateTime
 * - topicIdentifier
 */
class ApplePushNotificationCertificateQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ApplePushNotificationCertificate
     */
    public const FIELD_APPLE_IDENTIFIER = 'appleIdentifier';
    public const FIELD_CERTIFICATE = 'certificate';
    public const FIELD_CERTIFICATE_SERIAL_NUMBER = 'certificateSerialNumber';
    public const FIELD_CERTIFICATE_UPLOAD_FAILURE_REASON = 'certificateUploadFailureReason';
    public const FIELD_CERTIFICATE_UPLOAD_STATUS = 'certificateUploadStatus';
    public const FIELD_EXPIRATION_DATE_TIME = 'expirationDateTime';
    public const FIELD_LAST_MODIFIED_DATE_TIME = 'lastModifiedDateTime';
    public const FIELD_TOPIC_IDENTIFIER = 'topicIdentifier';

    /**
     * Select specific ApplePushNotificationCertificate properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
