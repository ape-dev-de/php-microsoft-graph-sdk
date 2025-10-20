<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * RubricQualitySelectedColumnModel
 */
class RubricQualitySelectedColumnModel
{
    /**
     * ID of the selected level for this quality.
     */
    private ?string $columnId;

    /**
     * ID of the associated quality.
     */
    private ?string $qualityId;

    public function getColumnId(): ?string
    {
        return $this->columnId;
    }

    public function setColumnId(?string $columnId): self
    {
        $this->columnId = $columnId;
        return $this;
    }

    public function getQualityId(): ?string
    {
        return $this->qualityId;
    }

    public function setQualityId(?string $qualityId): self
    {
        $this->qualityId = $qualityId;
        return $this;
    }

}
