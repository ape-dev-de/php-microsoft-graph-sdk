<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\OnAttributeCollectionHandler;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\GraphOnAttributeCollectionExternalUsersSelfServiceSignUpRequestBuilder;

/**
 * Request builder for onAttributeCollection
 */
class OnAttributeCollectionRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get onAttributeCollection property value
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return OnAttributeCollectionHandler
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): OnAttributeCollectionHandler
    {
        $queryParams = [];
        if ($select !== null && $select !== '') {
            $queryParams['$select'] = implode(',', $select);
        }
        if ($expand !== null && $expand !== '') {
            $queryParams['$expand'] = implode(',', $expand);
        }
        $response = $this->client->get($this->requestUrl, $queryParams);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializeGet($responseBody);
    }

    /**
     * Deserialize response to OnAttributeCollectionHandler
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
        return (object)$data;
    }
    /**
     * Navigate to graph.onAttributeCollectionExternalUsersSelfServiceSignUp
     *
     * @return GraphOnAttributeCollectionExternalUsersSelfServiceSignUpRequestBuilder
     */
    public function graphOnAttributeCollectionExternalUsersSelfServiceSignUp(): GraphOnAttributeCollectionExternalUsersSelfServiceSignUpRequestBuilder
    {
        return new GraphOnAttributeCollectionExternalUsersSelfServiceSignUpRequestBuilder($this->client, $this->requestUrl . '/graph.onAttributeCollectionExternalUsersSelfServiceSignUp');
    }
}
