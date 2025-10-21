<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DataSecurityAndGovernance
 */
class DataSecurityAndGovernance
{
    /**
     * @var string[]
     */
    private array $sensitivityLabels = [];


    /**
     * @return string[]
     */
    public function getSensitivityLabels(): array
    {
        return $this->sensitivityLabels;
    }

    /**
     * @param string[] $sensitivityLabels
     */
    public function setSensitivityLabels(array $sensitivityLabels): self
    {
        $this->sensitivityLabels = $sensitivityLabels;
        return $this;
    }

}
