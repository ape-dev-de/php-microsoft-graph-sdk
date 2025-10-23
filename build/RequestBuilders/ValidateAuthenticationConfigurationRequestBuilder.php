<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\AuthenticationConfigurationValidation;

/**
 * Request builder for validateAuthenticationConfiguration
 */
class ValidateAuthenticationConfigurationRequestBuilder extends BaseRequestBuilder
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
