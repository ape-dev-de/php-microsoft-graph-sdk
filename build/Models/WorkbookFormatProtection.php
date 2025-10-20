<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WorkbookFormatProtection
 */
class WorkbookFormatProtection
{
    /**
     * Indicates whether Excel hides the formula for the cells in the range. A null value indicates that the entire range doesn't have uniform formula hidden setting.
     */
    private ?bool $formulaHidden;

    /**
     * Indicates whether Excel locks the cells in the object. A null value indicates that the entire range doesn't have uniform lock setting.
     */
    private ?string $locked;

    public function getFormulaHidden(): ?bool
    {
        return $this->formulaHidden;
    }

    public function setFormulaHidden(?bool $formulaHidden): self
    {
        $this->formulaHidden = $formulaHidden;
        return $this;
    }

    public function getLocked(): ?string
    {
        return $this->locked;
    }

    public function setLocked(?string $locked): self
    {
        $this->locked = $locked;
        return $this;
    }

}
