<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\Site;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\AnalyticsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\ColumnsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\ContentTypesRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\CreatedByUserRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DriveRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DrivesRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\ExternalColumnsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\ItemsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\LastModifiedByUserRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\ListsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\GetActivitiesByIntervalRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\GetApplicableContentTypesForListRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\GetByPathRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\OnenoteRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\OperationsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\PagesRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\PermissionsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\SitesRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\TermStoreRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\TermStoresRequestBuilder;

/**
 * Request builder for {site-id}
 */
class SiteRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get sites from groups
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return Site
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): Site
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
     * Deserialize response to Site
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
        return new Site($data);
    }
    /**
     * Update the navigation property sites in groups
     * @param Site $body Request body
     * @return Site
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function patch(Site $body): Site
    {
        // Convert model to array
        $bodyData = (array)$body;
        $response = $this->client->patch($this->requestUrl, $bodyData);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePatch($responseBody);
    }

    /**
     * Deserialize response to Site
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
        return new Site($data);
    }
    /**
     * Navigate to analytics
     *
     * @return AnalyticsRequestBuilder
     */
    public function analytics(): AnalyticsRequestBuilder
    {
        return new AnalyticsRequestBuilder($this->client, $this->requestUrl . '/analytics');
    }
    /**
     * Navigate to columns
     *
     * @return ColumnsRequestBuilder
     */
    public function columns(): ColumnsRequestBuilder
    {
        return new ColumnsRequestBuilder($this->client, $this->requestUrl . '/columns');
    }
    /**
     * Navigate to contentTypes
     *
     * @return ContentTypesRequestBuilder
     */
    public function contentTypes(): ContentTypesRequestBuilder
    {
        return new ContentTypesRequestBuilder($this->client, $this->requestUrl . '/contentTypes');
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
     * Navigate to drive
     *
     * @return DriveRequestBuilder
     */
    public function drive(): DriveRequestBuilder
    {
        return new DriveRequestBuilder($this->client, $this->requestUrl . '/drive');
    }
    /**
     * Navigate to drives
     *
     * @return DrivesRequestBuilder
     */
    public function drives(): DrivesRequestBuilder
    {
        return new DrivesRequestBuilder($this->client, $this->requestUrl . '/drives');
    }
    /**
     * Navigate to externalColumns
     *
     * @return ExternalColumnsRequestBuilder
     */
    public function externalColumns(): ExternalColumnsRequestBuilder
    {
        return new ExternalColumnsRequestBuilder($this->client, $this->requestUrl . '/externalColumns');
    }
    /**
     * Navigate to items
     *
     * @return ItemsRequestBuilder
     */
    public function items(): ItemsRequestBuilder
    {
        return new ItemsRequestBuilder($this->client, $this->requestUrl . '/items');
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
     * Navigate to lists
     *
     * @return ListsRequestBuilder
     */
    public function lists(): ListsRequestBuilder
    {
        return new ListsRequestBuilder($this->client, $this->requestUrl . '/lists');
    }
    /**
     * Navigate to getActivitiesByInterval()
     *
     * @return GetActivitiesByIntervalRequestBuilder
     */
    public function getActivitiesByInterval(): GetActivitiesByIntervalRequestBuilder
    {
        return new GetActivitiesByIntervalRequestBuilder($this->client, $this->requestUrl . '/getActivitiesByInterval()');
    }
    /**
     * Navigate to onenote
     *
     * @return OnenoteRequestBuilder
     */
    public function onenote(): OnenoteRequestBuilder
    {
        return new OnenoteRequestBuilder($this->client, $this->requestUrl . '/onenote');
    }
    /**
     * Navigate to operations
     *
     * @return OperationsRequestBuilder
     */
    public function operations(): OperationsRequestBuilder
    {
        return new OperationsRequestBuilder($this->client, $this->requestUrl . '/operations');
    }
    /**
     * Navigate to pages
     *
     * @return PagesRequestBuilder
     */
    public function pages(): PagesRequestBuilder
    {
        return new PagesRequestBuilder($this->client, $this->requestUrl . '/pages');
    }
    /**
     * Navigate to permissions
     *
     * @return PermissionsRequestBuilder
     */
    public function permissions(): PermissionsRequestBuilder
    {
        return new PermissionsRequestBuilder($this->client, $this->requestUrl . '/permissions');
    }
    /**
     * Navigate to sites
     *
     * @return SitesRequestBuilder
     */
    public function sites(): SitesRequestBuilder
    {
        return new SitesRequestBuilder($this->client, $this->requestUrl . '/sites');
    }
    /**
     * Navigate to termStore
     *
     * @return TermStoreRequestBuilder
     */
    public function termStore(): TermStoreRequestBuilder
    {
        return new TermStoreRequestBuilder($this->client, $this->requestUrl . '/termStore');
    }
    /**
     * Navigate to termStores
     *
     * @return TermStoresRequestBuilder
     */
    public function termStores(): TermStoresRequestBuilder
    {
        return new TermStoresRequestBuilder($this->client, $this->requestUrl . '/termStores');
    }
}
