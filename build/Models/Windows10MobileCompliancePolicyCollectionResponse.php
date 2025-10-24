<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Windows10MobileCompliancePolicyCollectionResponse
 */
class Windows10MobileCompliancePolicyCollectionResponse
{
    /** 
     * 
     * @var Windows10MobileCompliancePolicy[]
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
