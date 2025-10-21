<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Subscription
 */
class Subscription
{
    /**
     * Optional. Identifier of the application used to create the subscription. Read-only.
     */
    private ?string $applicationId;

    /**
     * Required. Indicates the type of change in the subscribed resource that raises a change notification. The supported values are: created, updated, deleted. Multiple values can be combined using a comma-separated list. Note:  Drive root item and list change notifications support only the updated changeType. User and group change notifications support updated and deleted changeType. Use updated to receive notifications when user or group is created, updated, or soft deleted. Use deleted to receive notifications when user or group is permanently deleted.
     */
    private ?string $changeType;

    /**
     * Optional. Specifies the value of the clientState property sent by the service in each change notification. The maximum length is 128 characters. The client can check that the change notification came from the service by comparing the value of the clientState property sent with the subscription with the value of the clientState property received with each change notification.
     */
    private ?string $clientState;

    /**
     * Optional. Identifier of the user or service principal that created the subscription. If the app used delegated permissions to create the subscription, this field contains the ID of the signed-in user the app called on behalf of. If the app used application permissions, this field contains the ID of the service principal corresponding to the app. Read-only.
     */
    private ?string $creatorId;

    /**
     * Optional. A base64-encoded representation of a certificate with a public key used to encrypt resource data in change notifications. Optional but required when includeResourceData is true.
     */
    private ?string $encryptionCertificate;

    /**
     * Optional. A custom app-provided identifier to help identify the certificate needed to decrypt resource data.
     */
    private ?string $encryptionCertificateId;

    /**
     * Required. Specifies the date and time when the webhook subscription expires. The time is in UTC, and can be an amount of time from subscription creation that varies for the resource subscribed to. Any value under 45 minutes after the time of the request is automatically set to 45 minutes after the request time. For the maximum supported subscription length of time, see Subscription lifetime.
     */
    private ?\DateTimeInterface $expirationDateTime;

    /**
     * Optional. When set to true, change notifications include resource data (such as content of a chat message).
     */
    private ?bool $includeResourceData;

    /**
     * Optional. Specifies the latest version of Transport Layer Security (TLS) that the notification endpoint, specified by notificationUrl, supports. The possible values are: v10, v11, v12, v13. For subscribers whose notification endpoint supports a version lower than the currently recommended version (TLS 1.2), specifying this property by a set timeline allows them to temporarily use their deprecated version of TLS before completing their upgrade to TLS 1.2. For these subscribers, not setting this property per the timeline would result in subscription operations failing. For subscribers whose notification endpoint already supports TLS 1.2, setting this property is optional. In such cases, Microsoft Graph defaults the property to v1_2.
     */
    private ?string $latestSupportedTlsVersion;

    /**
     * Required for Teams resources if  the expirationDateTime value is more than 1 hour from now; optional otherwise. The URL of the endpoint that receives lifecycle notifications, including subscriptionRemoved, reauthorizationRequired, and missed notifications. This URL must make use of the HTTPS protocol. For more information, see Reduce missing subscriptions and change notifications.
     */
    private ?string $lifecycleNotificationUrl;

    /**
     * Optional. OData query options for specifying value for the targeting resource. Clients receive notifications when resource reaches the state matching the query options provided here. With this new property in the subscription creation payload along with all existing properties, Webhooks deliver notifications whenever a resource reaches the desired state mentioned in the notificationQueryOptions property. For example, when the print job is completed or when a print job resource isFetchable property value becomes true etc.  Supported only for Universal Print Service. For more information, see Subscribe to change notifications from cloud printing APIs using Microsoft Graph.
     */
    private ?string $notificationQueryOptions;

    /**
     * Required. The URL of the endpoint that receives the change notifications. This URL must make use of the HTTPS protocol. Any query string parameter included in the notificationUrl property is included in the HTTP POST request when Microsoft Graph sends the change notifications.
     */
    private ?string $notificationUrl;

    /**
     * Optional. The app ID that the subscription service can use to generate the validation token. The value allows the client to validate the authenticity of the notification received.
     */
    private ?string $notificationUrlAppId;

    /**
     * Required. Specifies the resource that is monitored for changes. Don't include the base URL (https://graph.microsoft.com/v1.0/). See the possible resource path values for each supported resource.
     */
    private ?string $resource;


    public function getApplicationId(): ?string
    {
        return $this->applicationId;
    }

    public function setApplicationId(?string $applicationId): self
    {
        $this->applicationId = $applicationId;
        return $this;
    }

    public function getChangeType(): ?string
    {
        return $this->changeType;
    }

    public function setChangeType(?string $changeType): self
    {
        $this->changeType = $changeType;
        return $this;
    }

    public function getClientState(): ?string
    {
        return $this->clientState;
    }

    public function setClientState(?string $clientState): self
    {
        $this->clientState = $clientState;
        return $this;
    }

    public function getCreatorId(): ?string
    {
        return $this->creatorId;
    }

    public function setCreatorId(?string $creatorId): self
    {
        $this->creatorId = $creatorId;
        return $this;
    }

    public function getEncryptionCertificate(): ?string
    {
        return $this->encryptionCertificate;
    }

    public function setEncryptionCertificate(?string $encryptionCertificate): self
    {
        $this->encryptionCertificate = $encryptionCertificate;
        return $this;
    }

    public function getEncryptionCertificateId(): ?string
    {
        return $this->encryptionCertificateId;
    }

    public function setEncryptionCertificateId(?string $encryptionCertificateId): self
    {
        $this->encryptionCertificateId = $encryptionCertificateId;
        return $this;
    }

    public function getExpirationDateTime(): ?\DateTimeInterface
    {
        return $this->expirationDateTime;
    }

    public function setExpirationDateTime(?\DateTimeInterface $expirationDateTime): self
    {
        $this->expirationDateTime = $expirationDateTime;
        return $this;
    }

    public function getIncludeResourceData(): ?bool
    {
        return $this->includeResourceData;
    }

    public function setIncludeResourceData(?bool $includeResourceData): self
    {
        $this->includeResourceData = $includeResourceData;
        return $this;
    }

    public function getLatestSupportedTlsVersion(): ?string
    {
        return $this->latestSupportedTlsVersion;
    }

    public function setLatestSupportedTlsVersion(?string $latestSupportedTlsVersion): self
    {
        $this->latestSupportedTlsVersion = $latestSupportedTlsVersion;
        return $this;
    }

    public function getLifecycleNotificationUrl(): ?string
    {
        return $this->lifecycleNotificationUrl;
    }

    public function setLifecycleNotificationUrl(?string $lifecycleNotificationUrl): self
    {
        $this->lifecycleNotificationUrl = $lifecycleNotificationUrl;
        return $this;
    }

    public function getNotificationQueryOptions(): ?string
    {
        return $this->notificationQueryOptions;
    }

    public function setNotificationQueryOptions(?string $notificationQueryOptions): self
    {
        $this->notificationQueryOptions = $notificationQueryOptions;
        return $this;
    }

    public function getNotificationUrl(): ?string
    {
        return $this->notificationUrl;
    }

    public function setNotificationUrl(?string $notificationUrl): self
    {
        $this->notificationUrl = $notificationUrl;
        return $this;
    }

    public function getNotificationUrlAppId(): ?string
    {
        return $this->notificationUrlAppId;
    }

    public function setNotificationUrlAppId(?string $notificationUrlAppId): self
    {
        $this->notificationUrlAppId = $notificationUrlAppId;
        return $this;
    }

    public function getResource(): ?string
    {
        return $this->resource;
    }

    public function setResource(?string $resource): self
    {
        $this->resource = $resource;
        return $this;
    }

}
