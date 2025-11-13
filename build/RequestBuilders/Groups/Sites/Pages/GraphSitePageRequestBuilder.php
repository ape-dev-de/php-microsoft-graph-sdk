<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Groups\Sites\Pages;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\SitePage;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Groups\Sites\Pages\GraphsitePage\CanvasLayoutRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Groups\Sites\Pages\GraphsitePage\CreatedByUserRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Groups\Sites\Pages\GraphsitePage\LastModifiedByUserRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Groups\Sites\Pages\GraphsitePage\WebPartsRequestBuilder;

/**
 * Request builder for /groups/{group-id}/sites/{site-id}/pages/{baseSitePage-id}/graph.sitePage
 */
class GraphSitePageRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Get the item of type microsoft.graph.baseSitePage as microsoft.graph.sitePage
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return SitePage|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): SitePage|null
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
     * Deserialize response to SitePage|null
     */
    private function deserializeGet(string $body): SitePage|null    {
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
