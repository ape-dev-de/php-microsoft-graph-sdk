<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Security\Identities\Sensors;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\SecurityDeploymentAccessKeyType;

/**
 * Request builder for /security/identities/sensors/microsoft.graph.security.regenerateDeploymentAccessKey
 */
class SecurityRegenerateDeploymentAccessKeyRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Invoke action regenerateDeploymentAccessKey
     * @param SecurityDeploymentAccessKeyType|\stdClass $body Request body
     * @return SecurityDeploymentAccessKeyType|\stdClass
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function post(SecurityDeploymentAccessKeyType|\stdClass $body): SecurityDeploymentAccessKeyType|\stdClass
    {
        // Get raw data from model
        $bodyData = method_exists($body, 'getRaw') ? $body->getRaw() : json_encode(json_decode($body, true));
        $response = $this->client->post($this->requestUrl, $bodyData);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePost($responseBody);
    }

    /**
     * Deserialize response to SecurityDeploymentAccessKeyType|\stdClass
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
        return new SecurityDeploymentAccessKeyType($data);
    }
}
