<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CompanySubscription
 */
class CompanySubscription
{
    public function __construct(
        /** The ID of this subscription in the commerce system. Alternate key. */
        public ?string $commerceSubscriptionId = null,
        /** The date and time when this subscription was created. The DateTimeOffset type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. */
        public ?\DateTimeInterface $createdDateTime = null,
        /** Whether the subscription is a free trial or purchased. */
        public ?bool $isTrial = null,
        /** The date and time when the subscription will move to the next state (as defined by the status property) if not renewed by the tenant. The DateTimeOffset type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. */
        public ?\DateTimeInterface $nextLifecycleDateTime = null,
        /** The object ID of the account admin. */
        public ?string $ownerId = null,
        /** The unique identifier for the Microsoft partner tenant that created the subscription on a customer tenant. */
        public ?string $ownerTenantId = null,
        /** Indicates the entity that ownerId belongs to, for example, ''User''. */
        public ?string $ownerType = null,
        /** The provisioning status of each service included in this subscription. */
        public array $serviceStatus = [],
        /** The object ID of the SKU associated with this subscription. */
        public ?string $skuId = null,
        /** The SKU associated with this subscription. */
        public ?string $skuPartNumber = null,
        /** The status of this subscription. Possible values are: Enabled, Deleted, Suspended, Warning, LockedOut. */
        public ?string $status = null,
        /** The number of licenses included in this subscription. */
        public ?string $totalLicenses = null
    ) {}
}
