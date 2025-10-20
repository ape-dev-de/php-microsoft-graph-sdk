<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PlannerTaskDetails
 */
class PlannerTaskDetails
{
    /**
     * The collection of checklist items on the task.
     */
    private ?string $checklist;

    /**
     * Description of the task.
     */
    private ?string $description;

    /**
     * This sets the type of preview that shows up on the task. The possible values are: automatic, noPreview, checklist, description, reference. When set to automatic the displayed preview is chosen by the app viewing the task.
     */
    private ?string $previewType;

    /**
     * The collection of references on the task.
     */
    private ?string $references;

    public function getChecklist(): ?string
    {
        return $this->checklist;
    }

    public function setChecklist(?string $checklist): self
    {
        $this->checklist = $checklist;
        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;
        return $this;
    }

    public function getPreviewType(): ?string
    {
        return $this->previewType;
    }

    public function setPreviewType(?string $previewType): self
    {
        $this->previewType = $previewType;
        return $this;
    }

    public function getReferences(): ?string
    {
        return $this->references;
    }

    public function setReferences(?string $references): self
    {
        $this->references = $references;
        return $this;
    }

}
