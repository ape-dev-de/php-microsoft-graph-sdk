<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Communications\Calls;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\PlayPromptOperation;

/**
 * Request builder for /communications/calls/{call-id}/playPrompt
 */
class PlayPromptRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Invoke action playPrompt
     * @param PlayPromptOperation|\stdClass $body Request body
     * @return PlayPromptOperation|\stdClass|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function post(PlayPromptOperation|\stdClass $body): PlayPromptOperation|\stdClass|null
    {
        $response = $this->client->post($this->requestUrl, $body->getRaw());
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePost($responseBody);
    }

    /**
     * Deserialize response to PlayPromptOperation|\stdClass|null
     */
    private function deserializePost(string $body): PlayPromptOperation|\stdClass|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new PlayPromptOperation($data);
    }
}
