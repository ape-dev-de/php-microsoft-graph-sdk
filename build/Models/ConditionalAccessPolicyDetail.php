<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ConditionalAccessPolicyDetail
 */
class ConditionalAccessPolicyDetail
{
    /**  */
    public ?ConditionalAccessConditionSet $conditions = null;

    /** 
     * Represents grant controls that must be fulfilled for the policy.
     * @var ConditionalAccessGrantControls|\stdClass|null
     */
    public mixed $grantControls = null;

    /** 
     * Represents a complex type of session controls that is enforced after sign-in.
     * @var ConditionalAccessSessionControls|\stdClass|null
     */
    public mixed $sessionControls = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['conditions'])) {
            $this->conditions = is_array($data['conditions']) ? new ConditionalAccessConditionSet($data['conditions']) : $data['conditions'];
        }
        if (isset($data['grantControls'])) {
            $this->grantControls = is_array($data['grantControls']) ? new ConditionalAccessGrantControls($data['grantControls']) : $data['grantControls'];
        }
        if (isset($data['sessionControls'])) {
            $this->sessionControls = is_array($data['sessionControls']) ? new ConditionalAccessSessionControls($data['sessionControls']) : $data['sessionControls'];
        }
    }
}
