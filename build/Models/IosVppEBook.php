<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * IosVppEBook
 */
class IosVppEBook
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** The date and time when the eBook file was created. */
        public ?\DateTimeInterface $createdDateTime = null,
        /** Description. */
        public ?string $description = null,
        /** Name of the eBook. */
        public ?string $displayName = null,
        /** The more information Url. */
        public ?string $informationUrl = null,
        /** Book cover. */
        public ?string $largeCover = null,
        /** The date and time when the eBook was last modified. */
        public ?\DateTimeInterface $lastModifiedDateTime = null,
        /** The privacy statement Url. */
        public ?string $privacyInformationUrl = null,
        /** The date and time when the eBook was published. */
        public ?\DateTimeInterface $publishedDateTime = null,
        /** Publisher. */
        public ?string $publisher = null,
        /** The list of assignments for this eBook. */
        public array $assignments = [],
        /** The list of installation states for this eBook. */
        public array $deviceStates = [],
        /** Mobile App Install Summary. */
        public ?string $installSummary = null,
        /** The list of installation states for this eBook. */
        public array $userStateSummary = [],
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
        /** The Vpp token ID. */
        public ?string $vppTokenId = null
    ) {}
}
