<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AuthenticationStrengthPolicy
 */
class AuthenticationStrengthPolicy
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** A collection of authentication method modes that are required be used to satify this authentication strength. */
        public array $allowedCombinations = [],
        /** The datetime when this policy was created. */
        public ?\DateTimeInterface $createdDateTime = null,
        /** The human-readable description of this policy. */
        public ?string $description = null,
        /** The human-readable display name of this policy. Supports $filter (eq, ne, not , and in). */
        public ?string $displayName = null,
        /** The datetime when this policy was last modified. */
        public ?\DateTimeInterface $modifiedDateTime = null,
        /**  */
        public ?string $policyType = null,
        /**  */
        public ?string $requirementsSatisfied = null,
        /** @var string[] Settings that may be used to require specific types or instances of an authentication method to be used when authenticating with a specified combination of authentication methods. */
        public array $combinationConfigurations = []
    ) {}
}
