<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ContentCustomization
 */
class ContentCustomization
{
    /** 
     * Represents the content options of External Identities to be customized throughout the authentication flow for a tenant.
     * @var KeyValue[]
     */
    public array $attributeCollection = [];

    /** A relative URL for the content options of External Identities to be customized throughout the authentication flow for a tenant. */
    public ?string $attributeCollectionRelativeUrl = null;

    /** 
     * Represents content options to customize during MFA proofup interruptions.
     * @var KeyValue[]
     */
    public array $registrationCampaign = [];

    /** The relative URL of the content options to customize during MFA proofup interruptions. */
    public ?string $registrationCampaignRelativeUrl = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['attributeCollection'])) {
            $this->attributeCollection = $data['attributeCollection'];
        }
        if (isset($data['attributeCollectionRelativeUrl'])) {
            $this->attributeCollectionRelativeUrl = $data['attributeCollectionRelativeUrl'];
        }
        if (isset($data['registrationCampaign'])) {
            $this->registrationCampaign = $data['registrationCampaign'];
        }
        if (isset($data['registrationCampaignRelativeUrl'])) {
            $this->registrationCampaignRelativeUrl = $data['registrationCampaignRelativeUrl'];
        }
    }
}
