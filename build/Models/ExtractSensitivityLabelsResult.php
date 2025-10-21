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
     * @var string[]
     */
    private array $labels = [];


    /**
     * @return string[]
     */
    public function getLabels(): array
    {
        return $this->labels;
    }

    /**
     * @param string[] $labels
     */
    public function setLabels(array $labels): self
    {
        $this->labels = $labels;
        return $this;
    }

}
