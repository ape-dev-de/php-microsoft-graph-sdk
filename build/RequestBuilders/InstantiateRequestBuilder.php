<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\ApplicationServicePrincipal;

/**
 * Request builder for instantiate
 */
class InstantiateRequestBuilder extends BaseRequestBuilder
{
    /**
     * Invoke action instantiate
     * @param ApplicationServicePrincipal|\stdClass $body Request body
     * @return ApplicationServicePrincipal|\stdClass
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function post(ApplicationServicePrincipal|\stdClass $body): ApplicationServicePrincipal|\stdClass
    {
        // Convert model to array
        $bodyData = (array)$body;
        $response = $this->client->post($this->requestUrl, $bodyData);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePost($responseBody);
    }

    /**
     * Deserialize response to ApplicationServicePrincipal|\stdClass
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
        return new ApplicationServicePrincipal($data);
    }
}
