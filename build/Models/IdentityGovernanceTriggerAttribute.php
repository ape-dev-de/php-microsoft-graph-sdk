<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * IdentityGovernanceTriggerAttribute
 */
class IdentityGovernanceTriggerAttribute
{
    public function __construct(
        /** The name of the trigger attribute that is changed to trigger an attributeChangeTrigger workflow. */
        public ?string $name = null
    ) {}
}
