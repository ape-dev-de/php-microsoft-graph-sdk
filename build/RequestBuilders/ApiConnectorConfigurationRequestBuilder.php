<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\UserFlowApiConnectorConfiguration;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\PostAttributeCollectionRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\PostFederationSignupRequestBuilder;

/**
 * Request builder for apiConnectorConfiguration
 */
class ApiConnectorConfigurationRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get userFlowApiConnectorConfiguration
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return UserFlowApiConnectorConfiguration
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): UserFlowApiConnectorConfiguration
    {
        $queryParams = [];
        if ($select !== null) {
            $queryParams['$select'] = implode(',', $select);
        }
        if ($expand !== null) {
            $queryParams['$expand'] = implode(',', $expand);
        }
        $response = $this->client->get($this->requestUrl, $queryParams);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializeGet($responseBody);
    }

    /**
     * Deserialize response to UserFlowApiConnectorConfiguration
     */
    private function deserializeGet(string $body): mixed
    {
        if (empty($body)) {
            return null;
        }
        
        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }
        
        // Single object
        return new UserFlowApiConnectorConfiguration($data);
    }
    /**
     * Navigate to postAttributeCollection
     *
     * @return PostAttributeCollectionRequestBuilder
     */
    public function postAttributeCollection(): PostAttributeCollectionRequestBuilder
    {
        return new PostAttributeCollectionRequestBuilder($this->client, $this->requestUrl . '/postAttributeCollection');
    }
    /**
     * Navigate to postFederationSignup
     *
     * @return PostFederationSignupRequestBuilder
     */
    public function postFederationSignup(): PostFederationSignupRequestBuilder
    {
        return new PostFederationSignupRequestBuilder($this->client, $this->requestUrl . '/postFederationSignup');
    }
}
