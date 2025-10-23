<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\TimeCard;

/**
 * Request builder for endBreak
 */
class EndBreakRequestBuilder extends BaseRequestBuilder
{
    /**
     * Invoke action endBreak
     * @param TimeCard|\stdClass $body Request body
     * @return TimeCard|\stdClass
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function post(TimeCard|\stdClass $body): TimeCard|\stdClass
    {
        // Convert model to array
        $bodyData = (array)$body;
        $response = $this->client->post($this->requestUrl, $bodyData);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePost($responseBody);
    }

    /**
     * Deserialize response to TimeCard|\stdClass
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
        return new TimeCard($data);
    }
}
