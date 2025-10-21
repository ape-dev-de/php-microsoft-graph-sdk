<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SynchronizationJobApplicationParameters
 */
class SynchronizationJobApplicationParameters
{
    public function __construct(
        /** The identifier of the synchronizationRule to be applied. This rule ID is defined in the schema for a given synchronization job or template. */
        public ?string $ruleId = null,
        /** The identifiers of one or more objects to which a synchronizationJob is to be applied. */
        public array $subjects = []
    ) {}
}
