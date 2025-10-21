<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * IosVppApp
 */
class IosVppApp
{
    public function __construct(
        /** The applicable iOS Device Type. */
        public ?string $applicableDeviceType = null,
        /** The store URL. */
        public ?string $appStoreUrl = null,
        /** The Identity Name. */
        public ?string $bundleId = null,
        /** The supported License Type. */
        public ?string $licensingType = null,
        /** The VPP application release date and time. */
        public ?\DateTimeInterface $releaseDateTime = null,
        /** The total number of VPP licenses. */
        public ?float $totalLicenseCount = null,
        /** The number of VPP licenses in use. */
        public ?float $usedLicenseCount = null,
        /**  */
        public ?string $vppTokenAccountType = null,
        /** The Apple Id associated with the given Apple Volume Purchase Program Token. */
        public ?string $vppTokenAppleId = null,
        /** Contains properties and inherited properties for iOS Volume-Purchased Program (VPP) Apps. */
        public ?string $vppTokenOrganizationName = null
    ) {}
}
