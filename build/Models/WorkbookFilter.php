<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WorkbookFilter
 */
class WorkbookFilter
{
    /**
     * The currently applied filter on the given column. Read-only.
     */
    private ?string $criteria;


    public function getCriteria(): ?string
    {
        return $this->criteria;
    }

    public function setCriteria(?string $criteria): self
    {
        $this->criteria = $criteria;
        return $this;
    }

}
