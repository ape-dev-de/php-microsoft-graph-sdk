<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * GroupFilter
 */
class GroupFilter
{
    public function __construct(
        /** @var string[]  */
        public array $includedGroups = []
    ) {}
}
