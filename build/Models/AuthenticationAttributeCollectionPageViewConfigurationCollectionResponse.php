<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AuthenticationAttributeCollectionPageViewConfigurationCollectionResponse
 */
class AuthenticationAttributeCollectionPageViewConfigurationCollectionResponse
{
    /** 
     * 
     * @var AuthenticationAttributeCollectionPageViewConfiguration[]
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
