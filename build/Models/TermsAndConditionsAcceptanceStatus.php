<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TermsAndConditionsAcceptanceStatus
 */
class TermsAndConditionsAcceptanceStatus
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** DateTime when the terms were last accepted by the user. */
        public ?\DateTimeInterface $acceptedDateTime = null,
        /** Most recent version number of the T&C accepted by the user. */
        public ?float $acceptedVersion = null,
        /** Display name of the user whose acceptance the entity represents. */
        public ?string $userDisplayName = null,
        /** The userPrincipalName of the User that accepted the term. */
        public ?string $userPrincipalName = null,
        /** Navigation link to the terms and conditions that are assigned. */
        public ?TermsAndConditions $termsAndConditions = null
    ) {}
}
