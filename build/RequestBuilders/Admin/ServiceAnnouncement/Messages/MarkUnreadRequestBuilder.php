<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Admin\ServiceAnnouncement\Messages;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;

/**
 * Request builder for /admin/serviceAnnouncement/messages/markUnread
 */
class MarkUnreadRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Invoke action markUnread
     * @param array<string, mixed> $body Request body
     * @return \stdClass|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function post(array $body): \stdClass|null
    {
        $response = $this->client->post($this->requestUrl, $body);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePost($responseBody);
    }

    /**
     * Deserialize response to \stdClass|null
     */
    private function deserializePost(string $body): \stdClass|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        return (object)$data;
    }
}
