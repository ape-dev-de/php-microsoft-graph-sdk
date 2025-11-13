<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Security\Identities\Sensors;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\SecurityDeploymentAccessKeyType;

/**
 * Request builder for /security/identities/sensors/microsoft.graph.security.getDeploymentAccessKey()
 */
class MicrosoftgraphsecuritygetDeploymentAccessKeyRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Invoke function getDeploymentAccessKey
     * @return SecurityDeploymentAccessKeyType|\stdClass|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(): SecurityDeploymentAccessKeyType|\stdClass|null
    {
        $response = $this->client->get($this->requestUrl, []);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializeGet($responseBody);
    }

    /**
     * Deserialize response to SecurityDeploymentAccessKeyType|\stdClass|null
     */
    private function deserializeGet(string $body): SecurityDeploymentAccessKeyType|\stdClass|null    {
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
