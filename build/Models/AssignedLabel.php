<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AssignedLabel
 */
class AssignedLabel
{
    /**
     * The display name of the label. Read-only.
     */
    private ?string $displayName;

    /**
     * The unique identifier of the label.
     */
    private ?string $labelId;


    public function getDisplayName(): ?string
    {
        return $this->displayName;
    }

    public function setDisplayName(?string $displayName): self
    {
        $this->displayName = $displayName;
        return $this;
    }

    public function getLabelId(): ?string
    {
        return $this->labelId;
    }

    public function setLabelId(?string $labelId): self
    {
        $this->labelId = $labelId;
        return $this;
    }

}
