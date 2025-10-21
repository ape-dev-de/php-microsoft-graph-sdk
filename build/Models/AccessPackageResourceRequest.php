<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AccessPackageResourceRequest
 */
class AccessPackageResourceRequest
{
    public function __construct(
        /** The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only. */
        public ?\DateTimeInterface $createdDateTime = null,
        /** The type of the request. Use adminAdd to add a resource, if the caller is an administrator or resource owner, adminUpdate to update a resource, or adminRemove to remove a resource. */
        public ?string $requestType = null,
        /** The outcome of whether the service was able to add the resource to the catalog. The value is delivered if the resource was added or removed, and deliveryFailed if it couldn''t be added or removed. Read-only. */
        public ?string $state = null,
        /**  */
        public ?string $catalog = null,
        /**  */
        public ?string $resource = null
    ) {}
}
