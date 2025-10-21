<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PrintModel
 */
class PrintModel
{
    public function __construct(
        /** Tenant-wide settings for the Universal Print service. */
        public ?string $settings = null,
        /** The list of available print connectors. */
        public array $connectors = [],
        /** The list of print long running operations. */
        public array $operations = [],
        /** The list of printers registered in the tenant. */
        public array $printers = [],
        /** The list of available Universal Print service endpoints. */
        public array $services = [],
        /** The list of printer shares registered in the tenant. */
        public array $shares = [],
        /** List of abstract definition for a task that can be triggered when various events occur within Universal Print. */
        public array $taskDefinitions = []
    ) {}
}
