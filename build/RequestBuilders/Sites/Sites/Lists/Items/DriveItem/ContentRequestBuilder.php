<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Sites\Sites\Lists\Items\DriveItem;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\DriveItem;

/**
 * Request builder for /sites/{site-id}/lists/{list-id}/items/{listItem-id}/driveItem/content
 */
class ContentRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Get content for the navigation property driveItem from sites
     *
     * @param string|null $format Format of the content
     * @return string
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?string $format = null): string
    {
        $queryParams = [];
        if ($format !== null && $format !== '') {
            $queryParams['$format'] = $format;
        }
        $response = $this->client->get($this->requestUrl, $queryParams);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializeGet($responseBody);
    }

    /**
     * Deserialize response to string
     */
    private function deserializeGet(string $body): mixed
    {
        if (empty($body)) {
            return null;
        }
        
        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }
        
        // Single object
        return $data;
    }
    /**
     * Update content for the navigation property driveItem in sites
     * @param DriveItem $body Request body
     * @return DriveItem
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function put(DriveItem $body): DriveItem
    {
        // Convert model to array
        $bodyData = (array)$body;
        $response = $this->client->put($this->requestUrl, $bodyData);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePut($responseBody);
    }

    /**
     * Deserialize response to DriveItem
     */
    private function deserializePut(string $body): mixed
    {
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
