<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WindowsPhone81CompliancePolicyCollectionResponse
 */
class WindowsPhone81CompliancePolicyCollectionResponse
{
    /** 
     * 
     * @var WindowsPhone81CompliancePolicy[]
     */
    public array $value = [];


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['value'])) {
            $this->value = $data['value'];
        }
    }
}
