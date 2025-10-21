<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * RubricCriterion
 */
class RubricCriterion
{
    public function __construct(
        /** The description of this criterion. */
        public ?EducationItemBody $description = null
    ) {}
}
