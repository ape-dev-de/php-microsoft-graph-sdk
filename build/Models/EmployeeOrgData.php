<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * EmployeeOrgData
 */
class EmployeeOrgData
{
    /** The cost center associated with the user. Returned only on $select. Supports $filter. */
    public ?string $costCenter = null;

    /** The name of the division in which the user works. Returned only on $select. Supports $filter. */
    public ?string $division = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['costCenter'])) {
            $this->costCenter = $data['costCenter'];
        }
        if (isset($data['division'])) {
            $this->division = $data['division'];
        }
    }
}
