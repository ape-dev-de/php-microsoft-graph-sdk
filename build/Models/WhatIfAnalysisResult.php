<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WhatIfAnalysisResult
 */
class WhatIfAnalysisResult
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /**  */
    public ?ConditionalAccessConditionSet $conditions = null;

    /** The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Readonly. */
    public ?\DateTimeInterface $createdDateTime = null;

    /**  */
    public ?string $description = null;

    /** Specifies a display name for the conditionalAccessPolicy object. */
    public ?string $displayName = null;

    /** 
     * Specifies the grant controls that must be fulfilled to pass the policy.
     * @var ConditionalAccessGrantControls|\stdClass|null
     */
    public mixed $grantControls = null;

    /** The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Readonly. */
    public ?\DateTimeInterface $modifiedDateTime = null;

    /** 
     * Specifies the session controls that are enforced after sign-in.
     * @var ConditionalAccessSessionControls|\stdClass|null
     */
    public mixed $sessionControls = null;

    /**  */
    public ?ConditionalAccessPolicyState $state = null;

    /** Specifies the unique identifier of a Conditional Access template. Inherited from entity. */
    public ?string $templateId = null;

    /**  */
    public ?WhatIfAnalysisReasons $analysisReasons = null;

    /** Specifies whether the policy applies to the sign-in properties provided in the request body. If policyApplies is true, the policy applies to the sign-in based on the sign-in properties provided. If policyApplies is false, the policy doesn't apply to the sign-in based on the sign-in properties provided and the analysisReasons property is populated to show the reason for the policy not applying. */
    public ?bool $policyApplies = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['conditions'])) {
            $this->conditions = $data['conditions'];
        }
        if (isset($data['createdDateTime'])) {
            $this->createdDateTime = is_string($data['createdDateTime']) ? new \DateTimeImmutable($data['createdDateTime']) : $data['createdDateTime'];
        }
        if (isset($data['description'])) {
            $this->description = $data['description'];
        }
        if (isset($data['displayName'])) {
            $this->displayName = $data['displayName'];
        }
        if (isset($data['grantControls'])) {
            $this->grantControls = $data['grantControls'];
        }
        if (isset($data['modifiedDateTime'])) {
            $this->modifiedDateTime = is_string($data['modifiedDateTime']) ? new \DateTimeImmutable($data['modifiedDateTime']) : $data['modifiedDateTime'];
        }
        if (isset($data['sessionControls'])) {
            $this->sessionControls = $data['sessionControls'];
        }
        if (isset($data['state'])) {
            $this->state = $data['state'];
        }
        if (isset($data['templateId'])) {
            $this->templateId = $data['templateId'];
        }
        if (isset($data['analysisReasons'])) {
            $this->analysisReasons = $data['analysisReasons'];
        }
        if (isset($data['policyApplies'])) {
            $this->policyApplies = $data['policyApplies'];
        }
    }
}
