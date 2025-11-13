<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Communications\Calls;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\CancelMediaProcessingOperation;

/**
 * Request builder for /communications/calls/{call-id}/cancelMediaProcessing
 */
class CancelMediaProcessingRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Invoke action cancelMediaProcessing
     * @param CancelMediaProcessingOperation|\stdClass $body Request body
     * @return CancelMediaProcessingOperation|\stdClass|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function post(CancelMediaProcessingOperation|\stdClass $body): CancelMediaProcessingOperation|\stdClass|null
    {
        $response = $this->client->post($this->requestUrl, $body->getRaw());
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePost($responseBody);
    }

    /**
     * Deserialize response to CancelMediaProcessingOperation|\stdClass|null
     */
    private function deserializePost(string $body): CancelMediaProcessingOperation|\stdClass|null    {
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
