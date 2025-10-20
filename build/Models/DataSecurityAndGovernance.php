<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DataSecurityAndGovernance
 */
class DataSecurityAndGovernance
{
    /**
     */
    private ?string $sensitivityLabels;

    public function getSensitivityLabels(): ?string
    {
        return $this->sensitivityLabels;
    }

    public function setSensitivityLabels(?string $sensitivityLabels): self
    {
        $this->sensitivityLabels = $sensitivityLabels;
        return $this;
    }

}
