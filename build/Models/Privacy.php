<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Privacy
 */
class Privacy
{
    public function __construct(
        /** @var string[]  */
        public array $subjectRightsRequests = []
    ) {}
}
