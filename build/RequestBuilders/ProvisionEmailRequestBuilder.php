<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\ProvisionChannelEmailResult;

/**
 * Request builder for provisionEmail
 */
class ProvisionEmailRequestBuilder extends BaseRequestBuilder
{
    /**
     * Invoke action provisionEmail
     * @param ProvisionChannelEmailResult|\stdClass $body Request body
     * @return ProvisionChannelEmailResult|\stdClass
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function post(ProvisionChannelEmailResult|\stdClass $body): ProvisionChannelEmailResult|\stdClass
    {
        // Convert model to array
        $bodyData = (array)$body;
        $response = $this->client->post($this->requestUrl, $bodyData);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePost($responseBody);
    }

    /**
     * Deserialize response to ProvisionChannelEmailResult|\stdClass
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
        return new ProvisionChannelEmailResult($data);
    }
}
