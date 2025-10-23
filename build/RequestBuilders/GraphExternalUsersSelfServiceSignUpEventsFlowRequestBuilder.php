<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\ExternalUsersSelfServiceSignUpEventsFlow;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\ConditionsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\OnAttributeCollectionRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\OnAuthenticationMethodLoadStartRequestBuilder;

/**
 * Request builder for graph.externalUsersSelfServiceSignUpEventsFlow
 */
class GraphExternalUsersSelfServiceSignUpEventsFlowRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get the item of type microsoft.graph.authenticationEventsFlow as microsoft.graph.externalUsersSelfServiceSignUpEventsFlow
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return ExternalUsersSelfServiceSignUpEventsFlow
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): ExternalUsersSelfServiceSignUpEventsFlow
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
     * Deserialize response to ExternalUsersSelfServiceSignUpEventsFlow
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
        return new ExternalUsersSelfServiceSignUpEventsFlow($data);
    }
    /**
     * Navigate to conditions
     *
     * @return ConditionsRequestBuilder
     */
    public function conditions(): ConditionsRequestBuilder
    {
        return new ConditionsRequestBuilder($this->client, $this->requestUrl . '/conditions');
    }
    /**
     * Navigate to onAttributeCollection
     *
     * @return OnAttributeCollectionRequestBuilder
     */
    public function onAttributeCollection(): OnAttributeCollectionRequestBuilder
    {
        return new OnAttributeCollectionRequestBuilder($this->client, $this->requestUrl . '/onAttributeCollection');
    }
    /**
     * Navigate to onAuthenticationMethodLoadStart
     *
     * @return OnAuthenticationMethodLoadStartRequestBuilder
     */
    public function onAuthenticationMethodLoadStart(): OnAuthenticationMethodLoadStartRequestBuilder
    {
        return new OnAuthenticationMethodLoadStartRequestBuilder($this->client, $this->requestUrl . '/onAuthenticationMethodLoadStart');
    }
}
