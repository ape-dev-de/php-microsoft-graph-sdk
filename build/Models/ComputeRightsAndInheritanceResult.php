<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ComputeRightsAndInheritanceResult
 */
class ComputeRightsAndInheritanceResult
{
    public function __construct(
        /**  */
        public array $contentRights = [],
        /**  */
        public ?SensitivityLabel $inheritedLabel = null,
        /**  */
        public array $sensitivityLabels = []
    ) {}
}
