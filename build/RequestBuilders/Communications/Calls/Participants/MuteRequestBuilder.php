<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Communications\Calls\Participants;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\MuteParticipantOperation;

/**
 * Request builder for /communications/calls/{call-id}/participants/{participant-id}/mute
 */
class MuteRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Invoke action mute
     * @param MuteParticipantOperation|\stdClass $body Request body
     * @return MuteParticipantOperation|\stdClass|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function post(MuteParticipantOperation|\stdClass $body): MuteParticipantOperation|\stdClass|null
    {
        $response = $this->client->post($this->requestUrl, $body->getRaw());
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePost($responseBody);
    }

    /**
     * Deserialize response to MuteParticipantOperation|\stdClass|null
     */
    private function deserializePost(string $body): MuteParticipantOperation|\stdClass|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new MuteParticipantOperation($data);
    }
}
