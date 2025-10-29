<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Shares;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\SharedDriveItem;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Shares\CreatedByUserRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Shares\DriveItemRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Shares\ItemsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Shares\LastModifiedByUserRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Shares\ListModelRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Shares\ListItemRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Shares\PermissionRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Shares\RootRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Shares\SiteRequestBuilder;

/**
 * Request builder for /shares/{sharedDriveItem-id}
 */
class SharedDriveItemRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Accessing shared DriveItems
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return SharedDriveItem
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): SharedDriveItem
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
     * Deserialize response to SharedDriveItem
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
        return new SharedDriveItem($data);
    }
    /**
     * Update entity in shares
     * @param SharedDriveItem $body Request body
     * @return SharedDriveItem
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function patch(SharedDriveItem $body): SharedDriveItem
    {
        // Get raw data from model
        $bodyData = method_exists($body, 'getRaw') ? $body->getRaw() : json_encode(json_decode($body, true));
        $response = $this->client->patch($this->requestUrl, $bodyData);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePatch($responseBody);
    }

    /**
     * Deserialize response to SharedDriveItem
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
        return new SharedDriveItem($data);
    }
    /**
     * Delete entity from shares
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
     * Navigate to createdByUser
     *
     * @return CreatedByUserRequestBuilder
     */
    public function createdByUser(): CreatedByUserRequestBuilder
    {
        return new CreatedByUserRequestBuilder($this->client, $this->requestUrl . '/createdByUser');
    }
    /**
     * Navigate to driveItem
     *
     * @return DriveItemRequestBuilder
     */
    public function driveItem(): DriveItemRequestBuilder
    {
        return new DriveItemRequestBuilder($this->client, $this->requestUrl . '/driveItem');
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
     * Navigate to list
     *
     * @return ListModelRequestBuilder
     */
    public function listModel(): ListModelRequestBuilder
    {
        return new ListModelRequestBuilder($this->client, $this->requestUrl . '/list');
    }
    /**
     * Navigate to listItem
     *
     * @return ListItemRequestBuilder
     */
    public function listItem(): ListItemRequestBuilder
    {
        return new ListItemRequestBuilder($this->client, $this->requestUrl . '/listItem');
    }
    /**
     * Navigate to permission
     *
     * @return PermissionRequestBuilder
     */
    public function permission(): PermissionRequestBuilder
    {
        return new PermissionRequestBuilder($this->client, $this->requestUrl . '/permission');
    }
    /**
     * Navigate to root
     *
     * @return RootRequestBuilder
     */
    public function root(): RootRequestBuilder
    {
        return new RootRequestBuilder($this->client, $this->requestUrl . '/root');
    }
    /**
     * Navigate to site
     *
     * @return SiteRequestBuilder
     */
    public function site(): SiteRequestBuilder
    {
        return new SiteRequestBuilder($this->client, $this->requestUrl . '/site');
    }
}
