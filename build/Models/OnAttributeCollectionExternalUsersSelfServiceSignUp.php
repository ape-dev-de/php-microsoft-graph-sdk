<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * OnAttributeCollectionExternalUsersSelfServiceSignUp
 */
class OnAttributeCollectionExternalUsersSelfServiceSignUp
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** 
     * Required. The configuration for how attributes are displayed in the sign-up experience defined by a user flow, like the externalUsersSelfServiceSignupEventsFlow, specifically on the attribute collection page.
     * @var AuthenticationAttributeCollectionPage|\stdClass|null
     */
    public mixed $attributeCollectionPage = null;

    /** 
     * 
     * @var IdentityUserFlowAttribute[]
     */
    public array $attributes = [];


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['attributeCollectionPage'])) {
            $this->attributeCollectionPage = is_array($data['attributeCollectionPage']) ? new AuthenticationAttributeCollectionPage($data['attributeCollectionPage']) : $data['attributeCollectionPage'];
        }
        if (isset($data['attributes'])) {
            $this->attributes = $data['attributes'];
        }
    }

    /**
     * Get raw data from API response
     * @return array<string, mixed>
     */
    public function getRaw(): array
    {
        return $this->rawData;
    }
}
