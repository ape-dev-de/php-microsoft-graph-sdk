<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\ApplicationTemplates;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\ApplicationServicePrincipal;

/**
 * Request builder for /applicationTemplates/{applicationTemplate-id}/instantiate
 */
class InstantiateRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Invoke action instantiate
     * @param ApplicationServicePrincipal|\stdClass $body Request body
     * @return ApplicationServicePrincipal|\stdClass|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function post(ApplicationServicePrincipal|\stdClass $body): ApplicationServicePrincipal|\stdClass|null
    {
        $response = $this->client->post($this->requestUrl, $body->getRaw());
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePost($responseBody);
    }

    /**
     * Deserialize response to ApplicationServicePrincipal|\stdClass|null
     */
    private function deserializePost(string $body): ApplicationServicePrincipal|\stdClass|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new ApplicationServicePrincipal($data);
    }
}
