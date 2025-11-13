<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Identity\B2xUserFlows;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\UserFlowApiConnectorConfiguration;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Identity\B2xUserFlows\ApiConnectorConfiguration\PostAttributeCollectionRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Identity\B2xUserFlows\ApiConnectorConfiguration\PostFederationSignupRequestBuilder;

/**
 * Request builder for /identity/b2xUserFlows/{b2xIdentityUserFlow-id}/apiConnectorConfiguration
 */
class ApiConnectorConfigurationRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Get userFlowApiConnectorConfiguration
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return UserFlowApiConnectorConfiguration|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): UserFlowApiConnectorConfiguration|null
    {
        $queryParams = [];
        if ($select !== null && $select !== []) {
            $queryParams['$select'] = implode(',', $select);
        }
        if ($expand !== null && $expand !== []) {
            $queryParams['$expand'] = implode(',', $expand);
        }
        $response = $this->client->get($this->requestUrl, $queryParams);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializeGet($responseBody);
    }

    /**
     * Deserialize response to UserFlowApiConnectorConfiguration|null
     */
    private function deserializeGet(string $body): UserFlowApiConnectorConfiguration|null    {
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
