<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AccessPackageCatalog
 */
class AccessPackageCatalog
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** Whether the catalog is created by a user or entitlement management. The possible values are: userManaged, serviceDefault, serviceManaged, unknownFutureValue. */
        public ?string $catalogType = null,
        /** The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only. */
        public ?\DateTimeInterface $createdDateTime = null,
        /** The description of the access package catalog. */
        public ?string $description = null,
        /** The display name of the access package catalog. */
        public ?string $displayName = null,
        /** Whether the access packages in this catalog can be requested by users outside of the tenant. */
        public ?bool $isExternallyVisible = null,
        /** The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only. */
        public ?\DateTimeInterface $modifiedDateTime = null,
        /** Has the value published if the access packages are available for management. The possible values are: unpublished, published, unknownFutureValue. */
        public ?string $state = null,
        /** The access packages in this catalog. Read-only. Nullable. */
        public array $accessPackages = [],
        /**  */
        public array $customWorkflowExtensions = [],
        /**  */
        public array $resourceRoles = [],
        /** Access package resources in this catalog. */
        public array $resources = [],
        /** @var string[]  */
        public array $resourceScopes = []
    ) {}
}
