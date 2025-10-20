<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WorkbookPivotTable
 */
class WorkbookPivotTable
{
    /**
     * The name of the pivot table.
     */
    private ?string $name;

    /**
     * The worksheet that contains the current pivot table. Read-only.
     */
    private ?string $worksheet;

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;
        return $this;
    }

    public function getWorksheet(): ?string
    {
        return $this->worksheet;
    }

    public function setWorksheet(?string $worksheet): self
    {
        $this->worksheet = $worksheet;
        return $this;
    }

}
