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
     * @return StartHoldMusicOperation|\stdClass
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function post(StartHoldMusicOperation|\stdClass $body): StartHoldMusicOperation|\stdClass
    {
        // Convert model to array
        $bodyData = (array)$body;
        $response = $this->client->post($this->requestUrl, $bodyData);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePost($responseBody);
    }

    /**
     * Deserialize response to StartHoldMusicOperation|\stdClass
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
        return new StartHoldMusicOperation($data);
    }
}
