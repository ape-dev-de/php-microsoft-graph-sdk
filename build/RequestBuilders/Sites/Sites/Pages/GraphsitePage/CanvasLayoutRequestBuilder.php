<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Sites\Sites\Pages\GraphsitePage;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\CanvasLayout;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Sites\Sites\Pages\GraphsitePage\CanvasLayout\HorizontalSectionsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Sites\Sites\Pages\GraphsitePage\CanvasLayout\VerticalSectionRequestBuilder;

/**
 * Request builder for /sites/{site-id}/pages/{baseSitePage-id}/graph.sitePage/canvasLayout
 */
class CanvasLayoutRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Get canvasLayout from sites
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return CanvasLayout
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): CanvasLayout
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
     * Deserialize response to CanvasLayout
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
        return new CanvasLayout($data);
    }
    /**
     * Update the navigation property canvasLayout in sites
     * @param CanvasLayout $body Request body
     * @return CanvasLayout
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function patch(CanvasLayout $body): CanvasLayout
    {
        // Convert model to array
        $bodyData = (array)$body;
        $response = $this->client->patch($this->requestUrl, $bodyData);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePatch($responseBody);
    }

    /**
     * Deserialize response to CanvasLayout
     */
    private function deserializePatch(string $body): mixed
    {
        if (empty($body)) {
            return null;
        }
        
        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }
        
        // Single object
        return new CanvasLayout($data);
    }
    /**
     * Delete navigation property canvasLayout for sites
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
    private function deserializeDelete(string $body): mixed
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
     * Navigate to horizontalSections
     *
     * @return HorizontalSectionsRequestBuilder
     */
    public function horizontalSections(): HorizontalSectionsRequestBuilder
    {
        return new HorizontalSectionsRequestBuilder($this->client, $this->requestUrl . '/horizontalSections');
    }
    /**
     * Navigate to verticalSection
     *
     * @return VerticalSectionRequestBuilder
     */
    public function verticalSection(): VerticalSectionRequestBuilder
    {
        return new VerticalSectionRequestBuilder($this->client, $this->requestUrl . '/verticalSection');
    }
}
