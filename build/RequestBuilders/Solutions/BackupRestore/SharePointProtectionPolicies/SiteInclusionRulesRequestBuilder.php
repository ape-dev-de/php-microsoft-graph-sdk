<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Solutions\BackupRestore\SharePointProtectionPolicies;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\SiteProtectionRuleCollectionResponse;
use ApeDevDe\MicrosoftGraphSdk\Models\SiteProtectionRule;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Solutions\BackupRestore\SharePointProtectionPolicies\SiteInclusionRules\SiteProtectionRuleRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Solutions\BackupRestore\SharePointProtectionPolicies\SiteInclusionRules\CountRequestBuilder;

/**
 * Request builder for /solutions/backupRestore/sharePointProtectionPolicies/{sharePointProtectionPolicy-id}/siteInclusionRules
 */
class SiteInclusionRulesRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * List siteInclusionRules
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @param int|null $top Show only the first n items
     * @param int|null $skip Skip the first n items
     * @param string|null $search Search items by search phrases
     * @param string|null $filter Filter items by property values
     * @param bool|null $count Include count of items
     * @param array<int, string>|null $orderby Order items by property values
     * @return SiteProtectionRuleCollectionResponse|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null, ?int $top = null, ?int $skip = null, ?string $search = null, ?string $filter = null, ?bool $count = null, ?array $orderby = null): SiteProtectionRuleCollectionResponse|null
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
     * Deserialize response to SiteProtectionRuleCollectionResponse|null
     */
    private function deserializeGet(string $body): SiteProtectionRuleCollectionResponse|null    {
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
            $items[] = new SiteProtectionRule($item);
        }
        $collection = new SiteProtectionRuleCollectionResponse($data);
        $collection->value = $items;
        return $collection;
    }
    /**
     * Get request builder for specific item by ID
     *
     * @param string $siteProtectionRuleId The item ID
     * @return SiteProtectionRuleRequestBuilder
     */
    public function byId(string $siteProtectionRuleId): SiteProtectionRuleRequestBuilder
    {
        return new SiteProtectionRuleRequestBuilder($this->client, $this->requestUrl . '/' . $siteProtectionRuleId);
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
