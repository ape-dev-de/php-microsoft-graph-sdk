<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\IdentityGovernance\EntitlementManagement\Catalogs\Resources;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\AccessPackageResourceScopeCollectionResponse;
use ApeDevDe\MicrosoftGraphSdk\Models\AccessPackageResourceScope;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\IdentityGovernance\EntitlementManagement\Catalogs\Resources\Scopes\AccessPackageResourceScopeRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\IdentityGovernance\EntitlementManagement\Catalogs\Resources\Scopes\CountRequestBuilder;

/**
 * Request builder for /identityGovernance/entitlementManagement/catalogs/{accessPackageCatalog-id}/resources/{accessPackageResource-id}/scopes
 */
class ScopesRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Get scopes from identityGovernance
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @param int|null $top Show only the first n items
     * @param int|null $skip Skip the first n items
     * @param string|null $search Search items by search phrases
     * @param string|null $filter Filter items by property values
     * @param bool|null $count Include count of items
     * @param array<int, string>|null $orderby Order items by property values
     * @return AccessPackageResourceScopeCollectionResponse|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null, ?int $top = null, ?int $skip = null, ?string $search = null, ?string $filter = null, ?bool $count = null, ?array $orderby = null): AccessPackageResourceScopeCollectionResponse|null
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
     * Deserialize response to AccessPackageResourceScopeCollectionResponse|null
     */
    private function deserializeGet(string $body): AccessPackageResourceScopeCollectionResponse|null    {
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
            $items[] = new AccessPackageResourceScope($item);
        }
        $collection = new AccessPackageResourceScopeCollectionResponse($data);
        $collection->value = $items;
        return $collection;
    }
    /**
     * Create new navigation property to scopes for identityGovernance
     * @param AccessPackageResourceScope $body Request body
     * @return AccessPackageResourceScope|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function post(AccessPackageResourceScope $body): AccessPackageResourceScope|null
    {
        $response = $this->client->post($this->requestUrl, $body->getRaw());
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePost($responseBody);
    }

    /**
     * Deserialize response to AccessPackageResourceScope|null
     */
    private function deserializePost(string $body): AccessPackageResourceScope|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new AccessPackageResourceScope($data);
    }
    /**
     * Get request builder for specific item by ID
     *
     * @param string $accessPackageResourceScopeId The item ID
     * @return AccessPackageResourceScopeRequestBuilder
     */
    public function byId(string $accessPackageResourceScopeId): AccessPackageResourceScopeRequestBuilder
    {
        return new AccessPackageResourceScopeRequestBuilder($this->client, $this->requestUrl . '/' . $accessPackageResourceScopeId);
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
