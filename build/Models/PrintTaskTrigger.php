<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PrintTaskTrigger
 */
class PrintTaskTrigger
{
    public function __construct(
        /**  */
        public ?string $event = null,
        /**  */
        public ?string $definition = null
    ) {}
}
