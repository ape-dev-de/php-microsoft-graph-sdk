<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Communications\Calls\Participants;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\StopHoldMusicOperation;

/**
 * Request builder for /communications/calls/{call-id}/participants/{participant-id}/stopHoldMusic
 */
class StopHoldMusicRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Invoke action stopHoldMusic
     * @param StopHoldMusicOperation|\stdClass $body Request body
     * @return StopHoldMusicOperation|\stdClass|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function post(StopHoldMusicOperation|\stdClass $body): StopHoldMusicOperation|\stdClass|null
    {
        $response = $this->client->post($this->requestUrl, $body->getRaw());
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePost($responseBody);
    }

    /**
     * Deserialize response to StopHoldMusicOperation|\stdClass|null
     */
    private function deserializePost(string $body): StopHoldMusicOperation|\stdClass|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new StopHoldMusicOperation($data);
    }
}
