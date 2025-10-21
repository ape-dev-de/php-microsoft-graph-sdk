<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * RubricQuality
 */
class RubricQuality
{
    public function __construct(
        /** The collection of criteria for this rubric quality. */
        public array $criteria = [],
        /** The description of this rubric quality. */
        public ?EducationItemBody $description = null,
        /** The name of this rubric quality. */
        public ?string $displayName = null,
        /** The ID of this resource. */
        public ?string $qualityId = null,
        /** If present, a numerical weight for this quality.  Weights must add up to 100. */
        public ?string $weight = null
    ) {}
}
