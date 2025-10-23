<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DelegatedAdminAccessDetails
 */
class DelegatedAdminAccessDetails
{
    /** 
     * The directory roles that the Microsoft partner is assigned in the customer tenant.
     * @var UnifiedRole[]
     */
    public array $unifiedRoles = [];


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['unifiedRoles'])) {
            $this->unifiedRoles = $data['unifiedRoles'];
        }
    }
}
