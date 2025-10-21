<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityDispositionReviewStage
 */
class SecurityDispositionReviewStage
{
    public function __construct(
        /** Name representing each stage within a collection. */
        public ?string $name = null,
        /** @var string[] A collection of reviewers at each stage. */
        public array $reviewersEmailAddresses = [],
        /** The unique sequence number for each stage of the disposition review. */
        public ?string $stageNumber = null
    ) {}
}
