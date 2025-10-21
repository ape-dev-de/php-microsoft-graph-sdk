<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * EmployeeOrgData
 */
class EmployeeOrgData
{
    public function __construct(
        /** The cost center associated with the user. Returned only on $select. Supports $filter. */
        public ?string $costCenter = null,
        /** The name of the division in which the user works. Returned only on $select. Supports $filter. */
        public ?string $division = null
    ) {}
}
