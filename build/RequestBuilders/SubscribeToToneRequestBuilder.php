<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\SubscribeToToneOperation;

/**
 * Request builder for subscribeToTone
 */
class SubscribeToToneRequestBuilder extends BaseRequestBuilder
{
    /**
     * Invoke action subscribeToTone
     * @param SubscribeToToneOperation|\stdClass $body Request body
     * @return SubscribeToToneOperation|\stdClass
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function post(SubscribeToToneOperation|\stdClass $body): SubscribeToToneOperation|\stdClass
    {
        // Convert model to array
        $bodyData = (array)$body;
        $response = $this->client->post($this->requestUrl, $bodyData);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePost($responseBody);
    }

    /**
     * Deserialize response to SubscribeToToneOperation|\stdClass
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
        return new SubscribeToToneOperation($data);
    }
}
