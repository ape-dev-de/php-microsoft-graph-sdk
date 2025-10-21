<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityTriggerTypesRoot
 */
class SecurityTriggerTypesRoot
{
    public function __construct(
        /** @var string[]  */
        public array $retentionEventTypes = []
    ) {}
}
