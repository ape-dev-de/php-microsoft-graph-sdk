<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecureScore
 */
class SecureScore
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** Active user count of the given tenant. */
        public ?float $activeUserCount = null,
        /** Average score by different scopes (for example, average by industry, average by seating) and control category (Identity, Data, Device, Apps, Infrastructure) within the scope. */
        public array $averageComparativeScores = [],
        /** GUID string for tenant ID. */
        public ?string $azureTenantId = null,
        /** Contains tenant scores for a set of controls. */
        public array $controlScores = [],
        /** When the report was created. */
        public ?\DateTimeInterface $createdDateTime = null,
        /** Tenant current attained score on specified date. */
        public ?string $currentScore = null,
        /** @var string[] Microsoft-provided services for the tenant (for example, Exchange online, Skype, Sharepoint). */
        public array $enabledServices = [],
        /** Licensed user count of the given tenant. */
        public ?float $licensedUserCount = null,
        /** Tenant maximum possible score on specified date. */
        public ?string $maxScore = null,
        /** Complex type containing details about the security product/service vendor, provider, and subprovider (for example, vendor=Microsoft; provider=SecureScore). Required. */
        public ?SecurityVendorInformation $vendorInformation = null
    ) {}
}
