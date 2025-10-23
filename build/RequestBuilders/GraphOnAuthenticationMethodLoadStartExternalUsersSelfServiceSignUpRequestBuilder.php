<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\OnAuthenticationMethodLoadStartExternalUsersSelfServiceSignUp;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\IdentityProvidersRequestBuilder;

/**
 * Request builder for graph.onAuthenticationMethodLoadStartExternalUsersSelfServiceSignUp
 */
class GraphOnAuthenticationMethodLoadStartExternalUsersSelfServiceSignUpRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get the item of type microsoft.graph.onAuthenticationMethodLoadStartHandler as microsoft.graph.onAuthenticationMethodLoadStartExternalUsersSelfServiceSignUp
     * @return OnAuthenticationMethodLoadStartExternalUsersSelfServiceSignUp
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(): OnAuthenticationMethodLoadStartExternalUsersSelfServiceSignUp
    {
        $response = $this->client->get($this->requestUrl, []);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializeGet($responseBody);
    }

    /**
     * Deserialize response to OnAuthenticationMethodLoadStartExternalUsersSelfServiceSignUp
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
        return new OnAuthenticationMethodLoadStartExternalUsersSelfServiceSignUp($data);
    }
    /**
     * Navigate to identityProviders
     *
     * @return IdentityProvidersRequestBuilder
     */
    public function identityProviders(): IdentityProvidersRequestBuilder
    {
        return new IdentityProvidersRequestBuilder($this->client, $this->requestUrl . '/identityProviders');
    }
}
