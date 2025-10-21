<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * EducationAssignmentSettings
 */
class EducationAssignmentSettings
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** Indicates whether to show the turn-in celebration animation. If true, indicates to skip the animation. The default value is false. */
        public ?bool $submissionAnimationDisabled = null,
        /** @var string[] When set, enables users to weight assignments differently when computing a class average grade. */
        public array $gradingCategories = []
    ) {}
}
