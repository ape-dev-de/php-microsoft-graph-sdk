<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Communications\Calls\Participants;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\StartHoldMusicOperation;

/**
 * Request builder for /communications/calls/{call-id}/participants/{participant-id}/startHoldMusic
 */
class StartHoldMusicRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Invoke action startHoldMusic
     * @param StartHoldMusicOperation|\stdClass $body Request body
     * @return StartHoldMusicOperation|\stdClass|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function post(StartHoldMusicOperation|\stdClass $body): StartHoldMusicOperation|\stdClass|null
    {
        $response = $this->client->post($this->requestUrl, $body->getRaw());
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePost($responseBody);
    }

    /**
     * Deserialize response to StartHoldMusicOperation|\stdClass|null
     */
    private function deserializePost(string $body): StartHoldMusicOperation|\stdClass|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new StartHoldMusicOperation($data);
    }
}
