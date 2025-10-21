<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SamlSingleSignOnSettings
 */
class SamlSingleSignOnSettings
{
    public function __construct(
        /** The relative URI the service provider would redirect to after completion of the single sign-on flow. */
        public ?string $relayState = null
    ) {}
}
