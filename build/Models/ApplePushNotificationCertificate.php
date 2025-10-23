<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ApplePushNotificationCertificate
 */
class ApplePushNotificationCertificate
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** Apple Id of the account used to create the MDM push certificate. */
    public ?string $appleIdentifier = null;

    /** Not yet documented */
    public ?string $certificate = null;

    /** Certificate serial number. This property is read-only. */
    public ?string $certificateSerialNumber = null;

    /** The reason the certificate upload failed. */
    public ?string $certificateUploadFailureReason = null;

    /** The certificate upload status. */
    public ?string $certificateUploadStatus = null;

    /** The expiration date and time for Apple push notification certificate. */
    public ?\DateTimeInterface $expirationDateTime = null;

    /** Last modified date and time for Apple push notification certificate. */
    public ?\DateTimeInterface $lastModifiedDateTime = null;

    /** Topic Id. */
    public ?string $topicIdentifier = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['appleIdentifier'])) {
            $this->appleIdentifier = $data['appleIdentifier'];
        }
        if (isset($data['certificate'])) {
            $this->certificate = $data['certificate'];
        }
        if (isset($data['certificateSerialNumber'])) {
            $this->certificateSerialNumber = $data['certificateSerialNumber'];
        }
        if (isset($data['certificateUploadFailureReason'])) {
            $this->certificateUploadFailureReason = $data['certificateUploadFailureReason'];
        }
        if (isset($data['certificateUploadStatus'])) {
            $this->certificateUploadStatus = $data['certificateUploadStatus'];
        }
        if (isset($data['expirationDateTime'])) {
            $this->expirationDateTime = $data['expirationDateTime'];
        }
        if (isset($data['lastModifiedDateTime'])) {
            $this->lastModifiedDateTime = $data['lastModifiedDateTime'];
        }
        if (isset($data['topicIdentifier'])) {
            $this->topicIdentifier = $data['topicIdentifier'];
        }
    }
}
