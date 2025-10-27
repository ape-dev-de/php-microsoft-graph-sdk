<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * B2xIdentityUserFlow
 */
class B2xIdentityUserFlow
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /**  */
    public ?UserFlowType $userFlowType = null;

    /** 
     * 
     * @var float|string|ReferenceNumeric|null
     */
    public float|string|ReferenceNumeric|null $userFlowTypeVersion = null;

    /** 
     * Configuration for enabling an API connector for use as part of the self-service sign-up user flow. You can only obtain the value of this object using Get userFlowApiConnectorConfiguration.
     * @var UserFlowApiConnectorConfiguration|\stdClass|null
     */
    public UserFlowApiConnectorConfiguration|\stdClass|null $apiConnectorConfiguration = null;

    /** 
     * The identity providers included in the user flow.
     * @var IdentityProvider[]
     */
    public array $identityProviders = [];

    /** 
     * The languages supported for customization within the user flow. Language customization is enabled by default in self-service sign-up user flow. You can't create custom languages in self-service sign-up user flows.
     * @var UserFlowLanguageConfiguration[]
     */
    public array $languages = [];

    /** 
     * The user attribute assignments included in the user flow.
     * @var IdentityUserFlowAttributeAssignment[]
     */
    public array $userAttributeAssignments = [];

    /** 
     * 
     * @var IdentityProviderBase[]
     */
    public array $userFlowIdentityProviders = [];


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['userFlowType'])) {
            $this->userFlowType = is_string($data['userFlowType']) ? UserFlowType::tryFrom($data['userFlowType']) : $data['userFlowType'];
        }
        if (isset($data['userFlowTypeVersion'])) {
            $this->userFlowTypeVersion = is_numeric($data['userFlowTypeVersion']) ? (float)$data['userFlowTypeVersion'] : $data['userFlowTypeVersion'];
        }
        if (isset($data['apiConnectorConfiguration'])) {
            $this->apiConnectorConfiguration = is_array($data['apiConnectorConfiguration']) ? new UserFlowApiConnectorConfiguration($data['apiConnectorConfiguration']) : $data['apiConnectorConfiguration'];
        }
        if (isset($data['identityProviders'])) {
            $this->identityProviders = $data['identityProviders'];
        }
        if (isset($data['languages'])) {
            $this->languages = $data['languages'];
        }
        if (isset($data['userAttributeAssignments'])) {
            $this->userAttributeAssignments = $data['userAttributeAssignments'];
        }
        if (isset($data['userFlowIdentityProviders'])) {
            $this->userFlowIdentityProviders = $data['userFlowIdentityProviders'];
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
