<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\DriveItem;

/**
 * Request builder for /drives/{drive-id}/items/{driveItem-id}/follow
 */
class FollowRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Invoke action follow
     * @param DriveItem|\stdClass $body Request body
     * @return DriveItem|\stdClass|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function post(DriveItem|\stdClass $body): DriveItem|\stdClass|null
    {
        $response = $this->client->post($this->requestUrl, $body->getRaw());
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePost($responseBody);
    }

    /**
     * Deserialize response to DriveItem|\stdClass|null
     */
    private function deserializePost(string $body): DriveItem|\stdClass|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new DriveItem($data);
    }
}
