<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PlannerTaskDetails
 */
class PlannerTaskDetails
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** The collection of checklist items on the task. */
        public ?string $checklist = null,
        /** Description of the task. */
        public ?string $description = null,
        /** This sets the type of preview that shows up on the task. The possible values are: automatic, noPreview, checklist, description, reference. When set to automatic the displayed preview is chosen by the app viewing the task. */
        public ?string $previewType = null,
        /** The collection of references on the task. */
        public ?string $references = null
    ) {}
}
