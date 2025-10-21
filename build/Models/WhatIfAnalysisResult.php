<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WhatIfAnalysisResult
 */
class WhatIfAnalysisResult
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /**  */
        public ?string $conditions = null,
        /** The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Readonly. */
        public ?\DateTimeInterface $createdDateTime = null,
        /**  */
        public ?string $description = null,
        /** Specifies a display name for the conditionalAccessPolicy object. */
        public ?string $displayName = null,
        /** Specifies the grant controls that must be fulfilled to pass the policy. */
        public ?string $grantControls = null,
        /** The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Readonly. */
        public ?\DateTimeInterface $modifiedDateTime = null,
        /** Specifies the session controls that are enforced after sign-in. */
        public ?string $sessionControls = null,
        /**  */
        public ?string $state = null,
        /** Specifies the unique identifier of a Conditional Access template. Inherited from entity. */
        public ?string $templateId = null,
        /**  */
        public ?string $analysisReasons = null,
        /** Specifies whether the policy applies to the sign-in properties provided in the request body. If policyApplies is true, the policy applies to the sign-in based on the sign-in properties provided. If policyApplies is false, the policy doesn't apply to the sign-in based on the sign-in properties provided and the analysisReasons property is populated to show the reason for the policy not applying. */
        public ?bool $policyApplies = null
    ) {}
}
