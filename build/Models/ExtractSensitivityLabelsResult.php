<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ExtractSensitivityLabelsResult
 */
class ExtractSensitivityLabelsResult
{
    /**
     * List of sensitivity labels assigned to a file.
     */
    private ?string $labels;

    public function getLabels(): ?string
    {
        return $this->labels;
    }

    public function setLabels(?string $labels): self
    {
        $this->labels = $labels;
        return $this;
    }

}
