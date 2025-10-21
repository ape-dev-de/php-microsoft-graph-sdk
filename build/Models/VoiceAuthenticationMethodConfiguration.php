<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * VoiceAuthenticationMethodConfiguration
 */
class VoiceAuthenticationMethodConfiguration
{
    public function __construct(
        /** true if users can register office phones, otherwise, false. */
        public ?bool $isOfficePhoneAllowed = null,
        /** @var string[] A collection of groups that are enabled to use the authentication method. Expanded by default. */
        public array $includeTargets = []
    ) {}
}
