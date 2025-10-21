<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ContainerFilter
 */
class ContainerFilter
{
    public function __construct(
        /** @var string[]  */
        public array $includedContainers = []
    ) {}
}
