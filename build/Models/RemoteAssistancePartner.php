<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * RemoteAssistancePartner
 */
class RemoteAssistancePartner
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** Display name of the partner. */
        public ?string $displayName = null,
        /** Timestamp of the last request sent to Intune by the TEM partner. */
        public ?\DateTimeInterface $lastConnectionDateTime = null,
        /**  */
        public ?string $onboardingStatus = null,
        /** RemoteAssistPartner resources represent the metadata and status of a given Remote Assistance partner service. */
        public ?string $onboardingUrl = null
    ) {}
}
