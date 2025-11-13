<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Users\MailFolders\ChildFolders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\MailFolder;

/**
 * Request builder for /users/{user-id}/mailFolders/{mailFolder-id}/childFolders/{mailFolder-id1}/copy
 */
class CopyRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Invoke action copy
     * @param MailFolder|\stdClass $body Request body
     * @return MailFolder|\stdClass|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function post(MailFolder|\stdClass $body): MailFolder|\stdClass|null
    {
        $response = $this->client->post($this->requestUrl, $body->getRaw());
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePost($responseBody);
    }

    /**
     * Deserialize response to MailFolder|\stdClass|null
     */
    private function deserializePost(string $body): MailFolder|\stdClass|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new MailFolder($data);
    }
}
