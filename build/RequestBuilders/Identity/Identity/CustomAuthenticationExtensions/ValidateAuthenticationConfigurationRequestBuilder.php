<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Identity\Identity\CustomAuthenticationExtensions;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\AuthenticationConfigurationValidation;

/**
 * Request builder for /identity/customAuthenticationExtensions/{customAuthenticationExtension-id}/validateAuthenticationConfiguration
 */
class ValidateAuthenticationConfigurationRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Invoke action validateAuthenticationConfiguration
     * @param AuthenticationConfigurationValidation|\stdClass $body Request body
     * @return AuthenticationConfigurationValidation|\stdClass
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function post(AuthenticationConfigurationValidation|\stdClass $body): AuthenticationConfigurationValidation|\stdClass
    {
        // Convert model to array
        $bodyData = (array)$body;
        $response = $this->client->post($this->requestUrl, $bodyData);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePost($responseBody);
    }

    /**
     * Deserialize response to AuthenticationConfigurationValidation|\stdClass
     */
    private function deserializePost(string $body): mixed
    {
        if (empty($body)) {
            return null;
        }
        
        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }
        
        // Single object
        return new AuthenticationConfigurationValidation($data);
    }
}
