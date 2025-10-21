<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DataSecurityAndGovernance
 */
class DataSecurityAndGovernance
{
    public function __construct(
        /** @var string[]  */
        public array $sensitivityLabels = []
    ) {}
}
