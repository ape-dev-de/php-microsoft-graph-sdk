<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ManagedEBook
 */
class ManagedEBook
{
    public function __construct(
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
        /** @var string[] An abstract class containing the base properties for Managed eBook. */
        public array $userStateSummary = []
    ) {}
}
