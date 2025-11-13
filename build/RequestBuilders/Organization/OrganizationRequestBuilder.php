<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Organization;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\OrganizationCollectionResponse;
use ApeDevDe\MicrosoftGraphSdk\Models\Organization;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Organization\OrganizationItemRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Organization\CountRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Organization\DeltaRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Organization\GetAvailableExtensionPropertiesRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Organization\GetByIdsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Organization\ValidatePropertiesRequestBuilder;

/**
 * Request builder for /organization
 */
class OrganizationRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * List organizations
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @param int|null $top Show only the first n items
     * @param int|null $skip Skip the first n items
     * @param string|null $search Search items by search phrases
     * @param string|null $filter Filter items by property values
     * @param bool|null $count Include count of items
     * @param array<int, string>|null $orderby Order items by property values
     * @return OrganizationCollectionResponse|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null, ?int $top = null, ?int $skip = null, ?string $search = null, ?string $filter = null, ?bool $count = null, ?array $orderby = null): OrganizationCollectionResponse|null
    {
        $queryParams = [];
        if ($select !== null && $select !== []) {
            $queryParams['$select'] = implode(',', $select);
        }
        if ($expand !== null && $expand !== []) {
            $queryParams['$expand'] = implode(',', $expand);
        }
        if ($top !== null) {
            $queryParams['$top'] = $top;
        }
        if ($skip !== null) {
            $queryParams['$skip'] = $skip;
        }
        if ($search !== null && $search !== '') {
            $queryParams['$search'] = $search;
        }
        if ($filter !== null && $filter !== '') {
            $queryParams['$filter'] = $filter;
        }
        if ($count !== null) {
            $queryParams['$count'] = $count ? 'true' : 'false';
        }
        if ($orderby !== null && $orderby !== []) {
            $queryParams['$orderby'] = implode(',', $orderby);
        }
        $response = $this->client->get($this->requestUrl, $queryParams);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializeGet($responseBody);
    }

    /**
     * Deserialize response to OrganizationCollectionResponse|null
     */
    private function deserializeGet(string $body): OrganizationCollectionResponse|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Collection response
        $items = [];
        foreach ($data['value'] ?? [] as $item) {
            $items[] = new Organization($item);
        }
        $collection = new OrganizationCollectionResponse($data);
        $collection->value = $items;
        return $collection;
    }
    /**
     * Add new entity to organization
     * @param Organization $body Request body
     * @return Organization|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function post(Organization $body): Organization|null
    {
        $response = $this->client->post($this->requestUrl, $body->getRaw());
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePost($responseBody);
    }

    /**
     * Deserialize response to Organization|null
     */
    private function deserializePost(string $body): Organization|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new Organization($data);
    }
    /**
     * Get request builder for specific item by ID
     *
     * @param string $organizationId The item ID
     * @return OrganizationItemRequestBuilder
     */
    public function byId(string $organizationId): OrganizationItemRequestBuilder
    {
        return new OrganizationItemRequestBuilder($this->client, $this->requestUrl . '/' . $organizationId);
    }
    /**
     * Navigate to $count
     *
     * @return CountRequestBuilder
     */
    public function count(): CountRequestBuilder
    {
        return new CountRequestBuilder($this->client, $this->requestUrl . '/$count');
    }
    /**
     * Navigate to delta()
     *
     * @return DeltaRequestBuilder
     */
    public function delta(): DeltaRequestBuilder
    {
        return new DeltaRequestBuilder($this->client, $this->requestUrl . '/delta()');
    }
    /**
     * Navigate to getAvailableExtensionProperties
     *
     * @return GetAvailableExtensionPropertiesRequestBuilder
     */
    public function getAvailableExtensionProperties(): GetAvailableExtensionPropertiesRequestBuilder
    {
        return new GetAvailableExtensionPropertiesRequestBuilder($this->client, $this->requestUrl . '/getAvailableExtensionProperties');
    }
    /**
     * Navigate to getByIds
     *
     * @return GetByIdsRequestBuilder
     */
    public function getByIds(): GetByIdsRequestBuilder
    {
        return new GetByIdsRequestBuilder($this->client, $this->requestUrl . '/getByIds');
    }
    /**
     * Navigate to validateProperties
     *
     * @return ValidatePropertiesRequestBuilder
     */
    public function validateProperties(): ValidatePropertiesRequestBuilder
    {
        return new ValidatePropertiesRequestBuilder($this->client, $this->requestUrl . '/validateProperties');
    }
}
