<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PrintTaskDefinition
 */
class PrintTaskDefinition
{
    public function __construct(
        /**  */
        public ?string $createdBy = null,
        /** The name of the printTaskDefinition. */
        public ?string $displayName = null,
        /** @var string[] A list of tasks that have been created based on this definition. The list includes currently running tasks and recently completed tasks. Read-only. */
        public array $tasks = []
    ) {}
}
