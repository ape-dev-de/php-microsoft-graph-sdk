<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AssignmentOrder
 */
class AssignmentOrder
{
    public function __construct(
        /** @var string[] A list of identityUserFlowAttribute object identifiers that determine the order in which attributes should be collected within a user flow. */
        public array $order = []
    ) {}
}
