<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TermsAndConditions
 */
class TermsAndConditions
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** Administrator-supplied explanation of the terms and conditions, typically describing what it means to accept the terms and conditions set out in the T&C policy. This is shown to the user on prompts to accept the T&C policy. */
        public ?string $acceptanceStatement = null,
        /** Administrator-supplied body text of the terms and conditions, typically the terms themselves. This is shown to the user on prompts to accept the T&C policy. */
        public ?string $bodyText = null,
        /** DateTime the object was created. */
        public ?\DateTimeInterface $createdDateTime = null,
        /** Administrator-supplied description of the T&C policy. */
        public ?string $description = null,
        /** Administrator-supplied name for the T&C policy. */
        public ?string $displayName = null,
        /** DateTime the object was last modified. */
        public ?\DateTimeInterface $lastModifiedDateTime = null,
        /** Administrator-supplied title of the terms and conditions. This is shown to the user on prompts to accept the T&C policy. */
        public ?string $title = null,
        /** Integer indicating the current version of the terms. Incremented when an administrator makes a change to the terms and wishes to require users to re-accept the modified T&C policy. */
        public ?float $version = null,
        /** The list of acceptance statuses for this T&C policy. */
        public array $acceptanceStatuses = [],
        /** @var string[] A termsAndConditions entity represents the metadata and contents of a given Terms and Conditions (T&C) policy. T&C policies’ contents are presented to users upon their first attempt to enroll into Intune and subsequently upon edits where an administrator has required re-acceptance. They enable administrators to communicate the provisions to which a user must agree in order to have devices enrolled into Intune. */
        public array $assignments = []
    ) {}
}
