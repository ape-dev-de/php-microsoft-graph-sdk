<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AccessPackage
 */
class AccessPackage
{
    public function __construct(
        /** The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only. */
        public ?\DateTimeInterface $createdDateTime = null,
        /** The description of the access package. */
        public ?string $description = null,
        /** Required. The display name of the access package. Supports $filter (eq, contains). */
        public ?string $displayName = null,
        /** Indicates whether the access package is hidden from the requestor. */
        public ?bool $isHidden = null,
        /** The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only. */
        public ?\DateTimeInterface $modifiedDateTime = null,
        /** The access packages that are incompatible with this package. Read-only. */
        public array $accessPackagesIncompatibleWith = [],
        /** Read-only. Nullable. Supports $expand. */
        public array $assignmentPolicies = [],
        /** Required when creating the access package. Read-only. Nullable. */
        public ?string $catalog = null,
        /** The access packages whose assigned users are ineligible to be assigned this access package. */
        public array $incompatibleAccessPackages = [],
        /** The groups whose members are ineligible to be assigned this access package. */
        public array $incompatibleGroups = [],
        /** @var string[] The resource roles and scopes in this access package. */
        public array $resourceRoleScopes = []
    ) {}
}
