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
        public ?string $inheritedLabel = null,
        /**  */
        public array $sensitivityLabels = []
    ) {}
}
