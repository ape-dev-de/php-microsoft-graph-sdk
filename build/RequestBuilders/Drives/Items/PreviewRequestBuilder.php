<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\ItemPreviewInfo;

/**
 * Request builder for /drives/{drive-id}/items/{driveItem-id}/preview
 */
class PreviewRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Invoke action preview
     * @param ItemPreviewInfo|\stdClass $body Request body
     * @return ItemPreviewInfo|\stdClass|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function post(ItemPreviewInfo|\stdClass $body): ItemPreviewInfo|\stdClass|null
    {
        $response = $this->client->post($this->requestUrl, $body->getRaw());
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePost($responseBody);
    }

    /**
     * Deserialize response to ItemPreviewInfo|\stdClass|null
     */
    private function deserializePost(string $body): ItemPreviewInfo|\stdClass|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new ItemPreviewInfo($data);
    }
}
