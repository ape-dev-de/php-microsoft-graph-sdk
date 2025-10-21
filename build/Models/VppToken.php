<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * VppToken
 */
class VppToken
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** The Apple ID associated with the given Apple Volume Purchase Program Token. */
        public ?string $appleId = null,
        /** Whether or not apps for the VPP token will be automatically updated. */
        public ?bool $automaticallyUpdateApps = null,
        /** The country or region associated with the Apple Volume Purchase Program Token. */
        public ?string $countryOrRegion = null,
        /** The expiration date time of the Apple Volume Purchase Program Token. */
        public ?\DateTimeInterface $expirationDateTime = null,
        /** Last modification date time associated with the Apple Volume Purchase Program Token. */
        public ?\DateTimeInterface $lastModifiedDateTime = null,
        /** The last time when an application sync was done with the Apple volume purchase program service using the the Apple Volume Purchase Program Token. */
        public ?\DateTimeInterface $lastSyncDateTime = null,
        /**  */
        public ?string $lastSyncStatus = null,
        /** The organization associated with the Apple Volume Purchase Program Token */
        public ?string $organizationName = null,
        /**  */
        public ?string $state = null,
        /** The Apple Volume Purchase Program Token string downloaded from the Apple Volume Purchase Program. */
        public ?string $token = null,
        /**  */
        public ?string $vppTokenAccountType = null
    ) {}
}
