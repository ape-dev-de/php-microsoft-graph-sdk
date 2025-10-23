<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SignInFrequencySessionControl
 */
class SignInFrequencySessionControl
{
    /** Specifies whether the session control is enabled. */
    public ?bool $isEnabled = null;

    /** 
     * The possible values are primaryAndSecondaryAuthentication, secondaryAuthentication, unknownFutureValue. This property isn't required when using frequencyInterval with the value of timeBased.
     * @var SignInFrequencyAuthenticationType|\stdClass|null
     */
    public mixed $authenticationType = null;

    /** 
     * The possible values are timeBased, everyTime, unknownFutureValue. Sign-in frequency of everyTime is available for risky users, risky sign-ins, and Intune device enrollment. For more information, see Require reauthentication every time.
     * @var SignInFrequencyInterval|\stdClass|null
     */
    public mixed $frequencyInterval = null;

    /** 
     * Possible values are: days, hours.
     * @var SigninFrequencyType|\stdClass|null
     */
    public mixed $type = null;

    /** The number of days or hours. */
    public ?float $value = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['isEnabled'])) {
            $this->isEnabled = $data['isEnabled'];
        }
        if (isset($data['authenticationType'])) {
            $this->authenticationType = $data['authenticationType'];
        }
        if (isset($data['frequencyInterval'])) {
            $this->frequencyInterval = $data['frequencyInterval'];
        }
        if (isset($data['type'])) {
            $this->type = $data['type'];
        }
        if (isset($data['value'])) {
            $this->value = $data['value'];
        }
    }
}
