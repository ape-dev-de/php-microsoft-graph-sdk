<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TargetManager
 */
class TargetManager
{
    /** Manager level, between 1 and 4. The direct manager is 1. */
    public ?float $managerLevel = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['managerLevel'])) {
            $this->managerLevel = $data['managerLevel'];
        }
    }
}
