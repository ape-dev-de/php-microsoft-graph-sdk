<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\CancelMediaProcessingOperation;

/**
 * Request builder for cancelMediaProcessing
 */
class CancelMediaProcessingRequestBuilder extends BaseRequestBuilder
{
    /**
     * Invoke action cancelMediaProcessing
     * @param CancelMediaProcessingOperation|\stdClass $body Request body
     * @return CancelMediaProcessingOperation|\stdClass
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function post(CancelMediaProcessingOperation|\stdClass $body): CancelMediaProcessingOperation|\stdClass
    {
        // Convert model to array
        $bodyData = (array)$body;
        $response = $this->client->post($this->requestUrl, $bodyData);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePost($responseBody);
    }

    /**
     * Deserialize response to CancelMediaProcessingOperation|\stdClass
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
        return new CancelMediaProcessingOperation($data);
    }
}
