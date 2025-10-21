<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * MultiTenantOrganization
 */
class MultiTenantOrganization
{
    public function __construct(
        /** Date when multitenant organization was created. Read-only. */
        public ?\DateTimeInterface $createdDateTime = null,
        /** Description of the multitenant organization. */
        public ?string $description = null,
        /** Display name of the multitenant organization. */
        public ?string $displayName = null,
        /** State of the multitenant organization. The possible values are: active, inactive, unknownFutureValue. active indicates the multitenant organization is created. inactive indicates the multitenant organization isn''t created. Read-only. */
        public ?string $state = null,
        /** Defines the status of a tenant joining a multitenant organization. */
        public ?string $joinRequest = null,
        /** @var string[] Defines tenants added to a multitenant organization. */
        public array $tenants = []
    ) {}
}
