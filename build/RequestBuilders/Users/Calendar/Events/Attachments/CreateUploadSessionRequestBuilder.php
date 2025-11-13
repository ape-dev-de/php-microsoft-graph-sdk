<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Users\Calendar\Events\Attachments;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\UploadSession;

/**
 * Request builder for /users/{user-id}/calendar/events/{event-id}/attachments/createUploadSession
 */
class CreateUploadSessionRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Invoke action createUploadSession
     * @param UploadSession|\stdClass $body Request body
     * @return UploadSession|\stdClass|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function post(UploadSession|\stdClass $body): UploadSession|\stdClass|null
    {
        $response = $this->client->post($this->requestUrl, $body->getRaw());
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePost($responseBody);
    }

    /**
     * Deserialize response to UploadSession|\stdClass|null
     */
    private function deserializePost(string $body): UploadSession|\stdClass|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new UploadSession($data);
    }
}
