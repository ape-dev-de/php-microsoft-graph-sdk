<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * EducationClass
 */
class EducationClass
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** Class code used by the school to identify the class. */
        public ?string $classCode = null,
        /**  */
        public ?string $course = null,
        /** Entity who created the class */
        public ?string $createdBy = null,
        /** Description of the class. */
        public ?string $description = null,
        /** Name of the class. */
        public ?string $displayName = null,
        /** ID of the class from the syncing system. */
        public ?string $externalId = null,
        /** Name of the class in the syncing system. */
        public ?string $externalName = null,
        /** How this class was created. Possible values are: sis, manual. */
        public ?string $externalSource = null,
        /** The name of the external source this resource was generated from. */
        public ?string $externalSourceDetail = null,
        /** Grade level of the class. */
        public ?string $grade = null,
        /** Mail name for sending email to all members, if this is enabled. */
        public ?string $mailNickname = null,
        /** Term for this class. */
        public ?string $term = null,
        /** All categories associated with this class. Nullable. */
        public array $assignmentCategories = [],
        /** Specifies class-level defaults respected by new assignments created in the class. */
        public ?string $assignmentDefaults = null,
        /** All assignments associated with this class. Nullable. */
        public array $assignments = [],
        /** Specifies class-level assignments settings. */
        public ?string $assignmentSettings = null,
        /** The underlying Microsoft 365 group object. */
        public ?string $group = null,
        /** All users in the class. Nullable. */
        public array $members = [],
        /** All modules in the class. Nullable. */
        public array $modules = [],
        /** All schools that this class is associated with. Nullable. */
        public array $schools = [],
        /** All teachers in the class. Nullable. */
        public array $teachers = []
    ) {}
}
