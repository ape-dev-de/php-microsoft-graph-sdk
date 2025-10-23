<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * InvestigationSecurityState
 */
class InvestigationSecurityState
{
    /**  */
    public ?string $name = null;

    /**  */
    public ?string $status = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['name'])) {
            $this->name = $data['name'];
        }
        if (isset($data['status'])) {
            $this->status = $data['status'];
        }
    }
}
