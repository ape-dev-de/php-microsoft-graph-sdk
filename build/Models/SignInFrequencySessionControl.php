<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SignInFrequencySessionControl
 */
class SignInFrequencySessionControl
{
    public function __construct(
        /** Specifies whether the session control is enabled. */
        public ?bool $isEnabled = null,
        /** The possible values are primaryAndSecondaryAuthentication, secondaryAuthentication, unknownFutureValue. This property isn't required when using frequencyInterval with the value of timeBased. */
        public ?string $authenticationType = null,
        /** The possible values are timeBased, everyTime, unknownFutureValue. Sign-in frequency of everyTime is available for risky users, risky sign-ins, and Intune device enrollment. For more information, see Require reauthentication every time. */
        public ?string $frequencyInterval = null,
        /** Possible values are: days, hours. */
        public ?string $type = null,
        /** The number of days or hours. */
        public ?float $value = null
    ) {}
}
