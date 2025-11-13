<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Sites\Pages\GraphsitePage\CanvasLayout\VerticalSection\Webparts;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\WebPart;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Sites\Pages\GraphsitePage\CanvasLayout\VerticalSection\Webparts\GetPositionOfWebPartRequestBuilder;

/**
 * Request builder for /sites/{site-id}/pages/{baseSitePage-id}/graph.sitePage/canvasLayout/verticalSection/webparts/{webPart-id}
 */
class WebPartRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Get webparts from sites
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return WebPart|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): WebPart|null
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
     * Deserialize response to WebPart|null
     */
    private function deserializeGet(string $body): WebPart|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new WebPart($data);
    }
    /**
     * Update the navigation property webparts in sites
     * @param WebPart $body Request body
     * @return WebPart|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function patch(WebPart $body): WebPart|null
    {
        $response = $this->client->patch($this->requestUrl, $body->getRaw());
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePatch($responseBody);
    }

    /**
     * Deserialize response to WebPart|null
     */
    private function deserializePatch(string $body): WebPart|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new WebPart($data);
    }
    /**
     * Delete navigation property webparts for sites
     *
     * @param string|null $ifMatch ETag
     * @return mixed
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function delete(?string $ifMatch = null): mixed
    {
        $queryParams = [];
        if ($ifMatch !== null && $ifMatch !== '') {
            $queryParams['If-Match'] = $ifMatch;
        }
        $response = $this->client->delete($this->requestUrl, $queryParams);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializeDelete($responseBody);
    }

    /**
     * Deserialize response to mixed
     */
    private function deserializeDelete(string $body): mixed    {
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
     * Navigate to getPositionOfWebPart
     *
     * @return GetPositionOfWebPartRequestBuilder
     */
    public function getPositionOfWebPart(): GetPositionOfWebPartRequestBuilder
    {
        return new GetPositionOfWebPartRequestBuilder($this->client, $this->requestUrl . '/getPositionOfWebPart');
    }
}
