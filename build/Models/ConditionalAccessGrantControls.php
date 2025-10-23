<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ConditionalAccessGrantControls
 */
class ConditionalAccessGrantControls
{
    /** 
     * List of values of built-in controls required by the policy. Possible values: block, mfa, compliantDevice, domainJoinedDevice, approvedApplication, compliantApplication, passwordChange, unknownFutureValue.
     * @var ConditionalAccessGrantControl[]
     */
    public array $builtInControls = [];

    /** 
     * List of custom controls IDs required by the policy. For more information, see Custom controls.
     * @var string[]
     */
    public array $customAuthenticationFactors = [];

    /** Defines the relationship of the grant controls. Possible values: AND, OR. */
    public ?string $operator = null;

    /** 
     * List of terms of use IDs required by the policy.
     * @var string[]
     */
    public array $termsOfUse = [];

    /** 
     * 
     * @var AuthenticationStrengthPolicy|\stdClass|null
     */
    public mixed $authenticationStrength = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['builtInControls'])) {
            $this->builtInControls = $data['builtInControls'];
        }
        if (isset($data['customAuthenticationFactors'])) {
            $this->customAuthenticationFactors = $data['customAuthenticationFactors'];
        }
        if (isset($data['operator'])) {
            $this->operator = $data['operator'];
        }
        if (isset($data['termsOfUse'])) {
            $this->termsOfUse = $data['termsOfUse'];
        }
        if (isset($data['authenticationStrength'])) {
            $this->authenticationStrength = $data['authenticationStrength'];
        }
    }
}
