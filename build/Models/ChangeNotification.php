<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ChangeNotification
 */
class ChangeNotification
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** Unique ID for the notification. Optional. */
    public ?string $id = null;

    /**  */
    public ?ChangeType $changeType = null;

    /** Value of the clientState property sent in the subscription request (if any). The maximum length is 255 characters. The client can check whether the change notification came from the service by comparing the values of the clientState property. The value of the clientState property sent with the subscription is compared with the value of the clientState property received with each change notification. Optional. */
    public ?string $clientState = null;

    /** 
     * (Preview) Encrypted content attached with the change notification. Only provided if encryptionCertificate and includeResourceData were defined during the subscription request and if the resource supports it. Optional.
     * @var ChangeNotificationEncryptedContent|\stdClass|null
     */
    public mixed $encryptedContent = null;

    /** 
     * The type of lifecycle notification if the current notification is a lifecycle notification. Optional. Supported values are missed, subscriptionRemoved, reauthorizationRequired. Optional.
     * @var LifecycleEventType|\stdClass|null
     */
    public mixed $lifecycleEvent = null;

    /** The URI of the resource that emitted the change notification relative to https://graph.microsoft.com. Required. */
    public ?string $resource = null;

    /** 
     * The content of this property depends on the type of resource being subscribed to. Optional.
     * @var ResourceData|\stdClass|null
     */
    public mixed $resourceData = null;

    /** The expiration time for the subscription. Required. */
    public ?\DateTimeInterface $subscriptionExpirationDateTime = null;

    /** The unique identifier of the subscription that generated the notification.Required. */
    public ?string $subscriptionId = null;

    /** The unique identifier of the tenant from which the change notification originated. Required. */
    public ?string $tenantId = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['changeType'])) {
            $this->changeType = is_array($data['changeType']) ? new ChangeType($data['changeType']) : $data['changeType'];
        }
        if (isset($data['clientState'])) {
            $this->clientState = $data['clientState'];
        }
        if (isset($data['encryptedContent'])) {
            $this->encryptedContent = is_array($data['encryptedContent']) ? new ChangeNotificationEncryptedContent($data['encryptedContent']) : $data['encryptedContent'];
        }
        if (isset($data['lifecycleEvent'])) {
            $this->lifecycleEvent = is_array($data['lifecycleEvent']) ? new LifecycleEventType($data['lifecycleEvent']) : $data['lifecycleEvent'];
        }
        if (isset($data['resource'])) {
            $this->resource = $data['resource'];
        }
        if (isset($data['resourceData'])) {
            $this->resourceData = is_array($data['resourceData']) ? new ResourceData($data['resourceData']) : $data['resourceData'];
        }
        if (isset($data['subscriptionExpirationDateTime'])) {
            $this->subscriptionExpirationDateTime = is_string($data['subscriptionExpirationDateTime']) ? new \DateTimeImmutable($data['subscriptionExpirationDateTime']) : $data['subscriptionExpirationDateTime'];
        }
        if (isset($data['subscriptionId'])) {
            $this->subscriptionId = $data['subscriptionId'];
        }
        if (isset($data['tenantId'])) {
            $this->tenantId = $data['tenantId'];
        }
    }

    /**
     * Get raw data from API response
     * @return array<string, mixed>
     */
    public function getRaw(): array
    {
        return $this->rawData;
    }
}
