<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TelecomExpenseManagementPartner
 */
class TelecomExpenseManagementPartner
{
    public function __construct(
        /** Whether the partner's AAD app has been authorized to access Intune. */
        public ?bool $appAuthorized = null,
        /** Display name of the TEM partner. */
        public ?string $displayName = null,
        /** Whether Intune's connection to the TEM service is currently enabled or disabled. */
        public ?bool $enabled = null,
        /** Timestamp of the last request sent to Intune by the TEM partner. */
        public ?\DateTimeInterface $lastConnectionDateTime = null,
        /** telecomExpenseManagementPartner resources represent the metadata and status of a given TEM service. Once your organization has onboarded with a partner, the partner can be enabled or disabled to switch TEM functionality on or off. */
        public ?string $url = null
    ) {}
}
