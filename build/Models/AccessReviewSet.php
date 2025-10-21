<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AccessReviewSet
 */
class AccessReviewSet
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** Represents the template and scheduling for an access review. */
        public array $definitions = [],
        /** Represents a collection of access review history data and the scopes used to collect that data. */
        public array $historyDefinitions = []
    ) {}
}
