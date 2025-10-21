<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PrintTaskTrigger
 */
class PrintTaskTrigger
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /**  */
        public ?PrintEvent $event = null,
        /**  */
        public ?PrintTaskDefinition $definition = null
    ) {}
}
