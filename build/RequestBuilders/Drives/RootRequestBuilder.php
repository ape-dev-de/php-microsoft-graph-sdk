<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\DriveItem;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Root\ContentRequestBuilder;

/**
 * Request builder for /drives/{drive-id}/root
 */
class RootRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Get root from drives
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return DriveItem|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): DriveItem|null
    {
        $queryParams = [];
        if ($select !== null && $select !== []) {
            $queryParams['$select'] = implode(',', $select);
        }
        if ($expand !== null && $expand !== []) {
            $queryParams['$expand'] = implode(',', $expand);
        }
        $response = $this->client->get($this->requestUrl, $queryParams);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializeGet($responseBody);
    }

    /**
     * Deserialize response to DriveItem|null
     */
    private function deserializeGet(string $body): DriveItem|null    {
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
    /**
     * Navigate to content
     *
     * @return ContentRequestBuilder
     */
    public function content(): ContentRequestBuilder
    {
        return new ContentRequestBuilder($this->client, $this->requestUrl . '/content');
    }
}
