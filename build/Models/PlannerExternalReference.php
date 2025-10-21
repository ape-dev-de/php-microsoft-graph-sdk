<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PlannerExternalReference
 */
class PlannerExternalReference
{
    /**
     * A name alias to describe the reference.
     */
    private ?string $alias;

    /**
     * Read-only. User ID by which this is last modified.
     */
    private ?string $lastModifiedBy;

    /**
     * Read-only. Date and time at which this is last modified. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
     */
    private ?\DateTimeInterface $lastModifiedDateTime;

    /**
     * Used to set the relative priority order in which the reference will be shown as a preview on the task.
     */
    private ?string $previewPriority;

    /**
     * Used to describe the type of the reference. Types include: PowerPoint, Word, Excel, Other.
     */
    private ?string $type;


    public function getAlias(): ?string
    {
        return $this->alias;
    }

    public function setAlias(?string $alias): self
    {
        $this->alias = $alias;
        return $this;
    }

    public function getLastModifiedBy(): ?string
    {
        return $this->lastModifiedBy;
    }

    public function setLastModifiedBy(?string $lastModifiedBy): self
    {
        $this->lastModifiedBy = $lastModifiedBy;
        return $this;
    }

    public function getLastModifiedDateTime(): ?\DateTimeInterface
    {
        return $this->lastModifiedDateTime;
    }

    public function setLastModifiedDateTime(?\DateTimeInterface $lastModifiedDateTime): self
    {
        $this->lastModifiedDateTime = $lastModifiedDateTime;
        return $this;
    }

    public function getPreviewPriority(): ?string
    {
        return $this->previewPriority;
    }

    public function setPreviewPriority(?string $previewPriority): self
    {
        $this->previewPriority = $previewPriority;
        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(?string $type): self
    {
        $this->type = $type;
        return $this;
    }

}
