<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AccessReviewSet
 */
class AccessReviewSet
{
    public function __construct(
        /** Represents the template and scheduling for an access review. */
        public array $definitions = [],
        /** @var string[] Represents a collection of access review history data and the scopes used to collect that data. */
        public array $historyDefinitions = []
    ) {}
}
