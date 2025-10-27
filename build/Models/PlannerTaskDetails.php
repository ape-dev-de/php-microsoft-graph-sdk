<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PlannerTaskDetails
 */
class PlannerTaskDetails
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** 
     * The collection of checklist items on the task.
     * @var PlannerChecklistItems|\stdClass|null
     */
    public PlannerChecklistItems|\stdClass|null $checklist = null;

    /** Description of the task. */
    public ?string $description = null;

    /** 
     * This sets the type of preview that shows up on the task. The possible values are: automatic, noPreview, checklist, description, reference. When set to automatic the displayed preview is chosen by the app viewing the task.
     * @var PlannerPreviewType|\stdClass|null
     */
    public PlannerPreviewType|\stdClass|null $previewType = null;

    /** 
     * The collection of references on the task.
     * @var PlannerExternalReferences|\stdClass|null
     */
    public PlannerExternalReferences|\stdClass|null $references = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['checklist'])) {
            $this->checklist = is_array($data['checklist']) ? new PlannerChecklistItems($data['checklist']) : $data['checklist'];
        }
        if (isset($data['description'])) {
            $this->description = $data['description'];
        }
        if (isset($data['previewType'])) {
            $this->previewType = is_string($data['previewType']) ? PlannerPreviewType::tryFrom($data['previewType']) : $data['previewType'];
        }
        if (isset($data['references'])) {
            $this->references = is_array($data['references']) ? new PlannerExternalReferences($data['references']) : $data['references'];
        }
    }

    /**
     * Get raw data from API response
     * @return array<string, mixed>
     */
    public function getRaw(): array
    {
        return $this->rawData;
    }
}
