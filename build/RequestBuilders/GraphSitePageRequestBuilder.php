<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\SitePage;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\CanvasLayoutRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\CreatedByUserRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\LastModifiedByUserRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\WebPartsRequestBuilder;

/**
 * Request builder for graph.sitePage
 */
class GraphSitePageRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get the item of type microsoft.graph.baseSitePage as microsoft.graph.sitePage
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return SitePage
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): SitePage
    {
        $queryParams = [];
        if ($select !== null) {
            $queryParams['$select'] = implode(',', $select);
        }
        if ($expand !== null) {
            $queryParams['$expand'] = implode(',', $expand);
        }
        $response = $this->client->get($this->requestUrl, $queryParams);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializeGet($responseBody);
    }

    /**
     * Deserialize response to SitePage
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
        return new SitePage($data);
    }
    /**
     * Navigate to canvasLayout
     *
     * @return CanvasLayoutRequestBuilder
     */
    public function canvasLayout(): CanvasLayoutRequestBuilder
    {
        return new CanvasLayoutRequestBuilder($this->client, $this->requestUrl . '/canvasLayout');
    }
    /**
     * Navigate to createdByUser
     *
     * @return CreatedByUserRequestBuilder
     */
    public function createdByUser(): CreatedByUserRequestBuilder
    {
        return new CreatedByUserRequestBuilder($this->client, $this->requestUrl . '/createdByUser');
    }
    /**
     * Navigate to lastModifiedByUser
     *
     * @return LastModifiedByUserRequestBuilder
     */
    public function lastModifiedByUser(): LastModifiedByUserRequestBuilder
    {
        return new LastModifiedByUserRequestBuilder($this->client, $this->requestUrl . '/lastModifiedByUser');
    }
    /**
     * Navigate to webParts
     *
     * @return WebPartsRequestBuilder
     */
    public function webParts(): WebPartsRequestBuilder
    {
        return new WebPartsRequestBuilder($this->client, $this->requestUrl . '/webParts');
    }
}
