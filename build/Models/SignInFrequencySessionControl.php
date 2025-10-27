<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SignInFrequencySessionControl
 */
class SignInFrequencySessionControl
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** Specifies whether the session control is enabled. */
    public ?bool $isEnabled = null;

    /** 
     * The possible values are primaryAndSecondaryAuthentication, secondaryAuthentication, unknownFutureValue. This property isn't required when using frequencyInterval with the value of timeBased.
     * @var SignInFrequencyAuthenticationType|\stdClass|null
     */
    public SignInFrequencyAuthenticationType|\stdClass|null $authenticationType = null;

    /** 
     * The possible values are timeBased, everyTime, unknownFutureValue. Sign-in frequency of everyTime is available for risky users, risky sign-ins, and Intune device enrollment. For more information, see Require reauthentication every time.
     * @var SignInFrequencyInterval|\stdClass|null
     */
    public SignInFrequencyInterval|\stdClass|null $frequencyInterval = null;

    /** 
     * Possible values are: days, hours.
     * @var SigninFrequencyType|\stdClass|null
     */
    public SigninFrequencyType|\stdClass|null $type = null;

    /** The number of days or hours. */
    public ?float $value = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['isEnabled'])) {
            $this->isEnabled = is_bool($data['isEnabled']) ? $data['isEnabled'] : (bool)$data['isEnabled'];
        }
        if (isset($data['authenticationType'])) {
            $this->authenticationType = is_string($data['authenticationType']) ? SignInFrequencyAuthenticationType::tryFrom($data['authenticationType']) : $data['authenticationType'];
        }
        if (isset($data['frequencyInterval'])) {
            $this->frequencyInterval = is_string($data['frequencyInterval']) ? SignInFrequencyInterval::tryFrom($data['frequencyInterval']) : $data['frequencyInterval'];
        }
        if (isset($data['type'])) {
            $this->type = is_string($data['type']) ? SigninFrequencyType::tryFrom($data['type']) : $data['type'];
        }
        if (isset($data['value'])) {
            $this->value = is_numeric($data['value']) ? (float)$data['value'] : $data['value'];
        }
    }

    /**
     * Get raw data from API response
     * @return array<string, mixed>
     */
    public function getRaw(): array
    {
        return $this->rawData;
    }
}
