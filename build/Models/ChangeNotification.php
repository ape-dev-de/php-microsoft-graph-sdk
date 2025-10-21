<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ChangeNotification
 */
class ChangeNotification
{
    public function __construct(
        /**  */
        public ?string $changeType = null,
        /** Value of the clientState property sent in the subscription request (if any). The maximum length is 255 characters. The client can check whether the change notification came from the service by comparing the values of the clientState property. The value of the clientState property sent with the subscription is compared with the value of the clientState property received with each change notification. Optional. */
        public ?string $clientState = null,
        /** (Preview) Encrypted content attached with the change notification. Only provided if encryptionCertificate and includeResourceData were defined during the subscription request and if the resource supports it. Optional. */
        public ?string $encryptedContent = null,
        /** Unique ID for the notification. Optional. */
        public ?string $id = null,
        /** The type of lifecycle notification if the current notification is a lifecycle notification. Optional. Supported values are missed, subscriptionRemoved, reauthorizationRequired. Optional. */
        public ?string $lifecycleEvent = null,
        /** The URI of the resource that emitted the change notification relative to https://graph.microsoft.com. Required. */
        public ?string $resource = null,
        /** The content of this property depends on the type of resource being subscribed to. Optional. */
        public ?string $resourceData = null,
        /** The expiration time for the subscription. Required. */
        public ?\DateTimeInterface $subscriptionExpirationDateTime = null,
        /** The unique identifier of the subscription that generated the notification.Required. */
        public ?string $subscriptionId = null,
        /** The unique identifier of the tenant from which the change notification originated. Required. */
        public ?string $tenantId = null
    ) {}
}
