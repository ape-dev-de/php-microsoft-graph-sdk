<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Identity\AuthenticationEventsFlows\GraphexternalUsersSelfServiceSignUpEventsFlow;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\OnAuthenticationMethodLoadStartHandler;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Identity\AuthenticationEventsFlows\GraphexternalUsersSelfServiceSignUpEventsFlow\OnAuthenticationMethodLoadStart\GraphOnAuthenticationMethodLoadStartExternalUsersSelfServiceSignUpRequestBuilder;

/**
 * Request builder for /identity/authenticationEventsFlows/{authenticationEventsFlow-id}/graph.externalUsersSelfServiceSignUpEventsFlow/onAuthenticationMethodLoadStart
 */
class OnAuthenticationMethodLoadStartRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Get onAuthenticationMethodLoadStart property value
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return OnAuthenticationMethodLoadStartHandler|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): OnAuthenticationMethodLoadStartHandler|null
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
     * Deserialize response to OnAuthenticationMethodLoadStartHandler|null
     */
    private function deserializeGet(string $body): OnAuthenticationMethodLoadStartHandler|null    {
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
     * Navigate to graph.onAuthenticationMethodLoadStartExternalUsersSelfServiceSignUp
     *
     * @return GraphOnAuthenticationMethodLoadStartExternalUsersSelfServiceSignUpRequestBuilder
     */
    public function graphOnAuthenticationMethodLoadStartExternalUsersSelfServiceSignUp(): GraphOnAuthenticationMethodLoadStartExternalUsersSelfServiceSignUpRequestBuilder
    {
        return new GraphOnAuthenticationMethodLoadStartExternalUsersSelfServiceSignUpRequestBuilder($this->client, $this->requestUrl . '/graph.onAuthenticationMethodLoadStartExternalUsersSelfServiceSignUp');
    }
}
