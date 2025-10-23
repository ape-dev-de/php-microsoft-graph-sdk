<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PolicyLocationDomain
 */
class PolicyLocationDomain
{
    /** The actual value representing the location. Location value is specific for concretetype of the  policyLocation - policyLocationDomain, policyLocationUrl, or policyLocationApplication (for example, 'contoso.com', 'https://partner.contoso.com/upload', '83ef198a-0396-4893-9d4f-d36efbffcaaa'). */
    public ?string $value = null;


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
