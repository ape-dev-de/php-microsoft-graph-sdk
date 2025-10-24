<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Communications\Communications\Calls;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\AddLargeGalleryViewOperation;

/**
 * Request builder for /communications/calls/{call-id}/addLargeGalleryView
 */
class AddLargeGalleryViewRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Invoke action addLargeGalleryView
     * @param AddLargeGalleryViewOperation|\stdClass $body Request body
     * @return AddLargeGalleryViewOperation|\stdClass
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function post(AddLargeGalleryViewOperation|\stdClass $body): AddLargeGalleryViewOperation|\stdClass
    {
        // Convert model to array
        $bodyData = (array)$body;
        $response = $this->client->post($this->requestUrl, $bodyData);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePost($responseBody);
    }

    /**
     * Deserialize response to AddLargeGalleryViewOperation|\stdClass
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
        return new AddLargeGalleryViewOperation($data);
    }
}
