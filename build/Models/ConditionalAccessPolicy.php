<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ConditionalAccessPolicy
 */
class ConditionalAccessPolicy
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
            $this->conditions = is_array($data['conditions']) ? new ConditionalAccessConditionSet($data['conditions']) : $data['conditions'];
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
            $this->grantControls = is_array($data['grantControls']) ? new ConditionalAccessGrantControls($data['grantControls']) : $data['grantControls'];
        }
        if (isset($data['modifiedDateTime'])) {
            $this->modifiedDateTime = is_string($data['modifiedDateTime']) ? new \DateTimeImmutable($data['modifiedDateTime']) : $data['modifiedDateTime'];
        }
        if (isset($data['sessionControls'])) {
            $this->sessionControls = is_array($data['sessionControls']) ? new ConditionalAccessSessionControls($data['sessionControls']) : $data['sessionControls'];
        }
        if (isset($data['state'])) {
            $this->state = is_array($data['state']) ? new ConditionalAccessPolicyState($data['state']) : $data['state'];
        }
        if (isset($data['templateId'])) {
            $this->templateId = $data['templateId'];
        }
    }
}
