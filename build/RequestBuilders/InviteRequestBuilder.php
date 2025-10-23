<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\InviteParticipantsOperation;

/**
 * Request builder for invite
 */
class InviteRequestBuilder extends BaseRequestBuilder
{
    /**
     * Invoke action invite
     * @param InviteParticipantsOperation|\stdClass $body Request body
     * @return InviteParticipantsOperation|\stdClass
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function post(InviteParticipantsOperation|\stdClass $body): InviteParticipantsOperation|\stdClass
    {
        // Convert model to array
        $bodyData = (array)$body;
        $response = $this->client->post($this->requestUrl, $bodyData);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePost($responseBody);
    }

    /**
     * Deserialize response to InviteParticipantsOperation|\stdClass
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
        return new InviteParticipantsOperation($data);
    }
}
