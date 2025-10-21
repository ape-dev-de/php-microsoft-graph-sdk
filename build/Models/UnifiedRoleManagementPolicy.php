<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * UnifiedRoleManagementPolicy
 */
class UnifiedRoleManagementPolicy
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** Description for the policy. */
        public ?string $description = null,
        /** Display name for the policy. */
        public ?string $displayName = null,
        /** This can only be set to true for a single tenant-wide policy which will apply to all scopes and roles. Set the scopeId to / and scopeType to Directory. Supports $filter (eq, ne). */
        public ?bool $isOrganizationDefault = null,
        /** The identity who last modified the role setting. */
        public ?Identity $lastModifiedBy = null,
        /** The time when the role setting was last modified. */
        public ?\DateTimeInterface $lastModifiedDateTime = null,
        /** The identifier of the scope where the policy is created. Can be / for the tenant or a group ID. Required. */
        public ?string $scopeId = null,
        /** The type of the scope where the policy is created. One of Directory, DirectoryRole, Group. Required. */
        public ?string $scopeType = null,
        /** The list of effective rules like approval rules and expiration rules evaluated based on inherited referenced rules. For example, if there is a tenant-wide policy to enforce enabling an approval rule, the effective rule will be to enable approval even if the policy has a rule to disable approval. Supports $expand. */
        public array $effectiveRules = [],
        /** The collection of rules like approval rules and expiration rules. Supports $expand. */
        public array $rules = []
    ) {}
}
