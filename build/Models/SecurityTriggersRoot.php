<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityTriggersRoot
 */
class SecurityTriggersRoot
{
    public function __construct(
        /** @var string[]  */
        public array $retentionEvents = []
    ) {}
}
