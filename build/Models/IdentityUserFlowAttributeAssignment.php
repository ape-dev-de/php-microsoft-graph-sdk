<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * IdentityUserFlowAttributeAssignment
 */
class IdentityUserFlowAttributeAssignment
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** The display name of the identityUserFlowAttribute within a user flow. */
        public ?string $displayName = null,
        /** Determines whether the identityUserFlowAttribute is optional. true means the user doesn't have to provide a value. false means the user can't complete sign-up without providing a value. */
        public ?bool $isOptional = null,
        /** Determines whether the identityUserFlowAttribute requires verification, and is only used for verifying the user''s phone number or email address. */
        public ?bool $requiresVerification = null,
        /** The input options for the user flow attribute. Only applicable when the userInputType is radioSingleSelect, dropdownSingleSelect, or checkboxMultiSelect. */
        public array $userAttributeValues = [],
        /**  */
        public ?string $userInputType = null,
        /** The user attribute that you want to add to your user flow. */
        public ?string $userAttribute = null
    ) {}
}
