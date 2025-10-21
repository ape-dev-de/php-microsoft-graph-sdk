<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Approval
 */
class Approval
{
    public function __construct(
        /** @var string[] A collection of stages in the approval decision. */
        public array $stages = []
    ) {}
}
