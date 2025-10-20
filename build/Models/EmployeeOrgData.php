<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * EmployeeOrgData
 */
class EmployeeOrgData
{
    /**
     * The cost center associated with the user. Returned only on $select. Supports $filter.
     */
    private ?string $costCenter;

    /**
     * The name of the division in which the user works. Returned only on $select. Supports $filter.
     */
    private ?string $division;

    public function getCostCenter(): ?string
    {
        return $this->costCenter;
    }

    public function setCostCenter(?string $costCenter): self
    {
        $this->costCenter = $costCenter;
        return $this;
    }

    public function getDivision(): ?string
    {
        return $this->division;
    }

    public function setDivision(?string $division): self
    {
        $this->division = $division;
        return $this;
    }

}
