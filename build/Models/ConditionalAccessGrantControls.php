<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ConditionalAccessGrantControls
 */
class ConditionalAccessGrantControls
{
    public function __construct(
        /** List of values of built-in controls required by the policy. Possible values: block, mfa, compliantDevice, domainJoinedDevice, approvedApplication, compliantApplication, passwordChange, unknownFutureValue. */
        public array $builtInControls = [],
        /** @var string[] List of custom controls IDs required by the policy. For more information, see Custom controls. */
        public array $customAuthenticationFactors = [],
        /** Defines the relationship of the grant controls. Possible values: AND, OR. */
        public ?string $operator = null,
        /** @var string[] List of terms of use IDs required by the policy. */
        public array $termsOfUse = [],
        /**  */
        public ?string $authenticationStrength = null
    ) {}
}
