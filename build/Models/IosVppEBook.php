<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * IosVppEBook
 */
class IosVppEBook
{
    public function __construct(
        /** The Apple ID associated with Vpp token. */
        public ?string $appleId = null,
        /** @var string[] Genres. */
        public array $genres = [],
        /** Language. */
        public ?string $language = null,
        /** Seller. */
        public ?string $seller = null,
        /** Total license count. */
        public ?float $totalLicenseCount = null,
        /** Used license count. */
        public ?float $usedLicenseCount = null,
        /** The Vpp token's organization name. */
        public ?string $vppOrganizationName = null,
        /** A class containing the properties for iOS Vpp eBook. */
        public ?string $vppTokenId = null
    ) {}
}
