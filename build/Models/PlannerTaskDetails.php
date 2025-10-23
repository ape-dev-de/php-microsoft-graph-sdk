<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PlannerTaskDetails
 */
class PlannerTaskDetails
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** 
     * The collection of checklist items on the task.
     * @var PlannerChecklistItems|\stdClass|null
     */
    public mixed $checklist = null;

    /** Description of the task. */
    public ?string $description = null;

    /** 
     * This sets the type of preview that shows up on the task. The possible values are: automatic, noPreview, checklist, description, reference. When set to automatic the displayed preview is chosen by the app viewing the task.
     * @var PlannerPreviewType|\stdClass|null
     */
    public mixed $previewType = null;

    /** 
     * The collection of references on the task.
     * @var PlannerExternalReferences|\stdClass|null
     */
    public mixed $references = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['checklist'])) {
            $this->checklist = $data['checklist'];
        }
        if (isset($data['description'])) {
            $this->description = $data['description'];
        }
        if (isset($data['previewType'])) {
            $this->previewType = $data['previewType'];
        }
        if (isset($data['references'])) {
            $this->references = $data['references'];
        }
    }
}
