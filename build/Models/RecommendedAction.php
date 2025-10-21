<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * RecommendedAction
 */
class RecommendedAction
{
    public function __construct(
        /** Web URL to the recommended action. */
        public ?string $actionWebUrl = null,
        /** Potential improvement in the tenant security score from the recommended action. */
        public ?string $potentialScoreImpact = null,
        /** Title of the recommended action. */
        public ?string $title = null
    ) {}
}
