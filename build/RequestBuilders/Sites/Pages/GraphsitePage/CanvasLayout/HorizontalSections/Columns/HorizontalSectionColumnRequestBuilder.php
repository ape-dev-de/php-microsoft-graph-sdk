<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Sites\Pages\GraphsitePage\CanvasLayout\HorizontalSections\Columns;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\HorizontalSectionColumn;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Sites\Pages\GraphsitePage\CanvasLayout\HorizontalSections\Columns\WebpartsRequestBuilder;

/**
 * Request builder for /sites/{site-id}/pages/{baseSitePage-id}/graph.sitePage/canvasLayout/horizontalSections/{horizontalSection-id}/columns/{horizontalSectionColumn-id}
 */
class HorizontalSectionColumnRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Get columns from sites
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return HorizontalSectionColumn|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): HorizontalSectionColumn|null
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
     * Deserialize response to HorizontalSectionColumn|null
     */
    private function deserializeGet(string $body): HorizontalSectionColumn|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new HorizontalSectionColumn($data);
    }
    /**
     * Update the navigation property columns in sites
     * @param HorizontalSectionColumn $body Request body
     * @return HorizontalSectionColumn|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function patch(HorizontalSectionColumn $body): HorizontalSectionColumn|null
    {
        $response = $this->client->patch($this->requestUrl, $body->getRaw());
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePatch($responseBody);
    }

    /**
     * Deserialize response to HorizontalSectionColumn|null
     */
    private function deserializePatch(string $body): HorizontalSectionColumn|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new HorizontalSectionColumn($data);
    }
    /**
     * Delete navigation property columns for sites
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
     * Navigate to webparts
     *
     * @return WebpartsRequestBuilder
     */
    public function webparts(): WebpartsRequestBuilder
    {
        return new WebpartsRequestBuilder($this->client, $this->requestUrl . '/webparts');
    }
}
