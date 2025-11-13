<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Groups\Sites\Pages\GraphsitePage\CanvasLayout;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\VerticalSection;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Groups\Sites\Pages\GraphsitePage\CanvasLayout\VerticalSection\WebpartsRequestBuilder;

/**
 * Request builder for /groups/{group-id}/sites/{site-id}/pages/{baseSitePage-id}/graph.sitePage/canvasLayout/verticalSection
 */
class VerticalSectionRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Get verticalSection from groups
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return VerticalSection|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): VerticalSection|null
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
     * Deserialize response to VerticalSection|null
     */
    private function deserializeGet(string $body): VerticalSection|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new VerticalSection($data);
    }
    /**
     * Update the navigation property verticalSection in groups
     * @param VerticalSection $body Request body
     * @return VerticalSection|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function patch(VerticalSection $body): VerticalSection|null
    {
        $response = $this->client->patch($this->requestUrl, $body->getRaw());
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePatch($responseBody);
    }

    /**
     * Deserialize response to VerticalSection|null
     */
    private function deserializePatch(string $body): VerticalSection|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new VerticalSection($data);
    }
    /**
     * Delete navigation property verticalSection for groups
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
