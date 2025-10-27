<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * OnAttributeCollectionSubmitCustomExtension
 */
class OnAttributeCollectionSubmitCustomExtension
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** 
     * Configuration for securing the API call to the logic app. For example, using OAuth client credentials flow.
     * @var CustomExtensionAuthenticationConfiguration|\stdClass|null
     */
    public CustomExtensionAuthenticationConfiguration|\stdClass|null $authenticationConfiguration = null;

    /** 
     * HTTP connection settings that define how long Microsoft Entra ID can wait for a connection to a logic app, how many times you can retry a timed-out connection and the exception scenarios when retries are allowed.
     * @var CustomExtensionClientConfiguration|\stdClass|null
     */
    public CustomExtensionClientConfiguration|\stdClass|null $clientConfiguration = null;

    /** Description for the customCalloutExtension object. */
    public ?string $description = null;

    /** Display name for the customCalloutExtension object. */
    public ?string $displayName = null;

    /** 
     * The type and details for configuring the endpoint to call the logic app's workflow.
     * @var CustomExtensionEndpointConfiguration|\stdClass|null
     */
    public CustomExtensionEndpointConfiguration|\stdClass|null $endpointConfiguration = null;

    /** 
     * The behaviour on error for the custom authentication extension.
     * @var CustomExtensionBehaviorOnError|\stdClass|null
     */
    public CustomExtensionBehaviorOnError|\stdClass|null $behaviorOnError = null;


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
        if (isset($data['authenticationConfiguration'])) {
            $this->authenticationConfiguration = is_array($data['authenticationConfiguration']) ? new CustomExtensionAuthenticationConfiguration($data['authenticationConfiguration']) : $data['authenticationConfiguration'];
        }
        if (isset($data['clientConfiguration'])) {
            $this->clientConfiguration = is_array($data['clientConfiguration']) ? new CustomExtensionClientConfiguration($data['clientConfiguration']) : $data['clientConfiguration'];
        }
        if (isset($data['description'])) {
            $this->description = $data['description'];
        }
        if (isset($data['displayName'])) {
            $this->displayName = $data['displayName'];
        }
        if (isset($data['endpointConfiguration'])) {
            $this->endpointConfiguration = is_array($data['endpointConfiguration']) ? new CustomExtensionEndpointConfiguration($data['endpointConfiguration']) : $data['endpointConfiguration'];
        }
        if (isset($data['behaviorOnError'])) {
            $this->behaviorOnError = is_array($data['behaviorOnError']) ? new CustomExtensionBehaviorOnError($data['behaviorOnError']) : $data['behaviorOnError'];
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
