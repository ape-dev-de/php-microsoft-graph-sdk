<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Users\MailFolders\Messages;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\Message;

/**
 * Request builder for /users/{user-id}/mailFolders/{mailFolder-id}/messages/{message-id}/copy
 */
class CopyRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Invoke action copy
     * @param Message|\stdClass $body Request body
     * @return Message|\stdClass|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function post(Message|\stdClass $body): Message|\stdClass|null
    {
        $response = $this->client->post($this->requestUrl, $body->getRaw());
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePost($responseBody);
    }

    /**
     * Deserialize response to Message|\stdClass|null
     */
    private function deserializePost(string $body): Message|\stdClass|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new Message($data);
    }
}
