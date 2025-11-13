<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Security\Labels\Categories;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\SecuritySubcategoryTemplateCollectionResponse;
use ApeDevDe\MicrosoftGraphSdk\Models\SecuritySubcategoryTemplate;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Security\Labels\Categories\Subcategories\SubcategoryTemplateRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Security\Labels\Categories\Subcategories\CountRequestBuilder;

/**
 * Request builder for /security/labels/categories/{categoryTemplate-id}/subcategories
 */
class SubcategoriesRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * List subcategories
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @param int|null $top Show only the first n items
     * @param int|null $skip Skip the first n items
     * @param string|null $search Search items by search phrases
     * @param string|null $filter Filter items by property values
     * @param bool|null $count Include count of items
     * @param array<int, string>|null $orderby Order items by property values
     * @return SecuritySubcategoryTemplateCollectionResponse|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null, ?int $top = null, ?int $skip = null, ?string $search = null, ?string $filter = null, ?bool $count = null, ?array $orderby = null): SecuritySubcategoryTemplateCollectionResponse|null
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
     * Deserialize response to SecuritySubcategoryTemplateCollectionResponse|null
     */
    private function deserializeGet(string $body): SecuritySubcategoryTemplateCollectionResponse|null    {
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
            $items[] = new SecuritySubcategoryTemplate($item);
        }
        $collection = new SecuritySubcategoryTemplateCollectionResponse($data);
        $collection->value = $items;
        return $collection;
    }
    /**
     * Create subcategoryTemplate
     * @param SecuritySubcategoryTemplate $body Request body
     * @return SecuritySubcategoryTemplate|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function post(SecuritySubcategoryTemplate $body): SecuritySubcategoryTemplate|null
    {
        $response = $this->client->post($this->requestUrl, $body->getRaw());
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePost($responseBody);
    }

    /**
     * Deserialize response to SecuritySubcategoryTemplate|null
     */
    private function deserializePost(string $body): SecuritySubcategoryTemplate|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new SecuritySubcategoryTemplate($data);
    }
    /**
     * Get request builder for specific item by ID
     *
     * @param string $subcategoryTemplateId The item ID
     * @return SubcategoryTemplateRequestBuilder
     */
    public function byId(string $subcategoryTemplateId): SubcategoryTemplateRequestBuilder
    {
        return new SubcategoryTemplateRequestBuilder($this->client, $this->requestUrl . '/' . $subcategoryTemplateId);
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
}
