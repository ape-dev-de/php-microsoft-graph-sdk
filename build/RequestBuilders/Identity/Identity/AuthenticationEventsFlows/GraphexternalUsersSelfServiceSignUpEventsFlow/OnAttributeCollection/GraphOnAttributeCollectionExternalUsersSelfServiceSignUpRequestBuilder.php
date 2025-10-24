<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Identity\Identity\AuthenticationEventsFlows\GraphexternalUsersSelfServiceSignUpEventsFlow\OnAttributeCollection;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\OnAttributeCollectionExternalUsersSelfServiceSignUp;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Identity\Identity\AuthenticationEventsFlows\GraphexternalUsersSelfServiceSignUpEventsFlow\OnAttributeCollection\GraphonAttributeCollectionExternalUsersSelfServiceSignUp\AttributesRequestBuilder;

/**
 * Request builder for /identity/authenticationEventsFlows/{authenticationEventsFlow-id}/graph.externalUsersSelfServiceSignUpEventsFlow/onAttributeCollection/graph.onAttributeCollectionExternalUsersSelfServiceSignUp
 */
class GraphOnAttributeCollectionExternalUsersSelfServiceSignUpRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Get the item of type microsoft.graph.onAttributeCollectionHandler as microsoft.graph.onAttributeCollectionExternalUsersSelfServiceSignUp
     * @return OnAttributeCollectionExternalUsersSelfServiceSignUp
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(): OnAttributeCollectionExternalUsersSelfServiceSignUp
    {
        $response = $this->client->get($this->requestUrl, []);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializeGet($responseBody);
    }

    /**
     * Deserialize response to OnAttributeCollectionExternalUsersSelfServiceSignUp
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
        return new OnAttributeCollectionExternalUsersSelfServiceSignUp($data);
    }
    /**
     * Navigate to attributes
     *
     * @return AttributesRequestBuilder
     */
    public function attributes(): AttributesRequestBuilder
    {
        return new AttributesRequestBuilder($this->client, $this->requestUrl . '/attributes');
    }
}
