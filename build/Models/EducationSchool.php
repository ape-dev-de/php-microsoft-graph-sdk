<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * EducationSchool
 */
class EducationSchool
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** Organization description. */
        public ?string $description = null,
        /** Organization display name. */
        public ?string $displayName = null,
        /** Source where this organization was created from. Possible values are: sis, manual. */
        public ?string $externalSource = null,
        /** The name of the external source this resource was generated from. */
        public ?string $externalSourceDetail = null,
        /** Address of the school. */
        public ?string $address = null,
        /** Entity who created the school. */
        public ?string $createdBy = null,
        /** ID of school in syncing system. */
        public ?string $externalId = null,
        /** ID of principal in syncing system. */
        public ?string $externalPrincipalId = null,
        /**  */
        public ?string $fax = null,
        /** Highest grade taught. */
        public ?string $highestGrade = null,
        /** Lowest grade taught. */
        public ?string $lowestGrade = null,
        /** Phone number of school. */
        public ?string $phone = null,
        /** Email address of the principal. */
        public ?string $principalEmail = null,
        /** Name of the principal. */
        public ?string $principalName = null,
        /** School Number. */
        public ?string $schoolNumber = null,
        /** The underlying administrativeUnit for this school. */
        public ?string $administrativeUnit = null,
        /** Classes taught at the school. Nullable. */
        public array $classes = [],
        /** @var string[] Users in the school. Nullable. */
        public array $users = []
    ) {}
}
