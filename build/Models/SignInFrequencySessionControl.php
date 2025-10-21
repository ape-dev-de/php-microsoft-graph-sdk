<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SignInFrequencySessionControl
 */
class SignInFrequencySessionControl
{
    /**
     * The possible values are primaryAndSecondaryAuthentication, secondaryAuthentication, unknownFutureValue. This property isn''t required when using frequencyInterval with the value of timeBased.
     */
    private ?string $authenticationType;

    /**
     * The possible values are timeBased, everyTime, unknownFutureValue. Sign-in frequency of everyTime is available for risky users, risky sign-ins, and Intune device enrollment. For more information, see Require reauthentication every time.
     */
    private ?string $frequencyInterval;

    /**
     * Possible values are: days, hours.
     */
    private ?string $type;

    /**
     * The number of days or hours.
     */
    private ?string $value;


    public function getAuthenticationType(): ?string
    {
        return $this->authenticationType;
    }

    public function setAuthenticationType(?string $authenticationType): self
    {
        $this->authenticationType = $authenticationType;
        return $this;
    }

    public function getFrequencyInterval(): ?string
    {
        return $this->frequencyInterval;
    }

    public function setFrequencyInterval(?string $frequencyInterval): self
    {
        $this->frequencyInterval = $frequencyInterval;
        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(?string $type): self
    {
        $this->type = $type;
        return $this;
    }

    public function getValue(): ?string
    {
        return $this->value;
    }

    public function setValue(?string $value): self
    {
        $this->value = $value;
        return $this;
    }

}
