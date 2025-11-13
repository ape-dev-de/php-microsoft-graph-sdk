<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Communications\Calls;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\UnmuteParticipantOperation;

/**
 * Request builder for /communications/calls/{call-id}/unmute
 */
class UnmuteRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Invoke action unmute
     * @param UnmuteParticipantOperation|\stdClass $body Request body
     * @return UnmuteParticipantOperation|\stdClass|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function post(UnmuteParticipantOperation|\stdClass $body): UnmuteParticipantOperation|\stdClass|null
    {
        $response = $this->client->post($this->requestUrl, $body->getRaw());
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePost($responseBody);
    }

    /**
     * Deserialize response to UnmuteParticipantOperation|\stdClass|null
     */
    private function deserializePost(string $body): UnmuteParticipantOperation|\stdClass|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new UnmuteParticipantOperation($data);
    }
}
